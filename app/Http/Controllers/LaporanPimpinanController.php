<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pimpinan;
use App\Imports\PimpinanImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanPimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pimpinans = Pimpinan::all();
        return view('laporanSurvei.pimpinan.index', compact('pimpinans'));
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

        Excel::import(new PimpinanImport, $file);

        return redirect()->route('pimpinan.index')->with('success', 'Data berhasil diimpor.');
    }

}
