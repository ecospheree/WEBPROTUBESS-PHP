<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\HealthSis;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $prods = artikel::all();
        return view('Artikel', compact('prods'));
    }

    public function create($id)
    {
        return view('Upload-Timeline', [
            'title' => 'Buat',
            'method' => 'POST',
            'action' => "/timeline/$id/store",
            'prods' => HealthSis::find($id)
        ]);
    }
    public function store(Request $request, $id)
    {
        $user = HealthSis::find($id);
        $prod = new artikel;
        $prod->Username = $user->Username;
        $prod->Message = $request->Message;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->save();
        return redirect('/timeline')->with('msg', 'Edit berhasil');
    }

    public function edit($id)
    {
        return view('Create-Artikel', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "/artikel/$id/update",
            'prods' => artikel::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $user = HealthSis::find($id);
        $prod = new artikel;
        $prod->Username = $user->Username;
        $prod->Message = $request->Message;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->save();
        return redirect('/artikel')->with('msg', 'Edit berhasil');

    }

    public function delete($id){
        artikel::destroy($id);
        return redirect('/artikel')->with('msg', 'Hapus berhasil');
    }
}
