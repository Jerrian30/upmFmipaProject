<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kemahasiswaan;


use App\Charts\Kemahasiswaan\All\PL1;
use App\Charts\Kemahasiswaan\All\PL2;
use App\Charts\Kemahasiswaan\All\PL3;
use App\Charts\Kemahasiswaan\All\PL4;
use App\Charts\Kemahasiswaan\All\PL5;
use App\Charts\Kemahasiswaan\All\PL6;
use App\Charts\Kemahasiswaan\All\PL7;
use App\Charts\Kemahasiswaan\All\PL8;

class EvalKemahasiswaanController extends Controller
{
    public function index(

        //All
        PL1 $pl1,
        PL2 $pl2,
        PL3 $pl3,
        PL4 $pl4,
        PL5 $pl5,
        PL6 $pl6,
        PL7 $pl7,
        PL8 $pl8,
    )
    {
        $kemahasiswaan = Kemahasiswaan::all();
        return view('evaluasi.kemahasiswaan.index',
        [

            'pl1' => $pl1->build(),
            'pl2' => $pl2->build(),
            'pl3' => $pl3->build(),
            'pl4' => $pl4->build(),
            'pl5' => $pl5->build(),
            'pl6' => $pl6->build(),
            'pl7' => $pl7->build(),
            'pl8' => $pl8->build(),


        ]);
    } 

    public function table(
        PL1 $pl1,
        PL2 $pl2,
        PL3 $pl3,
        PL4 $pl4,
        PL5 $pl5,
        PL6 $pl6,
        PL7 $pl7,
        PL8 $pl8,
        )
{
    $percentages1 = $pl1->getDetailedPercentages();
    $percentages2 = $pl2->getDetailedPercentages();
    $percentages3 = $pl3->getDetailedPercentages();
    $percentages4 = $pl4->getDetailedPercentages();
    $percentages5 = $pl5->getDetailedPercentages();
    $percentages6 = $pl6->getDetailedPercentages();
    $percentages7 = $pl7->getDetailedPercentages();
    $percentages8 = $pl8->getDetailedPercentages();


    return view('evaluasi.kemahasiswaan.table', [
        'percentages1' => $percentages1,
        'percentages2' => $percentages2,
        'percentages3' => $percentages3,
        'percentages4' => $percentages4,
        'percentages5' => $percentages5,
        'percentages6' => $percentages6,
        'percentages7' => $percentages7,
        'percentages8' => $percentages8,

    ]);
}

}