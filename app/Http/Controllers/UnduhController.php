<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unduh; // Pastikan namespace ini sesuai dengan lokasi model Unduh Anda

class UnduhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unduhs = Unduh::all(); // Mengambil semua data unduhan
        return view('unduhs.index', compact('unduhs')); // Mengembalikan view dengan data unduhs
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unduhs.create'); // Mengembalikan view untuk membuat unduhan baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'link' => 'required|url',
            'deskripsi' => 'required',
        ]);

        Unduh::create($validatedData);

        return redirect()->route('unduhs.index')->with('success', 'Unduhan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unduh $unduh)
    {
        return view('unduhs.edit', compact('unduh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unduh $unduh)
    {
        $validatedData = $request->validate([
            'link' => 'required|url',
            'deskripsi' => 'required',
        ]);

        $unduh->update($validatedData);

        return redirect()->route('unduhs.index')->with('success', 'Unduhan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unduh $unduh)
    {
        $unduh->delete();

        return back()->with('success', 'Unduhan berhasil dihapus');
    }
}
