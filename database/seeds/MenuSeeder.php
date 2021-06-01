<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'menu_name' => 'Dashboard',
            'icon_name' => 'home',
            'route' => 'dashboard',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Job List',
            'icon_name' => 'activity',
            'route' => 'jobs.index',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Job Company',
            'icon_name' => 'activity',
            'route' => 'company.index',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Job Category',
            'icon_name' => 'activity',
            'route' => 'category.index',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Candidates List',
            'icon_name' => 'user',
            'route' => 'candidate',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Accepted',
            'icon_name' => 'user',
            'route' => 'accepted',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Rejected',
            'icon_name' => 'user',
            'route' => 'rejected',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Position List',
            'icon_name' => 'user',
            'route' => 'pcandidate',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Accepted',
            'icon_name' => 'user',
            'route' => 'paccepted',
            'status' => 1,
        ]);

        DB::table('menu')->insert([
            'menu_name' => 'Rejected',
            'icon_name' => 'user',
            'route' => 'prejected',
            'status' => 1,
        ]);

    }
}
