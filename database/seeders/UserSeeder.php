<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'username' => 'admin',
                'lname' => 'AMPARADO',
                'fname' => 'ETIENNE',
                'mname' => 'P',
                'sex' => 'MALE',
                'province' => 'MISAMIS OCCIDENTAL',
                'city' => 'OZAMIZ CITY',
                'barangay' => 'ANNEX',
                'street' => 'P-6',
                'email' => 'eshen@dev.com',
                'contact_no' => '09167789585',
                'role' => 'ADMINISTRATOR',
                'password' => Hash::make('a')
            ],

            [
                'username' => 'lib',
                'lname' => 'CENAS',
                'fname' => 'DAPNY',
                'mname' => 'P',
                'sex' => 'MALE',
                'province' => 'MISAMIS OCCIDENTAL',
                'city' => 'OZAMIZ CITY',
                'barangay' => 'ANNEX',
                'street' => 'P-6',
                'email' => 'dap@dev.com',
                'contact_no' => '09167789585',
                'role' => 'ADMINISTRATOR',
                'password' => Hash::make('a')
            ],


        ];

        \App\Models\User::insertOrIgnore($data);
    }
}
