<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index(): Renderable
    {
        $roles = Role::query()->get();
        return view('roles.index', compact("roles"));
    }
}
