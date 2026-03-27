<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // permissions
        $permissions = [
            'user.manage',

            'zine.view',
            'zine.create',
            'zine.update',
            'zine.delete',
            'zine.restore',
            'zine.forceDelete',

            'post.view',
            'post.create',
            'post.update',
            'post.delete',
            'post.restore',
            'post.forceDelete',

            'dues.view',
            'dues.markPaid',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $member = Role::firstOrCreate(['name' => 'member']);

        // assign
        $admin->syncPermissions($permissions);

        $memberPermissions = [
            'zine.view',
            'zine.create',
            'zine.update',
            'zine.delete',
            'zine.restore',
            'zine.forceDelete',
            'post.view',
            'post.create',
            'post.update',
            'post.delete',
            'post.restore',
            'post.forceDelete',
            'dues.view',
        ];

        $member->syncPermissions($memberPermissions);
    }
}
