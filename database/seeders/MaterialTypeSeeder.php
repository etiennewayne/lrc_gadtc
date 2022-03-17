<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MaterialTypeSeeder extends Seeder
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
                'material_type' => 'Artifacts',
                'sys_user' => 'ADMIN',
            ],
            [
                'material_type' => 'Books',
                'sys_user' => 'ADMIN',
            ],
            [
                'material_type' => 'Computer files',
                'sys_user' => 'ADMIN',
            ],
            [
                'material_type' => 'E-books',
                'sys_user' => 'ADMIN',
            ],

        ];

    

        \App\Models\MaterialType::insertOrIgnore($data);


    }
}
