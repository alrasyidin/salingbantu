<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Asdita',
            'last_name'  => 'Prasetya',
            'username'   => 'hellodit',
            'email'      => 'asditap@gmail.com',
            'password'   =>  bcrypt('hellodit')
        ]);
    }
}
