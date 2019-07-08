<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use File;
use Image;
use Validator;
use Hash;

class SettingProfileController extends Controller
{
    public function index(){
        $modal = true;
        return view('dashboard.setting-account.index',compact('modal'));
    }

    public function store(Request $request){
        $current_id =  \Auth::user()->id;
        $this->validate($request, [
            "first_name" => "required|min:2|max:40",
            "last_name"  => "required|min:2|max:40",
            "username"   => "required|min:5|max:40",
            "bio"        => "min:50|max:225",
            "email"      => "required|max:30|unique:users,email,$current_id",
        ]);
        

        if($image=$request->file('user_photo')){
            $current_avatar = User::where('id', \Auth::user()->id)->first()->avatar;

            $this->path = storage_path('app/public/user_photo/');
            $this->dimensions = ['300', '60'];

            if (!File::isDirectory($this->path)) {
                File::makeDirectory($this->path, 0777, true);
            }
            
            if(file_exists(public_path("storage/user_photo/".$current_avatar))) {
                Storage::delete("public/user_photo/".$current_avatar);
                Storage::delete("public/user_photo/300/".$current_avatar);
                Storage::delete("public/user_photo/60/".$current_avatar);
            }
            
            $imgg = str_replace("[removed]", "", $request->input('user_photo2'));
            $imgg = str_replace('data:image/png;base64,', '', $imgg);
            $imgg = str_replace('data:image/jpeg;base64,', '', $imgg);
            $imgg = str_replace('data:image/jpg;base64,', '', $imgg);
            $crop_img = base64_decode($imgg);

            $imageName   = \Auth::user()->username.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($crop_img)->save($this->path . '/' . $imageName);
                
            foreach ($this->dimensions as $row) {
                    $canvas = Image::canvas($row, $row);
                    $resizeImage  = Image::make($crop_img)->resize($row, $row, function($constraint) {
                        $constraint->aspectRatio();
                    });
                    
                    if (!File::isDirectory($this->path . '/' . $row)) {
                        File::makeDirectory($this->path . '/' . $row);
                    }
    
                    $canvas->insert($resizeImage, 'center');
                    $canvas->save($this->path . '/' . $row . '/' . $imageName);
            }

            User::find(\Auth::user()->id)->update([
                    'avatar' => $imageName
            ]);

        }
        User::find(\Auth::user()->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'bio' => $request->bio
        ]);
        

        return redirect('dashboard/setting')->with('success','Berhasil Memperbarui Profile');
    }

    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), \Auth::user()->password))) {
            // The passwords matches
            $msg = "Password yang anda masukkan tidak cocok dengan password akun anda.";
            return response()->json(compact('msg'), 422);
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            $msg = "Password yang anda masukkan tidak boleh sama dengan password sekarang.";
            return response()->json(compact('msg'), 422);
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = \Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        $msg = "Password Berhasil Diganti.";

        return response()->json(compact('msg'));
    }

}
