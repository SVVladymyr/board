<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456'),
        ]);

        $role = Role::where('name', 'Admin')->first();
        $admin->assignRole([$role->id]);


        $po = User::create([
            'name' => 'po',
            'email' => 'po@test.com',
            'password' => Hash::make('123456'),
        ]);

        $role = Role::where('name', 'PassOffice')->first();
        $po->assignRole([$role->id]);
    }
}
