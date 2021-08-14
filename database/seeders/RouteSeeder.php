<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
                'route_name'  => 'categories.index',
                'route_title' => 'Quản Lí Danh Mục Sản Phẩm'
            ]);

        DB::table('routes')->insert([
                'route_name'  => 'products.index',
                'route_title' => 'Quản Lí Sản Phẩm'
            ]);

        DB::table('routes')->insert([
                'route_name'  => 'menus.index',
                'route_title' => 'Quản Lí Menu'
            ]);

        DB::table('routes')->insert([
                'route_name'  => 'bills.index',
                'route_title' => 'Quản Lí Hóa Đơn'
            ]);

        DB::table('routes')->insert([
                'route_name'  => 'users.index',
                'route_title' => 'Quản Lí Nhân Viên'
            ]);
        DB::table('routes')->insert([
                'route_name'  => 'news.index',
                'route_title' => 'Quản Lí Tin Tức'
            ]);
    }
}
