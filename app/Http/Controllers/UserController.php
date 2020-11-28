<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //dd(Auth::User());

        if (Auth::user()->can('viewAny', User::class)) {
            $users = User::all();
        } else {
            $users[] = Auth::user();
        }

        //$users = DB::select('select * from userdetails', array(1));
        //dd($users);
        //return view('user.admin', compact('users'));
        //$user = Auth::user();
        //dd($user);
        return view('user.index', compact('users'));
    }
}
