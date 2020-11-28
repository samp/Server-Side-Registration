<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->can('viewAny', User::class)) {
            $users = User::all();
        } else {
            $users[] = Auth::user();
        }

        return view('user.index', compact('users'));
    }

    public function edit(Request $request){
        $validatedData = $request->validate([
            'id' => ['required', 'unique:App\Module', 'max:15'],
            'name' => ['required', 'max:50'],
            'lead_tutor_id' => ['required', 'exists:App\Tutor,id', 'max:5']
        ]);
 
        User::create($validatedData);
 
        return redirect()->route('modules.index');
    }
}
