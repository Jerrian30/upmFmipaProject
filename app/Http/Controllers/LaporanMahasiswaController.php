<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('laporanSurvei.mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,csv',
        ]);

        $file = $request->file('excel_file');

        Excel::import(new MahasiswaImport, $file);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:mahasiswas,id',
        ]);

        Mahasiswa::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
