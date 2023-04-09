<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\RoleStoreRequest;
use App\Http\Requests\Role\RoleUpdateRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index(): Renderable
    {
        $roles = Role::query()->get();
        $permissions = Permission::query()->get();
        return view('roles.index', compact("roles", "permissions"));
    }


    public function store(RoleStoreRequest $request): RedirectResponse
    {

        $newRole = Role::create(['name' => $request->name]);
        $newRole->syncPermissions($request->permissions);

        return redirect()->back()->with('success', __('Role added successfully'));

    }



    public function destroy(int $id): RedirectResponse
    {
        $role = Role::query()->findOrFail($id);
        if ($role) {
            $role->delete();
            return redirect()->back()->with('success', 'Role successfully deleted');
        } else {
            return redirect()->back()->withErrors(['Role not found']);
        }
    }


    public function update(RoleUpdateRequest $request, $id): RedirectResponse
    {
        $role = Role::query()->findOrFail($id);
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with('success', 'Role successfully updated');
    }



}
