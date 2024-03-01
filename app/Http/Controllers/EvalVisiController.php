<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visi;


use App\Charts\Visi\All\PL1;
use App\Charts\Visi\All\PL2;
use App\Charts\Visi\All\PL3;
use App\Charts\Visi\All\PL4;
use App\Charts\Visi\All\PL5;
use App\Charts\Visi\All\PL6;
use App\Charts\Visi\All\PL7;
use App\Charts\Visi\All\PL8;
use App\Charts\Visi\All\PL9;
use App\Charts\Visi\All\PL10;
use App\Charts\Visi\All\PL11;
use App\Charts\Visi\All\PL12;



class EvalVisiController extends Controller
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
        PL9 $pl9,
        PL10 $pl10,
        PL11 $pl11,
        PL12 $pl12,

    )
    {
        return view('evaluasi.visi.index',
        [

            'pl1' => $pl1->build(),
            'pl2' => $pl2->build(),
            'pl3' => $pl3->build(),
            'pl4' => $pl4->build(),
            'pl5' => $pl5->build(),
            'pl6' => $pl6->build(),
            'pl7' => $pl7->build(),
            'pl8' => $pl8->build(),
            'pl9' => $pl9->build(),
            'pl10' => $pl10->build(),
            'pl11' => $pl11->build(),
            'pl12' => $pl12->build(),


        ]);
    } 

    public function table(
        PL1 $pl1,
        // PL2 $pl2,
        // PL3 $pl3,
        // PL4 $pl4,
        // PL5 $pl5,
        // PL6 $pl6,
        // PL7 $pl7,
        // PL8 $pl8,
        // PL9 $pl9,
        // PL10 $pl10,
        // PL11 $pl11,
        // PL12 $pl12,
        )
{
    $percentages1 = $pl1->getDetailedPercentages();
    // $percentages2 = $pl2->getDetailedPercentages();
    // $percentages3 = $pl3->getDetailedPercentages();
    // $percentages4 = $pl4->getDetailedPercentages();
    // $percentages5 = $pl5->getDetailedPercentages();
    // $percentages6 = $pl6->getDetailedPercentages();
    // $percentages7 = $pl7->getDetailedPercentages();
    // $percentages8 = $pl8->getDetailedPercentages();
    // $percentages9 = $pl9->getDetailedPercentages();
    // $percentages10 = $pl10->getDetailedPercentages();
    // $percentages11 = $pl11->getDetailedPercentages();
    // $percentages12 = $pl12->getDetailedPercentages();


    return view('evaluasi.visi.table', [
        'percentages1' => $percentages1,
        // 'percentages2' => $percentages2,
        // 'percentages3' => $percentages3,
        // 'percentages4' => $percentages4,
        // 'percentages5' => $percentages5,
        // 'percentages6' => $percentages6,
        // 'percentages7' => $percentages7,
        // 'percentages8' => $percentages8,
        // 'percentages9' => $percentages9,
        // 'percentages10' => $percentages10,
        // 'percentages11' => $percentages11,
        // 'percentages12' => $percentages12,
    ]);
}

}