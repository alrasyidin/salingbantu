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

        $this->path = storage_path('app/public/campaign_images/');
        $this->dimensions = ['300', '60'];
        
        if (!File::isDirectory($this->path)) {
            File::makeDirectory($this->path, 0777, true);
        }

        
        foreach ($this->dimensions as $row) {
            if (!File::isDirectory($this->path.'/'.$row)) {
                File::makeDirectory($this->path.'/'.$row);
            }

        }


        for($i = 0; $i < 30; $i++){
            $image300 = $faker->image('public/storage/campaign_images/300/',300,300, null, false);
            $image60 = $faker->image('public/storage/campaign_images/60/',60,60, null, false);

            App\Models\CampaignImage::create([
                'campaign_id' => $campaigns[$i]['id'],
                'name' => 'Gambar_original'.$i,
                'path' => $image300,
                'size' => $i,
            ]);
        }

    }
}
