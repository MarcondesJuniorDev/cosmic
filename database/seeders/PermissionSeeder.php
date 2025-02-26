<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ["name"=> "user_create"],
            ["name"=> "user_read"],
            ["name"=> "user_update"],
            ["name"=> "user_delete"],
            ["name"=> "role_create"],
            ["name"=> "role_read"],
            ["name"=> "role_update"],
            ["name"=> "role_delete"],
            ["name"=> "permission_create"],
            ["name"=> "permission_read"],
            ["name"=> "permission_update"],
            ["name"=> "permission_delete"],
        ];
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
