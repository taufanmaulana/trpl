<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wisata;

class OrderController extends Controller
{
    public function index($id)
    {
        $user = \App\User::where('id', $id)->with('fotografer')->get()->all();
        $data = $user[0];
        // dd($data);
        $fotografer = $id;
        return view('book', compact(['data', 'fotografer']));
    }
    public function getPrice($id)
    {
        $price = wisata::where('id', $id)->pluck('harga');
        // dd($price);
        return response()->json([
            'price' => $price,
        ]);
    }
    public function bookStore(Request $request)
    {

        \Validator::make($request->all(), [
            'tanggal_shoot_'  => 'required',
            'waktu'  => 'required',
            'pesan'  => 'required|max:255',
        ])->validate();
        // dd($request->all());
        $data = new \App\Order;
        $data->user_id = $request->get('name_cust');
        $data->fotografer_id = $request->get('foto_name');
        $data->wisata_id = $request->get('wisata_id');
        $data->tanggal = $request->get('tanggal_shoot_');
        $data->waktu = $request->get('waktu');
        $data->pesan = $request->get('pesan');
        $data->status = "Booked";

        $data->save();
        return redirect('galery');
    }
    public function order($id)
    {
        $data = \App\Order::where('user_id', $id)->get()->all();
        return view('singlepesanan', compact('data'));
    }
    public function show($id)
    {
        $data = \App\Order::findOrFail($id);
        // dd($data);
        $_id = $id;
        return view('detailbooking', compact(['data', '_id']));
    }
    public function uploadTf(Request $request, $id)
    {
        \Validator::make($request->all(), [
            'foto'  => 'required|mimes:jpeg,jpg,png|max:1000',
        ])->validate();
        $data = \App\Order::findOrFail($id);
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('bukti', 'public');
            $data->foto = $image_path;
        }

        $data->save();
        return back();
    }
}
