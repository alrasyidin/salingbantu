<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class CampaignImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $campaigns = App\Models\Campaign::all()->toArray();

        $this->path = public_path('uploads/images/campaign');
        $this->dimensions = ['300', '60'];

        if (!File::isDirectory($this->path)) {
            File::makeDirectory($this->path, 0777, true);
        }


        foreach ($this->dimensions as $row) {
            if (!File::isDirectory($this->path.'/'.$row)) {
                File::makeDirectory($this->path.'/'.$row);
            }

        }


        for($i = 0; $i < 10; $i++){

            $image300 = $faker->image(public_path('uploads/images/campaign/300'),300,300,null,false);
            $image60 = $faker->image(public_path('uploads/images/campaign/60'),60,60,null,false);
            App\Models\CampaignImage::create([
                'campaign_id' => $campaigns[$i]['id'],
                'name' => 'original_image'.$i,
                'path' => $image300,
                'size' => $i,
            ]);
        }

    }
}
