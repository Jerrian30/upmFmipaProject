<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir; 

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulirs = Formulir::all(); // Mengambil semua data Formulir
        return view('formulirs.index', compact('formulirs')); // Mengembalikan view dengan data formulirs
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulirs.create'); // Mengembalikan view untuk membuat Formulir baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'link' => 'required|url',
            'diisi_oleh' => 'required',
            'deskripsi' => 'required',
        ]);

        Formulir::create($validatedData);

        return redirect()->route('formulirs.index')->with('success', 'Formulir berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulir $formulir)
    {
        return view('formulirs.edit', compact('formulir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulir $formulir)
    {
        $validatedData = $request->validate([
            'link' => 'required|url',
            'diisi_oleh' => 'required',
            'deskripsi' => 'required',
        ]);

        $formulir->update($validatedData);

        return redirect()->route('formulirs.index')->with('success', 'Formulir berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulir $formulir)
    {
        $formulir->delete();

        return back()->with('success', 'formulir berhasil dihapus');
    }
}
