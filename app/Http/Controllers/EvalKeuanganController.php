<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Keuangan;


use App\Charts\Keuangan\All\PL1;
use App\Charts\Keuangan\All\PL2;
use App\Charts\Keuangan\All\PL3;
use App\Charts\Keuangan\All\PL4;
use App\Charts\Keuangan\All\PL5;
use App\Charts\Keuangan\All\PL6;
use App\Charts\Keuangan\All\PL7;
use App\Charts\Keuangan\All\PL8;



// // Class Geofisika
use App\Charts\Keuangan\S1Geofisika\Geo1;
use App\Charts\Keuangan\S1Geofisika\Geo2;
use App\Charts\Keuangan\S1Geofisika\Geo3;
use App\Charts\Keuangan\S1Geofisika\Geo4;
use App\Charts\Keuangan\S1Geofisika\Geo5;
use App\Charts\Keuangan\S1Geofisika\Geo6;
use App\Charts\Keuangan\S1Geofisika\Geo7;
use App\Charts\Keuangan\S1Geofisika\Geo8;


// // // Class D3Farmasi
use App\Charts\Keuangan\D3Farmasi\Farm1;
use App\Charts\Keuangan\D3Farmasi\Farm2;
use App\Charts\Keuangan\D3Farmasi\Farm3;
use App\Charts\Keuangan\D3Farmasi\Farm4;
use App\Charts\Keuangan\D3Farmasi\Farm5;
use App\Charts\Keuangan\D3Farmasi\Farm6;
use App\Charts\Keuangan\D3Farmasi\Farm7;
use App\Charts\Keuangan\D3Farmasi\Farm8;


// // // Class S1Farmasi
use App\Charts\Keuangan\S1Farmasi\S1Farm1;
use App\Charts\Keuangan\S1Farmasi\S1Farm2;
use App\Charts\Keuangan\S1Farmasi\S1Farm3;
use App\Charts\Keuangan\S1Farmasi\S1Farm4;
use App\Charts\Keuangan\S1Farmasi\S1Farm5;
use App\Charts\Keuangan\S1Farmasi\S1Farm6;
use App\Charts\Keuangan\S1Farmasi\S1Farm7;
use App\Charts\Keuangan\S1Farmasi\S1Farm8;


// Class Matematika
use App\Charts\Keuangan\S1Matematika\Math1;
use App\Charts\Keuangan\S1Matematika\Math2;
use App\Charts\Keuangan\S1Matematika\Math3;
use App\Charts\Keuangan\S1Matematika\Math4;
use App\Charts\Keuangan\S1Matematika\Math5;
use App\Charts\Keuangan\S1Matematika\Math6;
use App\Charts\Keuangan\S1Matematika\Math7;
use App\Charts\Keuangan\S1Matematika\Math8;


// // Class Biologi
use App\Charts\Keuangan\S1Biologi\Bio1;
use App\Charts\Keuangan\S1Biologi\Bio2;
use App\Charts\Keuangan\S1Biologi\Bio3;
use App\Charts\Keuangan\S1Biologi\Bio4;
use App\Charts\Keuangan\S1Biologi\Bio5;
use App\Charts\Keuangan\S1Biologi\Bio6;
use App\Charts\Keuangan\S1Biologi\Bio7;
use App\Charts\Keuangan\S1Biologi\Bio8;

use App\Charts\Keuangan\S2Biologi\S2Bio1;
use App\Charts\Keuangan\S2Biologi\S2Bio2;
use App\Charts\Keuangan\S2Biologi\S2Bio3;
use App\Charts\Keuangan\S2Biologi\S2Bio4;
use App\Charts\Keuangan\S2Biologi\S2Bio5;
use App\Charts\Keuangan\S2Biologi\S2Bio6;
use App\Charts\Keuangan\S2Biologi\S2Bio7;
use App\Charts\Keuangan\S2Biologi\S2Bio8;

// // Class Kebidanan
use App\Charts\Keuangan\D3Kebidanan\Bidan1;
use App\Charts\Keuangan\D3Kebidanan\Bidan2;
use App\Charts\Keuangan\D3Kebidanan\Bidan3;
use App\Charts\Keuangan\D3Kebidanan\Bidan4;
use App\Charts\Keuangan\D3Kebidanan\Bidan5;
use App\Charts\Keuangan\D3Kebidanan\Bidan6;
use App\Charts\Keuangan\D3Kebidanan\Bidan7;
use App\Charts\Keuangan\D3Kebidanan\Bidan8;


// // // // Class Keperawatan
use App\Charts\Keuangan\D3Keperawatan\Rawat1;
use App\Charts\Keuangan\D3Keperawatan\Rawat2;
use App\Charts\Keuangan\D3Keperawatan\Rawat3;
use App\Charts\Keuangan\D3Keperawatan\Rawat4;
use App\Charts\Keuangan\D3Keperawatan\Rawat5;
use App\Charts\Keuangan\D3Keperawatan\Rawat6;
use App\Charts\Keuangan\D3Keperawatan\Rawat7;
use App\Charts\Keuangan\D3Keperawatan\Rawat8;


// // Class Lab Sains
use App\Charts\Keuangan\D3LabSains\LabSains1;
use App\Charts\Keuangan\D3LabSains\LabSains2;
use App\Charts\Keuangan\D3LabSains\LabSains3;
use App\Charts\Keuangan\D3LabSains\LabSains4;
use App\Charts\Keuangan\D3LabSains\LabSains5;
use App\Charts\Keuangan\D3LabSains\LabSains6;
use App\Charts\Keuangan\D3LabSains\LabSains7;
use App\Charts\Keuangan\D3LabSains\LabSains8;


// //Class Statistika
use App\Charts\Keuangan\S1Statistika\Statis1;
use App\Charts\Keuangan\S1Statistika\Statis2;
use App\Charts\Keuangan\S1Statistika\Statis3;
use App\Charts\Keuangan\S1Statistika\Statis4;
use App\Charts\Keuangan\S1Statistika\Statis5;
use App\Charts\Keuangan\S1Statistika\Statis6;
use App\Charts\Keuangan\S1Statistika\Statis7;
use App\Charts\Keuangan\S1Statistika\Statis8;

use App\Charts\Keuangan\S2Statistika\S2Statis1;
use App\Charts\Keuangan\S2Statistika\S2Statis2;
use App\Charts\Keuangan\S2Statistika\S2Statis3;
use App\Charts\Keuangan\S2Statistika\S2Statis4;
use App\Charts\Keuangan\S2Statistika\S2Statis5;
use App\Charts\Keuangan\S2Statistika\S2Statis6;
use App\Charts\Keuangan\S2Statistika\S2Statis7;
use App\Charts\Keuangan\S2Statistika\S2Statis8;

// // // //Class S1 Kimia
use App\Charts\Keuangan\S1Kimia\S1Kim1;
use App\Charts\Keuangan\S1Kimia\S1Kim2;
use App\Charts\Keuangan\S1Kimia\S1Kim3;
use App\Charts\Keuangan\S1Kimia\S1Kim4;
use App\Charts\Keuangan\S1Kimia\S1Kim5;
use App\Charts\Keuangan\S1Kimia\S1Kim6;
use App\Charts\Keuangan\S1Kimia\S1Kim7;
use App\Charts\Keuangan\S1Kimia\S1Kim8;

//Class S2 Kimia
use App\Charts\Keuangan\S2Kimia\S2Kim1;
use App\Charts\Keuangan\S2Kimia\S2Kim2;
use App\Charts\Keuangan\S2Kimia\S2Kim3;
use App\Charts\Keuangan\S2Kimia\S2Kim4;
use App\Charts\Keuangan\S2Kimia\S2Kim5;
use App\Charts\Keuangan\S2Kimia\S2Kim6;
use App\Charts\Keuangan\S2Kimia\S2Kim7;
use App\Charts\Keuangan\S2Kimia\S2Kim8;


use App\Charts\Keuangan\S1Fisika\Fisika1;
use App\Charts\Keuangan\S1Fisika\Fisika2;
use App\Charts\Keuangan\S1Fisika\Fisika3;
use App\Charts\Keuangan\S1Fisika\Fisika4;
use App\Charts\Keuangan\S1Fisika\Fisika5;
use App\Charts\Keuangan\S1Fisika\Fisika6;
use App\Charts\Keuangan\S1Fisika\Fisika7;
use App\Charts\Keuangan\S1Fisika\Fisika8;




class EvalKeuanganController extends Controller
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


        // D3 Farmasi
        Farm1 $farm1,
        Farm2 $farm2,
        Farm3 $farm3,
        Farm4 $farm4,
        Farm5 $farm5,
        Farm6 $farm6,
        Farm7 $farm7,
        Farm8 $farm8,


         // S1 Farmasi
        S1Farm1 $s1farm1,
        S1Farm2 $s1farm2,
        S1Farm3 $s1farm3,
        S1Farm4 $s1farm4,
        S1Farm5 $s1farm5,
        S1Farm6 $s1farm6,
        S1Farm7 $s1farm7,
        S1Farm8 $s1farm8,


         // // S1 Matematika
        Math1 $math1,
        Math2 $math2,
        Math3 $math3,
        Math4 $math4,
        Math5 $math5,
        Math6 $math6,
        Math7 $math7,
        Math8 $math8,


        // S1 Biologi
        Bio1 $bio1,
        Bio2 $bio2,
        Bio3 $bio3,
        Bio4 $bio4,
        Bio5 $bio5,
        Bio6 $bio6,
        Bio7 $bio7,
        Bio8 $bio8,

        // S1 Biologi
        S2Bio1 $s2bio1,
        S2Bio2 $s2bio2,
        S2Bio3 $s2bio3,
        S2Bio4 $s2bio4,
        S2Bio5 $s2bio5,
        S2Bio6 $s2bio6,
        S2Bio7 $s2bio7,
        S2Bio8 $s2bio8,

        // // D3 Kebidanan
        Bidan1 $bidan1,
        Bidan2 $bidan2,
        Bidan3 $bidan3,
        Bidan4 $bidan4,
        Bidan5 $bidan5,
        Bidan6 $bidan6,
        Bidan7 $bidan7,
        Bidan8 $bidan8,


        // // //D3 Keperawatan
        Rawat1 $rawat1,
        Rawat2 $rawat2,
        Rawat3 $rawat3,
        Rawat4 $rawat4,
        Rawat5 $rawat5,
        Rawat6 $rawat6,
        Rawat7 $rawat7,
        Rawat8 $rawat8,

        // //D3 Lab Sains
        LabSains1 $labsains1,
        LabSains2 $labsains2,
        LabSains3 $labsains3,
        LabSains4 $labsains4,
        LabSains5 $labsains5,
        LabSains6 $labsains6,
        LabSains7 $labsains7,
        LabSains8 $labsains8,


        // // S1 Statistika
        Statis1 $statis1,
        Statis2 $statis2,
        Statis3 $statis3,
        Statis4 $statis4,
        Statis5 $statis5,
        Statis6 $statis6,
        Statis7 $statis7,
        Statis8 $statis8,

        
        S2Statis1 $s2statis1,
        S2Statis2 $s2statis2,
        S2Statis3 $s2statis3,
        S2Statis4 $s2statis4,
        S2Statis5 $s2statis5,
        S2Statis6 $s2statis6,
        S2Statis7 $s2statis7,
        S2Statis8 $s2statis8,


        // // S1 Kimia
        S1kim1 $s1kim1,
        S1kim2 $s1kim2,
        S1kim3 $s1kim3,
        S1kim4 $s1kim4,
        S1kim5 $s1kim5,
        S1kim6 $s1kim6,
        S1kim7 $s1kim7,
        S1kim8 $s1kim8,


        // // S2 Kimia
        S2Kim1 $s2kim1,
        S2Kim2 $s2kim2,
        S2Kim3 $s2kim3,
        S2Kim4 $s2kim4,
        S2Kim5 $s2kim5,
        S2Kim6 $s2kim6,
        S2Kim7 $s2kim7,
        S2Kim8 $s2kim8,


        // Fisika
        Fisika1 $fisika1,
        Fisika2 $fisika2,
        Fisika3 $fisika3,
        Fisika4 $fisika4,
        Fisika5 $fisika5,
        Fisika6 $fisika6,
        Fisika7 $fisika7,
        Fisika8 $fisika8,

        // Geofisika
        Geo1 $geo1,
        Geo2 $geo2,
        Geo3 $geo3,
        Geo4 $geo4,
        Geo5 $geo5,
        Geo6 $geo6,
        Geo7 $geo7,
        Geo8 $geo8,


    )
    {
        return view('evaluasi.Keuangan.index',
        [

            'farm1' => $farm1->build(),
            'farm2' => $farm2->build(),
            'farm3' => $farm3->build(),
            'farm4' => $farm4->build(),
            'farm5' => $farm5->build(),
            'farm6' => $farm6->build(),
            'farm7' => $farm7->build(),
            'farm8' => $farm8->build(),


            's1farm1' => $s1farm1->build(),
            's1farm2' => $s1farm2->build(),
            's1farm3' => $s1farm3->build(),
            's1farm4' => $s1farm4->build(),
            's1farm5' => $s1farm5->build(),
            's1farm6' => $s1farm6->build(),
            's1farm7' => $s1farm7->build(),
            's1farm8' => $s1farm8->build(),


            'math1' => $math1->build(),
            'math2' => $math2->build(),
            'math3' => $math3->build(),
            'math4' => $math4->build(),
            'math5' => $math5->build(),
            'math6' => $math6->build(),
            'math7' => $math7->build(),
            'math8' => $math8->build(),

            'bio1' => $bio1->build(),
            'bio2' => $bio2->build(),
            'bio3' => $bio3->build(),
            'bio4' => $bio4->build(),
            'bio5' => $bio5->build(),
            'bio6' => $bio6->build(),
            'bio7' => $bio7->build(),
            'bio8' => $bio8->build(),

            
            's2bio1' => $s2bio1->build(),
            's2bio2' => $s2bio2->build(),
            's2bio3' => $s2bio3->build(),
            's2bio4' => $s2bio4->build(),
            's2bio5' => $s2bio5->build(),
            's2bio6' => $s2bio6->build(),
            's2bio7' => $s2bio7->build(),
            's2bio8' => $s2bio8->build(),

            'bidan1' => $bidan1->build(),
            'bidan2' => $bidan2->build(),
            'bidan3' => $bidan3->build(),
            'bidan4' => $bidan4->build(),
            'bidan5' => $bidan5->build(),
            'bidan6' => $bidan6->build(),
            'bidan7' => $bidan7->build(),
            'bidan8' => $bidan8->build(),


            'rawat1' => $rawat1->build(),
            'rawat2' => $rawat2->build(),
            'rawat3' => $rawat3->build(),
            'rawat4' => $rawat4->build(),
            'rawat5' => $rawat5->build(),
            'rawat6' => $rawat6->build(),
            'rawat7' => $rawat7->build(),
            'rawat8' => $rawat8->build(),


            'labsains1' => $labsains1->build(),
            'labsains2' => $labsains2->build(),
            'labsains3' => $labsains3->build(),
            'labsains4' => $labsains4->build(),
            'labsains5' => $labsains5->build(),
            'labsains6' => $labsains6->build(),
            'labsains7' => $labsains7->build(),
            'labsains8' => $labsains8->build(),
    
            'statis1' => $statis1->build(),
            'statis2' => $statis2->build(),
            'statis3' => $statis3->build(),
            'statis4' => $statis4->build(),
            'statis5' => $statis5->build(),
            'statis6' => $statis6->build(),
            'statis7' => $statis7->build(),
            'statis8' => $statis8->build(),

            's2statis1' => $s2statis1->build(),
            's2statis2' => $s2statis2->build(),
            's2statis3' => $s2statis3->build(),
            's2statis4' => $s2statis4->build(),
            's2statis5' => $s2statis5->build(),
            's2statis6' => $s2statis6->build(),
            's2statis7' => $s2statis7->build(),
            's2statis8' => $s2statis8->build(),



            's1kim1' => $s1kim1->build(),
            's1kim2' => $s1kim2->build(),
            's1kim3' => $s1kim3->build(),
            's1kim4' => $s1kim4->build(),
            's1kim5' => $s1kim5->build(),
            's1kim6' => $s1kim6->build(),
            's1kim7' => $s1kim7->build(),
            's1kim8' => $s1kim8->build(),


            's2kim1' => $s2kim1->build(),
            's2kim2' => $s2kim2->build(),
            's2kim3' => $s2kim3->build(),
            's2kim4' => $s2kim4->build(),
            's2kim5' => $s2kim5->build(),
            's2kim6' => $s2kim6->build(),
            's2kim7' => $s2kim7->build(),
            's2kim8' => $s2kim8->build(),


            
            'fisika1' => $fisika1->build(),
            'fisika2' => $fisika2->build(),
            'fisika3' => $fisika3->build(),
            'fisika4' => $fisika4->build(),
            'fisika5' => $fisika5->build(),
            'fisika6' => $fisika6->build(),
            'fisika7' => $fisika7->build(),
            'fisika8' => $fisika8->build(),

            'geo1' => $geo1->build(),
            'geo2' => $geo2->build(),
            'geo3' => $geo3->build(),
            'geo4' => $geo4->build(),
            'geo5' => $geo5->build(),
            'geo6' => $geo6->build(),
            'geo7' => $geo7->build(),
            'geo8' => $geo8->build(),
      

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


    return view('evaluasi.Keuangan.table', [
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