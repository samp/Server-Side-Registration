<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Gate};

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

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        //Gate::authorize('view', $user);

        return view ('users.show', compact('user'));
    }

    public function edit(User $user){
        //Gate::authorize('create', Module::class);

        return view ('users.edit', compact('user'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:20', 'unique:userdetails'],
            'password' => ['required', 'string', 'min:5', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'url' => ['max:255', 'url'],
            'dob' => ['required', 'date', 'before_or_equal:-18 years'],
        ],
        [
            'dob.before_or_equal' => 'You must be 18 or older to join.',
        ]);
 
        User::create($validatedData);
 
        return redirect()->route('users.index');
    }
}
