<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessAdminPermission = Permission::firstOrCreate(['name' => 'access_admin', 'guard_name' => 'web']);
        $userPermissions = Permission::whereIn('name', ['user_create', 'user_read', 'user_update', 'user_delete'])->get();
        $allPermissions = Permission::all();

        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);
        $userRole->syncPermissions([$accessAdminPermission]);

        $managerRole = Role::firstOrCreate(['name' => 'manager', 'guard_name' => 'web']);
        $managerRole->syncPermissions($userPermissions->push($accessAdminPermission));

        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $adminRole->syncPermissions($allPermissions);
    }
}
