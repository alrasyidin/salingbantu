<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Campaign;
use App\Models\CampaignImage;
use App\Notifications\CampaignPublished;
use File;
use Image;
class CampaignController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        // $this->middleware(function ($request, $next) {
        //     $this->user = Auth()->user();
        //     $this->request = $request;
        //     return $next($request);
        // });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.dashboard.campaign.index');
    }

    public function data(Request $request){
        if($request->ajax()){
            $campaigns = Campaign::where('user_id',"=",\Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
            return view('app.dashboard.campaign.data',compact('campaigns'))->render();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug = null)
    {
        if(!empty($slug)){
            $campaign = Campaign::where('slug',$slug)->with('images')->firstOrFail();
            if(\Auth::user()->can('update', $campaign)){
                return view('app.dashboard.campaign.form',compact('campaign'));
            }else{
                return abort(401);
            }
        }
        return view('app.dashboard.campaign.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required|min:5|max:100|unique:campaigns,title",
            "description" => "required|min:150",
            "goals" => "required|max:30",
            "endof_campaign" => "required",
            "campaign_images" => "required",
            "campaign_images.*" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);

        $campaign = Campaign::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'goals' => str_replace(".","",$request->get('goals')),
            'endof_campaign' => $request->get('endof_campaign'),
            'user_id' => \Auth::user()->id,
            'status' => 'published',
            'slug' => str_slug($request->get('title'),'-'),
        ]);

        if($images = $request->file('campaign_images')){
            $this->path = storage_path('app/public/campaign_images/');
            $this->dimensions = ['300', '60'];
            if (!File::isDirectory($this->path)) {
                File::makeDirectory($this->path, 0777, true);
            }

            foreach($images as $image){
                $imageName   = uniqid().'_in_'.date('Ymd').'.'.$image->getClientOriginalExtension();
                Image::make($image->getRealPath())->save($this->path.'/'.$imageName);

                foreach ($this->dimensions as $row) {
                    $canvas = Image::canvas($row, $row);
                    $resizeImage  = Image::make($image->getRealPath())->resize($row, $row, function($constraint) {
                        $constraint->aspectRatio();
                    });

                    if (!File::isDirectory($this->path.'/'.$row)) {
                        File::makeDirectory($this->path.'/'.$row);
                    }

                    $canvas->insert($resizeImage,'center');
                    $canvas->save($this->path.'/'.$row.'/'.$imageName);
                }
                CampaignImage::create([
                    'name' => $image->getClientOriginalName(),
                    'size' => $image->getClientSize(),
                    'path' => $imageName,
                    'campaign_id' => $campaign->id,
            ]);
            }
        }

        Auth()->user()->notify(new CampaignPublished($campaign));

        return redirect('dashboard/campaign')->with('success','Campaign telah ditambahkan');

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campaign = Campaign::where('id',$id)->with('images')->firstOrFail();

        if(\Auth::user()->can('update', $campaign)){
            $this->validate($request, [
                "title" => "required|min:5|max:100|unique:campaigns,title,".$campaign->id,
                "description" => "required|min:150",
                "goals" => "required",
                "endof_campaign" => "required",
            ]);

            $campaign = Campaign::find($id)->update([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'goals' => str_replace(".","",$request->get('goals')),
                'endof_campaign' => $request->get('endof_campaign'),
                'status' => 'published',
                'slug' => str_slug($request->get('title'),'-'),
            ]);

            if($images = $request->file('campaign_images')){
                $this->path = storage_path('app/public/campaign_images/');
                $this->dimensions = ['300', '60'];
                if (!File::isDirectory($this->path)) {
                    File::makeDirectory($this->path, 0777, true);
                }

                foreach($images as $image){
                    $imageName   = uniqid().'_in_'.date('Ymd').'.'.$image->getClientOriginalExtension();
                    Image::make($image->getRealPath())->save($this->path.'/'.$imageName);

                    foreach ($this->dimensions as $row) {
                        $canvas = Image::canvas($row, $row);
                        $resizeImage  = Image::make($image->getRealPath())->resize($row, $row, function($constraint) {
                            $constraint->aspectRatio();
                        });

                        if (!File::isDirectory($this->path.'/'.$row)) {
                            File::makeDirectory($this->path.'/'.$row);
                        }

                        $canvas->insert($resizeImage,'center');
                        $canvas->save($this->path.'/'.$row.'/'.$imageName);
                    }
                    CampaignImage::create([
                        'name' => $image->getClientOriginalName(),
                        'size' => $image->getClientSize(),
                        'path' => $imageName,
                        'campaign_id' => $id,
                ]);
                }
            }
            return redirect('dashboard/campaign')->with('success','Campaign telah berhasil diperbarui');
        }else{
            return abort(401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);
        $images = CampaignImage::where('campaign_id','=',$id)->get();



        if(\Auth::user()->can('delete', $campaign)){
            $campaign->delete();
            foreach($images as $image){
                Storage::delete('public/campaign_images/'.$image->path);
                Storage::delete('public/campaign_images/60/'.$image->path);
                Storage::delete('public/campaign_images/300/'.$image->path);
            }
            $image->delete();
            return response()->json([
                'status' => 1,
                'pesan' => 'Data telah berhasil dihapus'
            ],200);
        }else{
            return response()->json([
                'status' => 0,
                'pesan' => 'Terjadi kesalahan!!'
            ],401);
        }
    }

    public function deleteimg($id) {
        dd($id);
        // $image = CampaignImage::where('id', '=', $id)->firstOrFail();
        // Storage::delete('public/campaign_images/'.$image->path);
        // Storage::delete('public/campaign_images/60/'.$image->path);
        // Storage::delete('public/campaign_images/300/'.$image->path);
        // CampaignImage::find($id)->delete();
        // $response = array('status' => 'Images deleted!!');
        // return response()->json($response);
    }

}
