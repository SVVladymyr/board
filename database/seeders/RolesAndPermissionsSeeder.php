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


        // create permissions
        $permissions = [
           'organizations-list',
           'organizations-create',
           'organizations-edit',
           'organizations-delete',
           'settings-list',
           'settings-create',
           'settings-edit',
           'settings-delete',
           'statuses-list',
           'statuses-create',
           'statuses-edit',
           'statuses-delete',
           'applications-list',
           'applications-create',
           'applications-edit',
           'applications-delete',
           'passages-list',
           'passages-create',
           'passages-edit',
           'passages-delete'
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'Admin'])->givePermissionTo([
           'organizations-list',
           'organizations-create',
           'organizations-edit',
           'organizations-delete',
           'settings-list',
           'settings-create',
           'settings-edit',
           'settings-delete',
           'statuses-list',
           'statuses-create',
           'statuses-edit',
           'statuses-delete',
           'applications-list',
           'passages-list'
        ]);


        $role = Role::create(['name' => 'PassOffice'])->givePermissionTo([
           'organizations-list',
           'organizations-create',
           'organizations-edit',
           'organizations-delete',
           'applications-list',
           'applications-edit',
           'passages-list',
           'passages-create',
           'passages-edit',
        ]);

        $role = Role::create(['name' => 'Organization'])->givePermissionTo([
           'applications-list',
           'applications-create',
           'applications-edit',
           'applications-delete',
           'passages-list',
           'passages-create',
           'passages-edit',
           'passages-delete'
        ]);
        
        $role = Role::create(['name' => 'Super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
