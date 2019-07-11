<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $users = App\Models\User::all()->toArray();

        for($i = 0; $i < 30; $i++){
            $user = $faker->randomElement($users);
            App\Models\Campaign::create([
                'title' => "Example campaign saling bantu ".$i,
                'user_id' => $user['id'],
                'goals' => $faker->numberBetween(10000, 100000000),
                'slug' => str_slug($faker->name),
                'endof_campaign' => date("Y/m/d",mktime(0, 0, 0, date('m'), date('d') + 30, date('Y'))),
                'description' => $faker->randomHtml(2,3),
                'status' => 'published'
            ]);
        }
    }
}
