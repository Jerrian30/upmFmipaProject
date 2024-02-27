<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;
use App\Imports\KeuanganImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keuangans = Keuangan::all();
        return view('laporanSurvei.keuangan.index', compact('keuangans'));
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

        Excel::import(new KeuanganImport, $file);

        return redirect()->route('keuangan.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:keuangans,id',
        ]);

        Keuangan::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
