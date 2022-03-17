<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibraryLocationSeeder extends Seeder
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
                'location' => 'GADTC LIBRARY',
                'sys_user' => 'ADMIN',
            ],

        ];

    

        \App\Models\LibraryLocation::insertOrIgnore($data);
    }
}
