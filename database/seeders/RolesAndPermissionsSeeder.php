<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'show tasks']);
        Permission::create(['name' => 'show students']);
        Permission::create(['name' => 'change role']);

        Role::create(['name' => 'student'])->givePermissionTo(['show tasks']);
        Role::create(['name' => 'teacher'])->givePermissionTo(['show students']);
        Role::create(['name' => 'admin'])->givePermissionTo(['change role']);
    }
}
