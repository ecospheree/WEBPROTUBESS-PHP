<?php

namespace App\Http\Controllers;

use App\Models\HealthSis;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $prods = Post::all();
        return view('Timeline', compact('prods'));
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
        $prod = new Post;
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
}
