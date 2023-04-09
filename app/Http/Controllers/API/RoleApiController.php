<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleApiController extends Controller
{


    public function getRolePermission(): \Illuminate\Http\JsonResponse
    {
        $role = Role::query()->where('name', \request()->id)->firstOrFail();
        $permissions = $role->permissions()->pluck('name')->toArray();

        return response()->json([ 'permissions' => $permissions ]);
    }

}
