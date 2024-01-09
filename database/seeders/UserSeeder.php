<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('role_slug', 'admin')->first();
        User::updateOrCreate([
            'role_id' => $admin->id,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'status' => true,
        ]);


        $user = Role::where('role_slug', 'user')->first();
        User::updateOrCreate([
            'role_id' => $user->id,
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => 'password',
            'status' => true,
        ]);
    }
}
