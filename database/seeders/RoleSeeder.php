<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class RoleSeeder extends Seeder
{
     public function run(): void
    {
        $roles = [
            ['role_name'=>'admin','description'=>'Administrator'],
            ['role_name'=>'cashier','descrition'=>'Kasir'],
            ['role_name'=>'chef','descrition'=>'Koki'],
            ['role_name'=>'customer','descrition'=>'Pelanggan'],
        ];
        DB::table('roles')->insert($roles);
    }
}
