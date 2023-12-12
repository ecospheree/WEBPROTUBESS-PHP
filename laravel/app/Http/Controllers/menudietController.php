<?php

namespace App\Http\Controllers;

use App\Models\HealthSis;
use App\Models\menudiet;
use Illuminate\Http\Request;

class menudietController extends Controller
{
    //untuk memanggil di MENU DIET
    public function index()
    {
        $prods = menudiet::get();
        return view('MenuDiet', compact('prods'));

    }

    public function create()
    {
        return view('Create_MenuDiet', [
            'action' => 'storemenudiet'
        ]);
    }
    public function store(Request $request)
    {

        $prod = new menudiet;
        $prod->Judul = $request->Judul;
        $prod->SubJudul = $request->SubJudul;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->Chef = 'Admin';
        $prod->Deskripsi = $request->Deskripsi;
        $prod->save();
        return redirect('/menudiet')->with('msg', 'Tambah berhasil');
    }
    // untuk memanggil detail MENU DIET
    public function edit($id)
    {
        return view('menudiet.food', [
            'prods' => menudiet::find($id)
        ]);
    }


}