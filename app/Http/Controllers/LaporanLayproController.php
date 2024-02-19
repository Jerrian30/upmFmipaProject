<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laypro;
use App\Imports\LayproImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanLayproController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laypros = Laypro::all();
        return view('laporanSurvei.laypro.index', compact('laypros'));
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

        Excel::import(new LayproImport, $file);

        return redirect()->route('laypro.index')->with('success', 'Data berhasil diimpor.');
    }

}
