<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $this->path = public_path('uploads/images/avatar');
        $this->dimensions = ['300', '60'];

        if (!File::isDirectory($this->path)) {
            File::makeDirectory($this->path, 0777, true);
        }


        foreach ($this->dimensions as $row) {
            if (!File::isDirectory($this->path.'/'.$row)) {
                File::makeDirectory($this->path.'/'.$row);
            }
        }
        $image300 = $faker->image(public_path('uploads/images/avatar/300'),300,300,null,false);
        $image60 = $faker->image(public_path('uploads/images/avatar/60'),60,60,null,false);


        User::create([
            'first_name' => 'Asdita',
            'last_name'  => 'Prasetya',
            'username'   => 'hellodit',
            'bio'        =>  'Saya ganteng bangets, tahnks',
            'email'      => 'asditap@gmail.com',
            'avatar'     => $image60,
            'password'   =>  bcrypt('hellodit')
        ]);

        User::create([
            'first_name' => 'Sihabudin',
            'last_name'  => 'Sholeh',
            'username'   => 'masholeh',
            'email'      => 'masholeh@gmail.com',
            'bio'        =>  'Saya ganteng bangets, tahnks',
            'avatar'     => $image60,
            'password'   =>  bcrypt('hellodit')
        ]);

        User::create([
            'first_name' => 'codenesia',
            'last_name'  => 'Sholeh',
            'username'   => 'codenesia',
            'email'      => 'codenesia@gmail.com',
            'bio'        =>  'Saya ganteng bangets, tahnks',
            'avatar'     => $image60,
            'password'   =>  bcrypt('hellodit')
        ]);
    }
}
