<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\AdminCreditAccount;

class AdminCreditAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = App\Models\Bank::all()->toArray();
        $admins = App\Models\Admin::all()->toArray();
        $faker = Factory::create();

        for ($i=0; $i < 5 ; $i++) {
            $bank = $faker->randomElement($banks);
            $admin = $faker->randomElement($admins);
            AdminCreditAccount::create([
                'number' => '0000'.$i,
                'holder_name' => $admin['name'],
                'email' => $admin['email'],
                'phone' => '082233622',
                'admin_id' => $admin['id'],
                'primary' => '0',
                'bank_id' => $bank['code'],
            ]);
        }
    }
}
