<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('userroles')
            ->insertOrIgnore([
                [
                    'user_id' => 1,
                    'role' => 'admin',
                ],
                [
                    'user_id' => 2,
                    'role' => 'user',
                ],
                [
                    'user_id' => 3,
                    'role' => 'user',
                ],
                [
                    'user_id' => 4,
                    'role' => 'user',
                ],
                [
                    'user_id' => 5,
                    'role' => 'user',
                ]
            ]);
    }
}
