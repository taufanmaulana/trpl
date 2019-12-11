<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function fotograferStore(Request $request)
    {
        \Validator::make($request->all(), [
            'name'  => 'required|min:1|max:200|regex:/^[\pL\s\-]+$/u',
            'handphone'  => 'required|min:8|max:14|numeric',
            'email'  => 'required|email|unique:users',
            'password'  => 'required|min:5',
            'kota_id'  => 'required',
            'pdf'  => 'required|mimes:pdf',

        ])->validate();

        // dd($request->get('password'));
        $user = new \App\User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->remember_token = str_random(60);
        $user->status = "non aktif";
        $user->password = bcrypt($request->get('password'));

        $user->save();
        $pdf = $request->file('pdf');

        DB::table('fotografer')->insert([
            'handphone'      => $request->get('handphone'),
            'user_id' => $user->id,
            'kota_id'    => $request->get('kota_id'),
            'portofolio'    => $pdf->store('pdf', 'public'),
        ]);

        DB::table('role_user')->insert([
            'user_id' => $user->id,
            'role_id' => 2,
        ]);
        return redirect('/');
    }
    public function regist()
    {
        return view('auth.registwisata');
    }
    public function wisatawanStore(Request $request)
    {
        \Validator::make($request->all(), [
            'name'  => 'required|min:1|max:200|regex:/^[\pL\s\-]+$/u',
            'handphone'  => 'required|min:8|max:14|numeric',
            'email'  => 'required|email|unique:users',
            'password'  => 'required|min:5',

        ])->validate();

        $user = new \App\User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->handphone = $request->get('handphone');
        $user->remember_token = str_random(60);
        $user->password = bcrypt($request->get('password'));

        $user->save();

        DB::table('role_user')->insert([
            'user_id' => $user->id,
            'role_id' => 3,
        ]);
        return redirect('/');
    }
}
