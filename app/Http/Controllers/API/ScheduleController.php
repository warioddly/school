<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use \App\Models\Documents;

class ScheduleController extends Controller
{


    public function show(): JsonResponse
    {

        return response()->json([
            'success' => true,
            'message' => 'Schedule',
            'data' => ""
        ], 200);
    }

}
