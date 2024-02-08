<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenggunaLulusan;
use App\Imports\PenggunaLulusanImport;
use Maatwebsite\Excel\Facades\Excel;


class PenggunaLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penggunaLulusans = PenggunaLulusan::all();
        return view('laporanSurvei.penggunaLulusan.index', compact('penggunaLulusans'));
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

        Excel::import(new PenggunaLulusanImport, $file);

        return redirect()->route('penggunaLulusan.index')->with('success', 'Data Pengguna Lulusan berhasil diimpor.');
    }

}
