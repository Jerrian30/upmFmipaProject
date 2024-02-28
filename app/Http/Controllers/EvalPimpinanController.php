<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pimpinan;


use App\Charts\Pimpinan\All\PL1;
use App\Charts\Pimpinan\All\PL2;
use App\Charts\Pimpinan\All\PL3;
use App\Charts\Pimpinan\All\PL4;
use App\Charts\Pimpinan\All\PL5;
use App\Charts\Pimpinan\All\PL6;
use App\Charts\Pimpinan\All\PL7;
use App\Charts\Pimpinan\All\PL8;
use App\Charts\Pimpinan\All\PL9;


// Class D3Farmasi
use App\Charts\Pimpinan\D3Farmasi\Farm1;
use App\Charts\Pimpinan\D3Farmasi\Farm2;
use App\Charts\Pimpinan\D3Farmasi\Farm3;
use App\Charts\Pimpinan\D3Farmasi\Farm4;
use App\Charts\Pimpinan\D3Farmasi\Farm5;
use App\Charts\Pimpinan\D3Farmasi\Farm6;
use App\Charts\Pimpinan\D3Farmasi\Farm7;
use App\Charts\Pimpinan\D3Farmasi\Farm8;
use App\Charts\Pimpinan\D3Farmasi\Farm9;

// // Class Kebidanan
use App\Charts\Pimpinan\D3Kebidanan\Bidan1;
use App\Charts\Pimpinan\D3Kebidanan\Bidan2;
use App\Charts\Pimpinan\D3Kebidanan\Bidan3;
use App\Charts\Pimpinan\D3Kebidanan\Bidan4;
use App\Charts\Pimpinan\D3Kebidanan\Bidan5;
use App\Charts\Pimpinan\D3Kebidanan\Bidan6;
use App\Charts\Pimpinan\D3Kebidanan\Bidan7;
use App\Charts\Pimpinan\D3Kebidanan\Bidan8;
use App\Charts\Pimpinan\D3Kebidanan\Bidan9;


// // Class Keperawatan
use App\Charts\Pimpinan\D3Keperawatan\Rawat1;
use App\Charts\Pimpinan\D3Keperawatan\Rawat2;
use App\Charts\Pimpinan\D3Keperawatan\Rawat3;
use App\Charts\Pimpinan\D3Keperawatan\Rawat4;
use App\Charts\Pimpinan\D3Keperawatan\Rawat5;
use App\Charts\Pimpinan\D3Keperawatan\Rawat6;
use App\Charts\Pimpinan\D3Keperawatan\Rawat7;
use App\Charts\Pimpinan\D3Keperawatan\Rawat8;
use App\Charts\Pimpinan\D3Keperawatan\Rawat9;


// // Class Lab Sains
use App\Charts\Pimpinan\D3LabSains\LabSains1;
use App\Charts\Pimpinan\D3LabSains\LabSains2;
use App\Charts\Pimpinan\D3LabSains\LabSains3;
use App\Charts\Pimpinan\D3LabSains\LabSains4;
use App\Charts\Pimpinan\D3LabSains\LabSains5;
use App\Charts\Pimpinan\D3LabSains\LabSains6;
use App\Charts\Pimpinan\D3LabSains\LabSains7;
use App\Charts\Pimpinan\D3LabSains\LabSains8;
use App\Charts\Pimpinan\D3LabSains\LabSains9;



class EvalPimpinanController extends Controller
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


        // D3 Farmasi
        Farm1 $farm1,
        Farm2 $farm2,
        Farm3 $farm3,
        Farm4 $farm4,
        Farm5 $farm5,
        Farm6 $farm6,
        Farm7 $farm7,
        Farm8 $farm8,
        Farm9 $farm9,

        // //D3 Kebidanan
        Bidan1 $bidan1,
        Bidan2 $bidan2,
        Bidan3 $bidan3,
        Bidan4 $bidan4,
        Bidan5 $bidan5,
        Bidan6 $bidan6,
        Bidan7 $bidan7,
        Bidan8 $bidan8,
        Bidan9 $bidan9,


        //D3 Keperawatan
        Rawat1 $rawat1,
        Rawat2 $rawat2,
        Rawat3 $rawat3,
        Rawat4 $rawat4,
        Rawat5 $rawat5,
        Rawat6 $rawat6,
        Rawat7 $rawat7,
        Rawat8 $rawat8,
        Rawat9 $rawat9,


        // //D3 Lab Sains
        LabSains1 $labsains1,
        LabSains2 $labsains2,
        LabSains3 $labsains3,
        LabSains4 $labsains4,
        LabSains5 $labsains5,
        LabSains6 $labsains6,
        LabSains7 $labsains7,
        LabSains8 $labsains8,
        LabSains9 $labsains9,
    )
    {
        return view('evaluasi.Pimpinan.index',
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

            'farm1' => $farm1->build(),
            'farm2' => $farm2->build(),
            'farm3' => $farm3->build(),
            'farm4' => $farm4->build(),
            'farm5' => $farm5->build(),
            'farm6' => $farm6->build(),
            'farm7' => $farm7->build(),
            'farm8' => $farm8->build(),
            'farm9' => $farm9->build(),

            'bidan1' => $bidan1->build(),
            'bidan2' => $bidan2->build(),
            'bidan3' => $bidan3->build(),
            'bidan4' => $bidan4->build(),
            'bidan5' => $bidan5->build(),
            'bidan6' => $bidan6->build(),
            'bidan7' => $bidan7->build(),
            'bidan8' => $bidan8->build(),
            'bidan9' => $bidan9->build(),


            'rawat1' => $rawat1->build(),
            'rawat2' => $rawat2->build(),
            'rawat3' => $rawat3->build(),
            'rawat4' => $rawat4->build(),
            'rawat5' => $rawat5->build(),
            'rawat6' => $rawat6->build(),
            'rawat7' => $rawat7->build(),
            'rawat8' => $rawat8->build(),
            'rawat9' => $rawat9->build(),


            'labsains1' => $labsains1->build(),
            'labsains2' => $labsains2->build(),
            'labsains3' => $labsains3->build(),
            'labsains4' => $labsains4->build(),
            'labsains5' => $labsains5->build(),
            'labsains6' => $labsains6->build(),
            'labsains7' => $labsains7->build(),
            'labsains8' => $labsains8->build(),
            'labsains9' => $labsains9->build(),



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
        PL9 $pl9,

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
    $percentages9 = $pl9->getDetailedPercentages();



    return view('evaluasi.Pimpinan.table', [
        'percentages1' => $percentages1,
        'percentages2' => $percentages2,
        'percentages3' => $percentages3,
        'percentages4' => $percentages4,
        'percentages5' => $percentages5,
        'percentages6' => $percentages6,
        'percentages7' => $percentages7,
        'percentages8' => $percentages8,
        'percentages9' => $percentages9,

    ]);
}

}