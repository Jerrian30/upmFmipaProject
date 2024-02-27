<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kemahasiswaan;
use App\Imports\KemahasiswaanImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanKemahasiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kemahasiswaans = Kemahasiswaan::all();
        return view('laporanSurvei.kemahasiswaan.index', compact('kemahasiswaans'));
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

        Excel::import(new KemahasiswaanImport, $file);

        return redirect()->route('kemahasiswaan.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:kemahasiswaans,id',
        ]);

        Kemahasiswaan::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
