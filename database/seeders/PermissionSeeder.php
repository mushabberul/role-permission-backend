<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module = Module::where('module_slug', 'module-management')->first();
        $modulePermissions = [
            'Module Index',
            'Module Store',
            'Module Update'
        ];
        foreach ($modulePermissions as $modulePermission) {
            Permission::updateOrCreate([
                'module_id' => $module->id,
                'permission_name' => $modulePermission,
                'permission_slug' => Str::slug($modulePermission)

            ]);
        }

        $module = Module::where('module_slug', 'role-management')->first();
        $rolePermissions = [
            'Role Index',
            'Role Store',
            'Role Update'
        ];
        foreach ($rolePermissions as $rolePermission) {
            Permission::updateOrCreate([
                'module_id' => $module->id,
                'permission_name' => $rolePermission,
                'permission_slug' => Str::slug($rolePermission),
            ]);
        }

        $module = Module::where('module_slug', 'user-management')->first();
        $userPermissions = [
            'User Index',
            'User Store',
            'User Update'
        ];
        foreach ($userPermissions as $userPermission) {
            Permission::updateOrCreate([
                'module_id' => $module->id,
                'permission_name' => $rolePermission,
                'permission_slug' => Str::slug($userPermission),
            ]);
        }
    }
}
