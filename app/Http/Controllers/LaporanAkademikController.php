<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akademik;
use App\Imports\AkademikImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akademiks = Akademik::all();
        return view('laporanSurvei.akademik.index', compact('akademiks'));
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

        Excel::import(new AkademikImport, $file);

        return redirect()->route('akademik.index')->with('success', 'Data berhasil diimpor.');
    }

}
