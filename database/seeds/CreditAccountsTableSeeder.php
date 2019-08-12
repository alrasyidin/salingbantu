<?php

use Illuminate\Database\Seeder;
use App\Models\CreditAccount;
use Faker\Factory;

class CreditAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = App\Models\Bank::all()->toArray();
        $users = App\Models\User::all()->toArray();
        $faker = Factory::create();

        for ($i=0; $i < 5 ; $i++) {
            $bank = $faker->randomElement($banks);
            $user = $faker->randomElement($users);
            CreditAccount::create([
                'number' => '0000'.$i,
                'holder_name' => $user['first_name'],
                'email' => $user['email'],
                'phone' => '082233622',
                'user_id' => $user['id'],
                'primary' => '0',
                'bank_id' => $bank['code'],
            ]);
        }
    }
}
