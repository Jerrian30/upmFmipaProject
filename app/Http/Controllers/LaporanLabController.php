<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;
use App\Imports\LabImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanLabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labs = Lab::all();
        return view('laporanSurvei.lab.index', compact('labs'));
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

        Excel::import(new LabImport, $file);

        return redirect()->route('lab.index')->with('success', 'Data berhasil diimpor.');
    }

}
