<?php

use Illuminate\Database\Seeder;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_menus')->insert([
            'submenu_name' => 'Job Company',
            'icon_name' => 'activity',
            'route' => 'company.index',
            'status' => 1,
        ]);

        DB::table('sub_menus')->insert([
            'submenu_name' => 'Job Category',
            'icon_name' => 'activity',
            'route' => 'category.index',
            'status' => 1,
        ]);

        DB::table('sub_menus')->insert([
            'submenu_name' => 'Accepted',
            'icon_name' => 'user',
            'route' => 'accepted',
            'status' => 1,
        ]);

        DB::table('sub_menus')->insert([
            'submenu_name' => 'Rejected',
            'icon_name' => 'user',
            'route' => 'rejected',
            'status' => 1,
        ]);

        DB::table('sub_menus')->insert([
            'submenu_name' => 'Accepetd',
            'icon_name' => 'user',
            'route' => 'paccepted',
            'status' => 1,
        ]);

        DB::table('sub_menus')->insert([
            'submenu_name' => 'Rejected',
            'icon_name' => 'user',
            'route' => 'prejected',
            'status' => 1,
        ]);

    }
}
