<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Akademik;


use App\Charts\Akademik\All\PL1;
use App\Charts\Akademik\All\PL2;
use App\Charts\Akademik\All\PL3;
use App\Charts\Akademik\All\PL4;
use App\Charts\Akademik\All\PL5;
use App\Charts\Akademik\All\PL6;
use App\Charts\Akademik\All\PL7;


// // Class Geofisika
use App\Charts\Akademik\S1Geofisika\Geo1;
use App\Charts\Akademik\S1Geofisika\Geo2;
use App\Charts\Akademik\S1Geofisika\Geo3;
use App\Charts\Akademik\S1Geofisika\Geo4;
use App\Charts\Akademik\S1Geofisika\Geo5;
use App\Charts\Akademik\S1Geofisika\Geo6;
use App\Charts\Akademik\S1Geofisika\Geo7;



// Class D3Farmasi
use App\Charts\Akademik\D3Farmasi\Farm1;
use App\Charts\Akademik\D3Farmasi\Farm2;
use App\Charts\Akademik\D3Farmasi\Farm3;
use App\Charts\Akademik\D3Farmasi\Farm4;
use App\Charts\Akademik\D3Farmasi\Farm5;
use App\Charts\Akademik\D3Farmasi\Farm6;
use App\Charts\Akademik\D3Farmasi\Farm7;



// // // Class S1Farmasi
use App\Charts\Akademik\S1Farmasi\S1Farm1;
use App\Charts\Akademik\S1Farmasi\S1Farm2;
use App\Charts\Akademik\S1Farmasi\S1Farm3;
use App\Charts\Akademik\S1Farmasi\S1Farm4;
use App\Charts\Akademik\S1Farmasi\S1Farm5;
use App\Charts\Akademik\S1Farmasi\S1Farm6;
use App\Charts\Akademik\S1Farmasi\S1Farm7;



// Class Matematika
use App\Charts\Akademik\S1Matematika\Math1;
use App\Charts\Akademik\S1Matematika\Math2;
use App\Charts\Akademik\S1Matematika\Math3;
use App\Charts\Akademik\S1Matematika\Math4;
use App\Charts\Akademik\S1Matematika\Math5;
use App\Charts\Akademik\S1Matematika\Math6;
use App\Charts\Akademik\S1Matematika\Math7;



// // Class Biologi
use App\Charts\Akademik\S1Biologi\Bio1;
use App\Charts\Akademik\S1Biologi\Bio2;
use App\Charts\Akademik\S1Biologi\Bio3;
use App\Charts\Akademik\S1Biologi\Bio4;
use App\Charts\Akademik\S1Biologi\Bio5;
use App\Charts\Akademik\S1Biologi\Bio6;
use App\Charts\Akademik\S1Biologi\Bio7;


use App\Charts\Akademik\S2Biologi\S2Bio1;
use App\Charts\Akademik\S2Biologi\S2Bio2;
use App\Charts\Akademik\S2Biologi\S2Bio3;
use App\Charts\Akademik\S2Biologi\S2Bio4;
use App\Charts\Akademik\S2Biologi\S2Bio5;
use App\Charts\Akademik\S2Biologi\S2Bio6;
use App\Charts\Akademik\S2Biologi\S2Bio7;

// // Class Kebidanan
use App\Charts\Akademik\D3Kebidanan\Bidan1;
use App\Charts\Akademik\D3Kebidanan\Bidan2;
use App\Charts\Akademik\D3Kebidanan\Bidan3;
use App\Charts\Akademik\D3Kebidanan\Bidan4;
use App\Charts\Akademik\D3Kebidanan\Bidan5;
use App\Charts\Akademik\D3Kebidanan\Bidan6;
use App\Charts\Akademik\D3Kebidanan\Bidan7;


// // // // Class Keperawatan
use App\Charts\Akademik\D3Keperawatan\Rawat1;
use App\Charts\Akademik\D3Keperawatan\Rawat2;
use App\Charts\Akademik\D3Keperawatan\Rawat3;
use App\Charts\Akademik\D3Keperawatan\Rawat4;
use App\Charts\Akademik\D3Keperawatan\Rawat5;
use App\Charts\Akademik\D3Keperawatan\Rawat6;
use App\Charts\Akademik\D3Keperawatan\Rawat7;


// // Class Lab Sains
use App\Charts\Akademik\D3LabSains\LabSains1;
use App\Charts\Akademik\D3LabSains\LabSains2;
use App\Charts\Akademik\D3LabSains\LabSains3;
use App\Charts\Akademik\D3LabSains\LabSains4;
use App\Charts\Akademik\D3LabSains\LabSains5;
use App\Charts\Akademik\D3LabSains\LabSains6;
use App\Charts\Akademik\D3LabSains\LabSains7;


// //Class Statistika
use App\Charts\Akademik\S1Statistika\Statis1;
use App\Charts\Akademik\S1Statistika\Statis2;
use App\Charts\Akademik\S1Statistika\Statis3;
use App\Charts\Akademik\S1Statistika\Statis4;
use App\Charts\Akademik\S1Statistika\Statis5;
use App\Charts\Akademik\S1Statistika\Statis6;
use App\Charts\Akademik\S1Statistika\Statis7;

use App\Charts\Akademik\S2Statistika\S2Statis1;
use App\Charts\Akademik\S2Statistika\S2Statis2;
use App\Charts\Akademik\S2Statistika\S2Statis3;
use App\Charts\Akademik\S2Statistika\S2Statis4;
use App\Charts\Akademik\S2Statistika\S2Statis5;
use App\Charts\Akademik\S2Statistika\S2Statis6;
use App\Charts\Akademik\S2Statistika\S2Statis7;

// // // //Class S1 Kimia
use App\Charts\Akademik\S1Kimia\S1Kim1;
use App\Charts\Akademik\S1Kimia\S1Kim2;
use App\Charts\Akademik\S1Kimia\S1Kim3;
use App\Charts\Akademik\S1Kimia\S1Kim4;
use App\Charts\Akademik\S1Kimia\S1Kim5;
use App\Charts\Akademik\S1Kimia\S1Kim6;
use App\Charts\Akademik\S1Kimia\S1Kim7;

//Class S2 Kimia
use App\Charts\Akademik\S2Kimia\S2Kim1;
use App\Charts\Akademik\S2Kimia\S2Kim2;
use App\Charts\Akademik\S2Kimia\S2Kim3;
use App\Charts\Akademik\S2Kimia\S2Kim4;
use App\Charts\Akademik\S2Kimia\S2Kim5;
use App\Charts\Akademik\S2Kimia\S2Kim6;
use App\Charts\Akademik\S2Kimia\S2Kim7;


use App\Charts\Akademik\S1Fisika\Fisika1;
use App\Charts\Akademik\S1Fisika\Fisika2;
use App\Charts\Akademik\S1Fisika\Fisika3;
use App\Charts\Akademik\S1Fisika\Fisika4;
use App\Charts\Akademik\S1Fisika\Fisika5;
use App\Charts\Akademik\S1Fisika\Fisika6;
use App\Charts\Akademik\S1Fisika\Fisika7;




class EvalAkademikController extends Controller
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


        // D3 Farmasi
        Farm1 $farm1,
        Farm2 $farm2,
        Farm3 $farm3,
        Farm4 $farm4,
        Farm5 $farm5,
        Farm6 $farm6,
        Farm7 $farm7,


         // S1 Farmasi
        S1Farm1 $s1farm1,
        S1Farm2 $s1farm2,
        S1Farm3 $s1farm3,
        S1Farm4 $s1farm4,
        S1Farm5 $s1farm5,
        S1Farm6 $s1farm6,
        S1Farm7 $s1farm7,


         // // S1 Matematika
        Math1 $math1,
        Math2 $math2,
        Math3 $math3,
        Math4 $math4,
        Math5 $math5,
        Math6 $math6,
        Math7 $math7,

        // S1 Biologi
        Bio1 $bio1,
        Bio2 $bio2,
        Bio3 $bio3,
        Bio4 $bio4,
        Bio5 $bio5,
        Bio6 $bio6,
        Bio7 $bio7,

        // S1 Biologi
        S2Bio1 $s2bio1,
        S2Bio2 $s2bio2,
        S2Bio3 $s2bio3,
        S2Bio4 $s2bio4,
        S2Bio5 $s2bio5,
        S2Bio6 $s2bio6,
        S2Bio7 $s2bio7,

        // // D3 Kebidanan
        Bidan1 $bidan1,
        Bidan2 $bidan2,
        Bidan3 $bidan3,
        Bidan4 $bidan4,
        Bidan5 $bidan5,
        Bidan6 $bidan6,
        Bidan7 $bidan7,


        // // //D3 Keperawatan
        Rawat1 $rawat1,
        Rawat2 $rawat2,
        Rawat3 $rawat3,
        Rawat4 $rawat4,
        Rawat5 $rawat5,
        Rawat6 $rawat6,
        Rawat7 $rawat7,

        // //D3 Lab Sains
        LabSains1 $labsains1,
        LabSains2 $labsains2,
        LabSains3 $labsains3,
        LabSains4 $labsains4,
        LabSains5 $labsains5,
        LabSains6 $labsains6,
        LabSains7 $labsains7,


        // // S1 Statistika
        Statis1 $statis1,
        Statis2 $statis2,
        Statis3 $statis3,
        Statis4 $statis4,
        Statis5 $statis5,
        Statis6 $statis6,
        Statis7 $statis7,

        
        S2Statis1 $s2statis1,
        S2Statis2 $s2statis2,
        S2Statis3 $s2statis3,
        S2Statis4 $s2statis4,
        S2Statis5 $s2statis5,
        S2Statis6 $s2statis6,
        S2Statis7 $s2statis7,


        // // S1 Kimia
        S1kim1 $s1kim1,
        S1kim2 $s1kim2,
        S1kim3 $s1kim3,
        S1kim4 $s1kim4,
        S1kim5 $s1kim5,
        S1kim6 $s1kim6,
        S1kim7 $s1kim7,


        // // S2 Kimia
        S2Kim1 $s2kim1,
        S2Kim2 $s2kim2,
        S2Kim3 $s2kim3,
        S2Kim4 $s2kim4,
        S2Kim5 $s2kim5,
        S2Kim6 $s2kim6,
        S2Kim7 $s2kim7,


        // Fisika
        Fisika1 $fisika1,
        Fisika2 $fisika2,
        Fisika3 $fisika3,
        Fisika4 $fisika4,
        Fisika5 $fisika5,
        Fisika6 $fisika6,
        Fisika7 $fisika7,

        // Geofisika
        Geo1 $geo1,
        Geo2 $geo2,
        Geo3 $geo3,
        Geo4 $geo4,
        Geo5 $geo5,
        Geo6 $geo6,
        Geo7 $geo7,


    )
    {
        return view('evaluasi.akademik.index',
        [

            'farm1' => $farm1->build(),
            'farm2' => $farm2->build(),
            'farm3' => $farm3->build(),
            'farm4' => $farm4->build(),
            'farm5' => $farm5->build(),
            'farm6' => $farm6->build(),
            'farm7' => $farm7->build(),


            's1farm1' => $s1farm1->build(),
            's1farm2' => $s1farm2->build(),
            's1farm3' => $s1farm3->build(),
            's1farm4' => $s1farm4->build(),
            's1farm5' => $s1farm5->build(),
            's1farm6' => $s1farm6->build(),
            's1farm7' => $s1farm7->build(),


            'math1' => $math1->build(),
            'math2' => $math2->build(),
            'math3' => $math3->build(),
            'math4' => $math4->build(),
            'math5' => $math5->build(),
            'math6' => $math6->build(),
            'math7' => $math7->build(),


            'bio1' => $bio1->build(),
            'bio2' => $bio2->build(),
            'bio3' => $bio3->build(),
            'bio4' => $bio4->build(),
            'bio5' => $bio5->build(),
            'bio6' => $bio6->build(),
            'bio7' => $bio7->build(),


            
            's2bio1' => $s2bio1->build(),
            's2bio2' => $s2bio2->build(),
            's2bio3' => $s2bio3->build(),
            's2bio4' => $s2bio4->build(),
            's2bio5' => $s2bio5->build(),
            's2bio6' => $s2bio6->build(),
            's2bio7' => $s2bio7->build(),


            'bidan1' => $bidan1->build(),
            'bidan2' => $bidan2->build(),
            'bidan3' => $bidan3->build(),
            'bidan4' => $bidan4->build(),
            'bidan5' => $bidan5->build(),
            'bidan6' => $bidan6->build(),
            'bidan7' => $bidan7->build(),



            'rawat1' => $rawat1->build(),
            'rawat2' => $rawat2->build(),
            'rawat3' => $rawat3->build(),
            'rawat4' => $rawat4->build(),
            'rawat5' => $rawat5->build(),
            'rawat6' => $rawat6->build(),
            'rawat7' => $rawat7->build(),


            'labsains1' => $labsains1->build(),
            'labsains2' => $labsains2->build(),
            'labsains3' => $labsains3->build(),
            'labsains4' => $labsains4->build(),
            'labsains5' => $labsains5->build(),
            'labsains6' => $labsains6->build(),
            'labsains7' => $labsains7->build(),

    
            'statis1' => $statis1->build(),
            'statis2' => $statis2->build(),
            'statis3' => $statis3->build(),
            'statis4' => $statis4->build(),
            'statis5' => $statis5->build(),
            'statis6' => $statis6->build(),
            'statis7' => $statis7->build(),


            's2statis1' => $s2statis1->build(),
            's2statis2' => $s2statis2->build(),
            's2statis3' => $s2statis3->build(),
            's2statis4' => $s2statis4->build(),
            's2statis5' => $s2statis5->build(),
            's2statis6' => $s2statis6->build(),
            's2statis7' => $s2statis7->build(),


            's1kim1' => $s1kim1->build(),
            's1kim2' => $s1kim2->build(),
            's1kim3' => $s1kim3->build(),
            's1kim4' => $s1kim4->build(),
            's1kim5' => $s1kim5->build(),
            's1kim6' => $s1kim6->build(),
            's1kim7' => $s1kim7->build(),


            's2kim1' => $s2kim1->build(),
            's2kim2' => $s2kim2->build(),
            's2kim3' => $s2kim3->build(),
            's2kim4' => $s2kim4->build(),
            's2kim5' => $s2kim5->build(),
            's2kim6' => $s2kim6->build(),
            's2kim7' => $s2kim7->build(),
            
            'fisika1' => $fisika1->build(),
            'fisika2' => $fisika2->build(),
            'fisika3' => $fisika3->build(),
            'fisika4' => $fisika4->build(),
            'fisika5' => $fisika5->build(),
            'fisika6' => $fisika6->build(),
            'fisika7' => $fisika7->build(),


            'geo1' => $geo1->build(),
            'geo2' => $geo2->build(),
            'geo3' => $geo3->build(),
            'geo4' => $geo4->build(),
            'geo5' => $geo5->build(),
            'geo6' => $geo6->build(),
            'geo7' => $geo7->build(),
      

            'pl1' => $pl1->build(),
            'pl2' => $pl2->build(),
            'pl3' => $pl3->build(),
            'pl4' => $pl4->build(),
            'pl5' => $pl5->build(),
            'pl6' => $pl6->build(),
            'pl7' => $pl7->build(),


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


    return view('evaluasi.akademik.table', [
        'percentages1' => $percentages1,
        'percentages2' => $percentages2,
        'percentages3' => $percentages3,
        'percentages4' => $percentages4,
        'percentages5' => $percentages5,
        'percentages6' => $percentages6,
        'percentages7' => $percentages7,


    ]);
}

}