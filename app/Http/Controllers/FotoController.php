<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Galery;

class FotoController extends Controller
{
    public function foto()
    {
        $user_id = Auth::user()->id;
        $data = \App\Galery::where('user_id', $user_id)->get();
        // dd($data);
        return view('fotografer.foto', compact('data'));
    }
    public function fotoStore(Request $request)
    {
        \Validator::make($request->all(), [
            'foto'  => 'required|mimes:jpeg,jpg,png|max:1000',
        ])->validate();
        $data = new \App\Galery;

        $data->user_id = Auth::user()->id;
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('foto', 'public');
            $data->foto = $image_path;
        }

        $data->save();
        return redirect('foto');
    }
    public function setting($id)
    {
        // dd($id);
        $data = \App\User::where('id', $id)->with('fotografer')->get()->all();
        return view('fotografer.setting', compact('data'));
    }
    public function fotoUpdate(Request $request)
    {

        \Validator::make($request->all(), [
            'nama'  => 'required|min:1|max:200',
        ])->validate();
        $data = \App\User::findOrFail($request->id);
        // dd($wisata);
        $data->name = $request->get('nama');

        $data->save();
        return back()->with(['success' => 'Data berhasil diubah']);
    }
    public function delete($id)
    {
        $data = \App\Galery::findOrFail($id);
        $data->delete();
        return back();
    }
    public function jobs($id)
    {
        $user_foto = \App\fotografer::where('user_id', $id)->value('id');
        
        $data = \App\Order::where('fotografer_id', $user_foto)->get()->all();

        return view('fotografer.jobs', compact('data'));
    }
}
