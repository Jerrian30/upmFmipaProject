<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vmtsdata;
use App\Imports\VmtsImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanVmtsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vmtss = Vmtsdata::all();
        return view('laporanSurvei.vmts.index', compact('vmtss'));
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

        Excel::import(new VmtsImport, $file);

        return redirect()->route('vmts.index')->with('success', 'Data berhasil diimpor.');
    }

}
