<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('123456');
        $adminRecodes = [
            ['id' => 1, 'name' => 'Admin', 'type' => 'admin', 'mobile' => 9832264072, 'email' => 'admin@admin.com', 'password' => $password, 'image' => '', 'status' => 1],
        ];
        Admin::insert($adminRecodes);
    }
}
