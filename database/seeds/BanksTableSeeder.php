<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            [
                "name"  => "Bank Mandiri",
                "code"  => "008",
                "type" => "Bank Pemerintah"
            ],
            [
                "name"  => "Bank Rakyat Indonesia (BRI)",
                "code"  => "002",
                "type" => "Bank Pemerintah"
            ],
            [
                "name"  => "Bank Bukopin",
                "code"  => "441",
                "type" => "Bank Swasta Nasional Devisa"
            ],
            [
                "name"  => "Bank Capital Indonesia",
                "code"  => "054",
                "type" => "Bank Swasta Nasional Devisa"
            ],
            [
                "name"  => "Bank Central Asia (BCA)",
                "code"  => "014",
                "type" => "Bank Swasta Nasional Devisa"
            ]
        ];
        DB::table('banks')->insert($banks);

    }
}
