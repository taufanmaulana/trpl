<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function galery()
    {
        // $data = \App\fotografer::with('user')->where('user.status')->get();
        // $pivot = DB::table('role_user')->where('role_id', '2')->get()->all();
        // foreach ($pivot as $role) {
        //     $data =  \App\User::where('id', $role->user_id)->get();
        //     var_dump($data);
        // }
        // // $data = \App\User::;
        // // $data = \App\Role::with('users')->where('role_id', '2')->get();
        return view('galery');
    }
    public function galeryID($id)
    {
        $data = \App\Galery::where('user_id', $id)->get();
        // dd($data);
        return view('singlegalery', compact('data'));
    }
}
