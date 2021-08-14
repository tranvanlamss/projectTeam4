<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
                'role_name' => 'Admin'
            ]);
        DB::table('roles')->insert([
                'role_name' => 'Mod'
            ]);
        DB::table('roles')->insert([
                'role_name' => 'User'
            ]);
    }
}
