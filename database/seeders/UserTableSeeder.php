<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('users')
            ->where('id', 1)
            ->update([
                'role_id' => 3
            ]);
    }
}
