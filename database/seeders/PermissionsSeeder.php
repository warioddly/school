<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $permissions = [
            'view users',
            'edit users',
            'create users',
            'delete users',
            'view roles',
            'edit roles',
            'create roles',
            'delete roles',
            'view schedule',
            'create schedule',
            'edit schedule',
            'delete schedule',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $roles = [
            'admin',
            'teacher',
            'student',
        ];

        foreach ($roles as $roleName) {

            $role = Role::create(['name' => $roleName]);

            if ($roleName === 'teacher') {
                $role->givePermissionTo([
                    'view users',
                    'view schedule',
                    'create schedule',
                    'edit schedule',
                    'delete schedule',
                ]);
            }
            elseif ($roleName === 'admin') $role->givePermissionTo(Permission::all());
            else $role->givePermissionTo('view schedule');
        }

        // Assign roles to users
        $admin = User::query()->where('email', 'admin@gmail.com')->first();
        $admin->assignRole('admin');

        $moderator = User::query()->where('email', 'teacher@gmail.com')->first();
        $moderator->assignRole('teacher');

        $user = User::query()->where('email', 'student@gmail.com')->first();
        $user->assignRole('student');

    }
}
