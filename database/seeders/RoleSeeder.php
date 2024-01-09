<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([
            'role_name' => 'User',
            'role_slug' => 'user'
        ]);

        Role::updateOrCreate([
            'role_name' => 'Admin',
            'role_slug' => 'admin'
        ]);
    }
}
