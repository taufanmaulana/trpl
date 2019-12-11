<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kota;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        # code...
        $data = \App\Kota::all();
        return view('admin.destination', compact('data'));
    }
    public function storeKota(Request $request)
    {

        \Validator::make($request->all(), [
            'nama'  => 'required|min:1|max:200|unique:kota|regex:/^[\pL\s\-]+$/u',
        ])->validate();

        $kota = new \App\kota;
        $kota->nama = $request->get('nama');

        $kota->save();
        return redirect('kota')->with(['success' => 'Data berhasil ditambah']);
    }
    public function newWisata($id)
    {
        $kota = $id;
        return view('admin.createwisata', compact('kota'));
    }
    public function storeWisata(Request $request)
    {

        \Validator::make($request->all(), [
            'nama'  => 'required|min:1|max:200|unique:wisata|regex:/^[\pL\s\-]+$/u',
            'deskripsi'  => 'required|min:1|max:1000',
            'harga'  => 'required|numeric',
        ])->validate();
        $wisata = new \App\wisata;
        $wisata->kota_id = $request->get('id');
        $wisata->nama = $request->get('nama');
        $wisata->deskripsi = $request->get('deskripsi');
        $wisata->harga = $request->get('harga');

        $wisata->save();
        return redirect('kota/' . $request->id);
    }
    public function show($id)
    {
        $a = \App\Wisata::where('kota_id', $id)->get();
        $data = $a->all();
        $kota = $id;
        // dd($data->all());
        return view('admin.wisata', compact(['data', 'kota']));
    }
    public function userfotografer()
    {

        return view('admin.userfotografer');
    }
    public function pdf($id)
    {
        // dd($id);
        $foto = \App\fotografer::where('user_id', $id)->get();
        $x = $foto->all();
        foreach ($x as $value) { }
        $data = $value->portofolio;
        // dd($data);
        return view('admin.layout.portofolio', compact('data'));
    }
    public function terimaById($id)
    {
        $data = \App\User::findOrFail($id);
        $data->status = 'aktif';
        $data->save();
        return redirect('user/fotografer');
    }
    public function tolakById($id)
    {
        $data = \App\User::findOrFail($id);
        $data->status = 'non aktif';
        $data->save();
        return redirect('user/fotografer');
    }

    public function terimaOrderById($id)
    {
        $data = \App\Order::findOrFail($id);
        $data->status = 'Accept';
        $data->save();
        return redirect('order');
    }
    public function tolakOrderById($id)
    {
        $data = \App\Order::findOrFail($id);
        $data->status = 'Decline';
        $data->save();
        return redirect('order');
    }





    public function deleteWisata($id)
    {
        $data = \App\wisata::findOrFail($id);
        $data->delete();
        return back();
    }
    public function userwisata()
    {
        return view('admin.user');
    }
    public function viewUpdateKota($id)
    {
        $data = \App\kota::findOrFail($id);
        return view('admin.updatekota', compact('data'));
    }
    public function UpdateKota(Request $request)
    {
        \Validator::make($request->all(), [
            'nama'  => 'required|min:1|max:200|unique:kota|regex:/^[\pL\s\-]+$/u',
        ])->validate();

        $data = \App\kota::findOrFail($request->id);
        // dd($data);
        $data->nama = $request->get('nama');

        $data->save();
        return back()->with(['success' => 'Data berhasil diubah']);
    }
    public function viewUpdateWisata($id)
    {
        $data = \App\wisata::findOrFail($id);
        return view('admin.updatewisata', compact('data'));
    }
    public function UpdateWisata(Request $request)
    {
        \Validator::make($request->all(), [
            'nama'  => 'required|min:1|max:200|regex:/^[\pL\s\-]+$/u',
            'deskripsi'  => 'required|min:1|max:200',
            'harga'  => 'required',
        ])->validate();
        $wisata = \App\wisata::findOrFail($request->id);
        // dd($wisata);
        $wisata->nama = $request->get('nama');
        $wisata->deskripsi = $request->get('deskripsi');
        $wisata->harga = $request->get('harga');

        $wisata->save();
        return back()->with(['success' => 'Data berhasil diubah']);
    }
    public function order()
    {
        // $user_foto = \App\fotografer::where('user_id', $id)->value('id');
        $data = \App\Order::all();

        return view('admin.order', compact('data'));
    }
}
