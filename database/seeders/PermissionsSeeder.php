<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions customers
        Permission::create(['name' => 'customer:index']);
        Permission::create(['name' => 'customer:create']);
        Permission::create(['name' => 'customer:edit']);
        Permission::create(['name' => 'customer:delete']);

        // create permissions customergroups
        Permission::create(['name' => 'customergroup:index']);
        Permission::create(['name' => 'customergroup:create']);
        Permission::create(['name' => 'customergroup:edit']);
        Permission::create(['name' => 'customergroup:delete']);

        // create permissions customernotes
        Permission::create(['name' => 'customernote:index']);
        Permission::create(['name' => 'customernote:create']);
        Permission::create(['name' => 'customernote:edit']);
        Permission::create(['name' => 'customernote:delete']);

        // create permissions projects
        Permission::create(['name' => 'project:index']);
        Permission::create(['name' => 'project:create']);
        Permission::create(['name' => 'project:edit']);
        Permission::create(['name' => 'project:delete']);

        // create permissions tasks
        Permission::create(['name' => 'task:index']);
        Permission::create(['name' => 'task:create']);
        Permission::create(['name' => 'task:edit']);
        Permission::create(['name' => 'task:delete']);

        // create permissions taskpriorities
        Permission::create(['name' => 'taskpriority:index']);
        Permission::create(['name' => 'taskpriority:create']);
        Permission::create(['name' => 'taskpriority:edit']);
        Permission::create(['name' => 'taskpriority:delete']);
        
        // create permissions tasktatuses
        Permission::create(['name' => 'taskstatus:index']);
        Permission::create(['name' => 'taskstatus:create']);
        Permission::create(['name' => 'taskstatus:edit']);
        Permission::create(['name' => 'taskstatus:delete']);

        // create roles and assign existing permissions

        //employer
        $role1 = Role::create(['name' => 'employer']);
        foreach(['index', 'create', 'edit'] as $per){
          $role1->givePermissionTo('customer:'.$per);
          $role1->givePermissionTo('customernote:'.$per);
          $role1->givePermissionTo('project:'.$per);
          $role1->givePermissionTo('task:'.$per);
        }

        foreach(['index'] as $per){
          $role1->givePermissionTo('customergroup:'.$per);
          $role1->givePermissionTo('taskpriority:'.$per);
          $role1->givePermissionTo('taskstatus:'.$per);
        }

        //Admin
        $role2 = Role::create(['name' => 'admin']);
        foreach(['index', 'create', 'edit', 'delete'] as $per){
          $role2->givePermissionTo('customer:'.$per);
          $role2->givePermissionTo('customergroup:'.$per);
          $role2->givePermissionTo('customernote:'.$per);
          $role2->givePermissionTo('project:'.$per);
          $role2->givePermissionTo('task:'.$per);
          $role2->givePermissionTo('taskpriority:'.$per);
          $role2->givePermissionTo('taskstatus:'.$per);
        }


        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($role3);
    }
}