<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Define permissions
        $permissions = [
            'view users',
            'edit users',
            'delete users',
            'view roles',
            'edit roles',
            'delete roles',
            'view permissions',
            'edit permissions',
            'delete permissions',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Define roles
        $roles = [
            'admin',
            'moderator',
            'user',
        ];

        // Create roles and assign permissions
        foreach ($roles as $roleName) {
            $role = Role::create(['name' => $roleName]);
            if ($roleName === 'admin') {
                $role->givePermissionTo(Permission::all());
            } elseif ($roleName === 'moderator') {
                $role->givePermissionTo([
                    'view users',
                    'edit users',
                    'view roles',
                    'edit roles',
                ]);
            } else {
                $role->givePermissionTo('view users');
            }
        }

        // Assign roles to users
        $admin = User::query()->where('email', 'sexy@admin.com')->first();
        $admin->assignRole('admin');

        $moderator = User::query()->where('email', 'teacher@gmail.com')->first();
        $moderator->assignRole('moderator');

        $user = User::query()->where('email', 'student@gmail.com')->first();
        $user->assignRole('user');

    }
}

