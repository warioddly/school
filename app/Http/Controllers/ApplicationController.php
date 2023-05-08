<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Applications\ApplicationCreateRequest;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Applications::query()->where('status', 'pending')->get();

        return view('applications.index', compact('applications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ApplicationCreateRequest $request)
    {
        Applications::create($request->validated());

        return redirect()->route('home')->with('success', 'Your application has been sent successfully.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $application = Applications::findOrFail($id);

        $userData = tap(User::create([
            'surname' => $application->surname,
            'name' => $application->name,
            'email' => $application->email,
            'phone' => $application->phone,
            'password' => Hash::make('password'),
        ]), function ($user) {
            $user->assignRole('student');
            $user->save();
        });

        // TODO: Send email with password

        $application->update([
            'user_id' => $userData->id,
            'status' => 'accepted',
        ]);

        return redirect()->route('applications')->with('success', 'Application successfully accepted.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $application = Applications::findOrFail($id);
        $application->delete();
        
        return redirect()->route('applications')->with('success', 'Application successfully deleted.');
    }
}
