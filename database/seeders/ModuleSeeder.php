<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            'Module Management',
            'Role Management',
            'User Management'
        ];

        foreach ($modules as $module) {
            Module::updateOrCreate([
                'module_name' => $module,
                'module_slug' => Str::slug($module),
            ]);
        }
    }
}
