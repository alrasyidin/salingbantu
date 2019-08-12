<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'email' => 'admin@gmail.com',
            'name' => 'Sihabudin Sholeh',
            'password' => Bcrypt('admin'),
        ]);
        $admin->save();
    }
}
