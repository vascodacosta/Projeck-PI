<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KosController extends Controller
{
    public function index()
    {
        $kos = Kos::where('user_id', Auth::id())->get();
        return view('kos.index', compact('kos'));
    }

    public function create()
    {
        return view('kos.create');
    }

    public function store(Request $request)
    {
        Kos::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('kos.index')->with('success', 'Kos berhasil ditambahkan');
    }

    public function edit(Kos $ko)
    {
        return view('kos.edit', ['kos' => $ko]);
    }

    public function update(Request $request, Kos $ko)
    {
        $ko->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
        ]);
        return redirect()->route('kos.index')->with('success', 'Kos berhasil diupdate');
    }

    public function destroy(Kos $ko)
    {
        $ko->delete();
        return redirect()->route('kos.index')->with('success', 'Kos berhasil dihapus');
    }
}
