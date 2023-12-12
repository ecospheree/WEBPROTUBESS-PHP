<?php

namespace App\Http\Controllers;

use App\Models\HealthSis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HealthSisController extends Controller
{

    public function Login()
    {
        if (Auth::check()) {
            return view("Dashboard");
        } else {
            return view("Login");
        }
        ;
    }

    public function LoginCheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        
        $user = HealthSis::where('Email', $email)->first();
        if ($user && password_verify($password, $user->password)) {
            session(['username' => $user->Username]);
            return redirect('Dashboard');
        } else {
            return redirect('Login')->with('error', 'Email atau password salah');
        }
    }


    public function create()
    {
        return view('register', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'HealthSis'
        ]);
    }
    public function store(Request $request)
    {
        $prod = new HealthSis;
        $prod->FirstName = $request->FirstName;
        $prod->LastName = $request->LastName;
        $prod->Username = $request->Username;
        $prod->Email = $request->Email;
        $prod->password = Hash::make($request->password);
        $prod->NoHP = '';
        $prod->Status = '';
        $prod->Note = '';
        $prod->Umur = '';
        $prod->save();
        return redirect('/Login')->with('msg', 'Akun Berhasil dibuat');
    }

    public function edit($id)
    {
        return view('Profile', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "HealthSis/$id/update",
            'data' => HealthSis::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $prod = HealthSis::find($id);
        $prod->FirstName = $request->FirstName;
        $prod->LastName = $request->LastName;
        $prod->Username = $request->Username;
        $prod->Email = $request->Email;
        $prod->password = Hash::make($request->password);
        $prod->NoHP = $request->NoHP;
        $prod->Status = $request->Status;
        $prod->Note = $request->Note;
        $prod->Umur = $request->Umur;
        $prod->save();
        return redirect('/Profile')->with('msg', 'Edit berhasil');
    }

}
