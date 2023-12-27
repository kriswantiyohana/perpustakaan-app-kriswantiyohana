<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function read()
    {
        $peminjamans = Peminjaman::all();
        return view('read', compact('peminjamans'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_peminjaman' => 'required|unique:peminjaman',
            'books_id' => 'required',
            'pengunjung_id' => 'required',
            'pegawai_id' => 'required',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('read')->with('success', 'data created successfully.');
    }

    // public function show(Peminjaman $peminjaman)
    // {
    //     return view('peminjaman.show', compact('peminjaman'));
    // }

    public function edit(Peminjaman $peminjaman)
    {
        return view('edit', compact('peminjaman'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            // Validasi sesuai kebutuhan
        ]);

        $peminjaman->update($request->all());

        return redirect()->route('read');
    }

    public function destroy($id)
    {
        Peminjaman::find($id)->delete();

        return redirect()->route('read')
            ->with('success', 'data deleted successfully');
    }

    public function changeStatus(Peminjaman $peminjaman, $status)
    {
        $peminjaman->update(['status' => $status]);

        return redirect()->route('read');
    }
}
