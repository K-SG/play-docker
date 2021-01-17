<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KrononUser;
use Faker\Provider\ar_JO\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $items = DB::table('users')->get();
        return view('users.users',['items' => $items]);
    }
    public function create(Request $request)
    {
        $users = new User();
        $users->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $users->save();
        return redirect('/users');
    }
    public function show(Request $request)
    {
        
        $name = $request->name;
        // dd($name);
        $users = DB::table('users')
            ->where('name','like','%'. $name .'%')
            ->orWhere('email','like','%'. $name .'%')
            ->get();
        // dd($users);
        return view('users.users',['items' => $users]);
    }
}