<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(): Renderable
    {
        return view('notifications.index');
    }


    public function create(): Renderable
    {
        return view('notifications.create');
    }

    public function show(Request $request): Renderable
    {
        return view('notifications.show');
    }


}
