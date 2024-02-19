<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dosen;


use App\Charts\Dosen\All\PL1;
use App\Charts\Dosen\All\PL2;
use App\Charts\Dosen\All\PL3;
use App\Charts\Dosen\All\PL4;
use App\Charts\Dosen\All\PL5;
use App\Charts\Dosen\All\PL6;
use App\Charts\Dosen\All\PL7;
use App\Charts\Dosen\All\PL8;
use App\Charts\Dosen\All\PL9;
use App\Charts\Dosen\All\PL10;


// Class Geofisika
use App\Charts\Dosen\S1Geofisika\Geo1;
use App\Charts\Dosen\S1Geofisika\Geo2;
use App\Charts\Dosen\S1Geofisika\Geo3;
use App\Charts\Dosen\S1Geofisika\Geo4;
use App\Charts\Dosen\S1Geofisika\Geo5;
use App\Charts\Dosen\S1Geofisika\Geo6;
use App\Charts\Dosen\S1Geofisika\Geo7;
use App\Charts\Dosen\S1Geofisika\Geo8;
use App\Charts\Dosen\S1Geofisika\Geo9;
use App\Charts\Dosen\S1Geofisika\Geo10;

// Class D3Farmasi
use App\Charts\Dosen\D3Farmasi\Farm1;
use App\Charts\Dosen\D3Farmasi\Farm2;
use App\Charts\Dosen\D3Farmasi\Farm3;
use App\Charts\Dosen\D3Farmasi\Farm4;
use App\Charts\Dosen\D3Farmasi\Farm5;
use App\Charts\Dosen\D3Farmasi\Farm6;
use App\Charts\Dosen\D3Farmasi\Farm7;
use App\Charts\Dosen\D3Farmasi\Farm8;
use App\Charts\Dosen\D3Farmasi\Farm9;
use App\Charts\Dosen\D3Farmasi\Farm10;

// Class S1Farmasi
use App\Charts\Dosen\S1Farmasi\S1Farm1;
use App\Charts\Dosen\S1Farmasi\S1Farm2;
use App\Charts\Dosen\S1Farmasi\S1Farm3;
use App\Charts\Dosen\S1Farmasi\S1Farm4;
use App\Charts\Dosen\S1Farmasi\S1Farm5;
use App\Charts\Dosen\S1Farmasi\S1Farm6;
use App\Charts\Dosen\S1Farmasi\S1Farm7;
use App\Charts\Dosen\S1Farmasi\S1Farm8;
use App\Charts\Dosen\S1Farmasi\S1Farm9;
use App\Charts\Dosen\S1Farmasi\S1Farm10;

// // Class Matematika
use App\Charts\Dosen\S1Matematika\Math1;
use App\Charts\Dosen\S1Matematika\Math2;
use App\Charts\Dosen\S1Matematika\Math3;
use App\Charts\Dosen\S1Matematika\Math4;
use App\Charts\Dosen\S1Matematika\Math5;
use App\Charts\Dosen\S1Matematika\Math6;
use App\Charts\Dosen\S1Matematika\Math7;
use App\Charts\Dosen\S1Matematika\Math8;
use App\Charts\Dosen\S1Matematika\Math9;
use App\Charts\Dosen\S1Matematika\Math10;

// // Class Biologi
use App\Charts\Dosen\S1Biologi\Bio1;
use App\Charts\Dosen\S1Biologi\Bio2;
use App\Charts\Dosen\S1Biologi\Bio3;
use App\Charts\Dosen\S1Biologi\Bio4;
use App\Charts\Dosen\S1Biologi\Bio5;
use App\Charts\Dosen\S1Biologi\Bio6;
use App\Charts\Dosen\S1Biologi\Bio7;
use App\Charts\Dosen\S1Biologi\Bio8;
use App\Charts\Dosen\S1Biologi\Bio9;
use App\Charts\Dosen\S1Biologi\Bio10;

// // Class Kebidanan
use App\Charts\Dosen\D3Kebidanan\Bidan1;
use App\Charts\Dosen\D3Kebidanan\Bidan2;
use App\Charts\Dosen\D3Kebidanan\Bidan3;
use App\Charts\Dosen\D3Kebidanan\Bidan4;
use App\Charts\Dosen\D3Kebidanan\Bidan5;
use App\Charts\Dosen\D3Kebidanan\Bidan6;
use App\Charts\Dosen\D3Kebidanan\Bidan7;
use App\Charts\Dosen\D3Kebidanan\Bidan8;
use App\Charts\Dosen\D3Kebidanan\Bidan9;
use App\Charts\Dosen\D3Kebidanan\Bidan10;

// // Class Keperawatan
use App\Charts\Dosen\D3Keperawatan\Rawat1;
use App\Charts\Dosen\D3Keperawatan\Rawat2;
use App\Charts\Dosen\D3Keperawatan\Rawat3;
use App\Charts\Dosen\D3Keperawatan\Rawat4;
use App\Charts\Dosen\D3Keperawatan\Rawat5;
use App\Charts\Dosen\D3Keperawatan\Rawat6;
use App\Charts\Dosen\D3Keperawatan\Rawat7;
use App\Charts\Dosen\D3Keperawatan\Rawat8;
use App\Charts\Dosen\D3Keperawatan\Rawat9;
use App\Charts\Dosen\D3Keperawatan\Rawat10;

// // Class Lab Sains
use App\Charts\Dosen\D3LabSains\LabSains1;
use App\Charts\Dosen\D3LabSains\LabSains2;
use App\Charts\Dosen\D3LabSains\LabSains3;
use App\Charts\Dosen\D3LabSains\LabSains4;
use App\Charts\Dosen\D3LabSains\LabSains5;
use App\Charts\Dosen\D3LabSains\LabSains6;
use App\Charts\Dosen\D3LabSains\LabSains7;
use App\Charts\Dosen\D3LabSains\LabSains8;
use App\Charts\Dosen\D3LabSains\LabSains9;
use App\Charts\Dosen\D3LabSains\LabSains10;

// //Class Statistika
use App\Charts\Dosen\S1Statistika\Statis1;
use App\Charts\Dosen\S1Statistika\Statis2;
use App\Charts\Dosen\S1Statistika\Statis3;
use App\Charts\Dosen\S1Statistika\Statis4;
use App\Charts\Dosen\S1Statistika\Statis5;
use App\Charts\Dosen\S1Statistika\Statis6;
use App\Charts\Dosen\S1Statistika\Statis7;
use App\Charts\Dosen\S1Statistika\Statis8;
use App\Charts\Dosen\S1Statistika\Statis9;
use App\Charts\Dosen\S1Statistika\Statis10;

// //Class S1 Kimia
use App\Charts\Dosen\S1Kimia\S1kim1;
use App\Charts\Dosen\S1Kimia\S1kim2;
use App\Charts\Dosen\S1Kimia\S1kim3;
use App\Charts\Dosen\S1Kimia\S1kim4;
use App\Charts\Dosen\S1Kimia\S1kim5;
use App\Charts\Dosen\S1Kimia\S1kim6;
use App\Charts\Dosen\S1Kimia\S1kim7;
use App\Charts\Dosen\S1Kimia\S1kim8;
use App\Charts\Dosen\S1Kimia\S1kim9;
use App\Charts\Dosen\S1Kimia\S1kim10;

// //Class S2 Kimia
use App\Charts\Dosen\S2Kimia\S2kim1;
use App\Charts\Dosen\S2Kimia\S2kim2;
use App\Charts\Dosen\S2Kimia\S2kim3;
use App\Charts\Dosen\S2Kimia\S2kim4;
use App\Charts\Dosen\S2Kimia\S2kim5;
use App\Charts\Dosen\S2Kimia\S2kim6;
use App\Charts\Dosen\S2Kimia\S2kim7;
use App\Charts\Dosen\S2Kimia\S2kim8;
use App\Charts\Dosen\S2Kimia\S2kim9;
use App\Charts\Dosen\S2Kimia\S2kim10;

use App\Charts\Dosen\S1Fisika\Fisika1;
use App\Charts\Dosen\S1Fisika\Fisika2;
use App\Charts\Dosen\S1Fisika\Fisika3;
use App\Charts\Dosen\S1Fisika\Fisika4;
use App\Charts\Dosen\S1Fisika\Fisika5;
use App\Charts\Dosen\S1Fisika\Fisika6;
use App\Charts\Dosen\S1Fisika\Fisika7;
use App\Charts\Dosen\S1Fisika\Fisika8;
use App\Charts\Dosen\S1Fisika\Fisika9;
use App\Charts\Dosen\S1Fisika\Fisika10;




class EvalDosenController extends Controller
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
        Farm10 $farm10,

        // S1 Farmasi
        S1Farm1 $s1farm1,
        S1Farm2 $s1farm2,
        S1Farm3 $s1farm3,
        S1Farm4 $s1farm4,
        S1Farm5 $s1farm5,
        S1Farm6 $s1farm6,
        S1Farm7 $s1farm7,
        S1Farm8 $s1farm8,
        S1Farm9 $s1farm9,
        S1Farm10 $s1farm10,

        // // S1 Matematika
        Math1 $math1,
        Math2 $math2,
        Math3 $math3,
        Math4 $math4,
        Math5 $math5,
        Math6 $math6,
        Math7 $math7,
        Math8 $math8,
        Math9 $math9,
        Math10 $math10,

        // // S1 Biologi
        Bio1 $bio1,
        Bio2 $bio2,
        Bio3 $bio3,
        Bio4 $bio4,
        Bio5 $bio5,
        Bio6 $bio6,
        Bio7 $bio7,
        Bio8 $bio8,
        Bio9 $bio9,
        Bio10 $bio10,

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
        Bidan10 $bidan10,

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
        Rawat10 $rawat10,

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
        LabSains10 $labsains10,

        // S1 Statistika
        Statis1 $statis1,
        Statis2 $statis2,
        Statis3 $statis3,
        Statis4 $statis4,
        Statis5 $statis5,
        Statis6 $statis6,
        Statis7 $statis7,
        Statis8 $statis8,
        Statis9 $statis9,
        Statis10 $statis10,

        // //S1 Kimia
        S1kim1 $s1kim1,
        S1kim2 $s1kim2,
        S1kim3 $s1kim3,
        S1kim4 $s1kim4,
        S1kim5 $s1kim5,
        S1kim6 $s1kim6,
        S1kim7 $s1kim7,
        S1kim8 $s1kim8,
        S1kim9 $s1kim9,
        S1kim10 $s1kim10,

        // //S2 Kimia
        S2kim1 $s2kim1,
        S2kim2 $s2kim2,
        S2kim3 $s2kim3,
        S2kim4 $s2kim4,
        S2kim5 $s2kim5,
        S2kim6 $s2kim6,
        S2kim7 $s2kim7,
        S2kim8 $s2kim8,
        S2kim9 $s2kim9,
        S2kim10 $s2kim10,

        // Fisika
        Fisika1 $fisika1,
        Fisika2 $fisika2,
        Fisika3 $fisika3,
        Fisika4 $fisika4,
        Fisika5 $fisika5,
        Fisika6 $fisika6,
        Fisika7 $fisika7,
        Fisika8 $fisika8,
        Fisika9 $fisika9,
        Fisika10 $fisika10,

        //Geofisika
        Geo1 $geo1,
        Geo2 $geo2,
        Geo3 $geo3,
        Geo4 $geo4,
        Geo5 $geo5,
        Geo6 $geo6,
        Geo7 $geo7,
        Geo8 $geo8,
        Geo9 $geo9,
        Geo10 $geo10,

    )
    {
        $dosen = Dosen::all();
        return view('evaluasi.dosen.index',
        [
            'dosen' => $dosen,

            'farm1' => $farm1->build(),
            'farm2' => $farm2->build(),
            'farm3' => $farm3->build(),
            'farm4' => $farm4->build(),
            'farm5' => $farm5->build(),
            'farm6' => $farm6->build(),
            'farm7' => $farm7->build(),
            'farm8' => $farm8->build(),
            'farm9' => $farm9->build(),
            'farm10' => $farm10->build(),

            's1farm1' => $s1farm1->build(),
            's1farm2' => $s1farm2->build(),
            's1farm3' => $s1farm3->build(),
            's1farm4' => $s1farm4->build(),
            's1farm5' => $s1farm5->build(),
            's1farm6' => $s1farm6->build(),
            's1farm7' => $s1farm7->build(),
            's1farm8' => $s1farm8->build(),
            's1farm9' => $s1farm9->build(),
            's1farm10' => $s1farm10->build(),

            'math1' => $math1->build(),
            'math2' => $math2->build(),
            'math3' => $math3->build(),
            'math4' => $math4->build(),
            'math5' => $math5->build(),
            'math6' => $math6->build(),
            'math7' => $math7->build(),
            'math8' => $math8->build(),
            'math9' => $math9->build(),
            'math10' => $math10->build(),

            'bio1' => $bio1->build(),
            'bio2' => $bio2->build(),
            'bio3' => $bio3->build(),
            'bio4' => $bio4->build(),
            'bio5' => $bio5->build(),
            'bio6' => $bio6->build(),
            'bio7' => $bio7->build(),
            'bio8' => $bio8->build(),
            'bio9' => $bio9->build(),
            'bio10' => $bio10->build(),

            'bidan1' => $bidan1->build(),
            'bidan2' => $bidan2->build(),
            'bidan3' => $bidan3->build(),
            'bidan4' => $bidan4->build(),
            'bidan5' => $bidan5->build(),
            'bidan6' => $bidan6->build(),
            'bidan7' => $bidan7->build(),
            'bidan8' => $bidan8->build(),
            'bidan9' => $bidan9->build(),
            'bidan10' => $bidan10->build(),

            'rawat1' => $rawat1->build(),
            'rawat2' => $rawat2->build(),
            'rawat3' => $rawat3->build(),
            'rawat4' => $rawat4->build(),
            'rawat5' => $rawat5->build(),
            'rawat6' => $rawat6->build(),
            'rawat7' => $rawat7->build(),
            'rawat8' => $rawat8->build(),
            'rawat9' => $rawat9->build(),
            'rawat10' => $rawat10->build(),

            'labsains1' => $labsains1->build(),
            'labsains2' => $labsains2->build(),
            'labsains3' => $labsains3->build(),
            'labsains4' => $labsains4->build(),
            'labsains5' => $labsains5->build(),
            'labsains6' => $labsains6->build(),
            'labsains7' => $labsains7->build(),
            'labsains8' => $labsains8->build(),
            'labsains9' => $labsains9->build(),
            'labsains10' => $labsains10->build(),
            
            'statis1' => $statis1->build(),
            'statis2' => $statis2->build(),
            'statis3' => $statis3->build(),
            'statis4' => $statis4->build(),
            'statis5' => $statis5->build(),
            'statis6' => $statis6->build(),
            'statis7' => $statis7->build(),
            'statis8' => $statis8->build(),
            'statis9' => $statis9->build(),
            'statis10' => $statis10->build(),

            's1kim1' => $s1kim1->build(),
            's1kim2' => $s1kim2->build(),
            's1kim3' => $s1kim3->build(),
            's1kim4' => $s1kim4->build(),
            's1kim5' => $s1kim5->build(),
            's1kim6' => $s1kim6->build(),
            's1kim7' => $s1kim7->build(),
            's1kim8' => $s1kim8->build(),
            's1kim9' => $s1kim9->build(),
            's1kim10' => $s1kim10->build(),

            's2kim1' => $s2kim1->build(),
            's2kim2' => $s2kim2->build(),
            's2kim3' => $s2kim3->build(),
            's2kim4' => $s2kim4->build(),
            's2kim5' => $s2kim5->build(),
            's2kim6' => $s2kim6->build(),
            's2kim7' => $s2kim7->build(),
            's2kim8' => $s2kim8->build(),
            's2kim9' => $s2kim9->build(),
            's2kim10' => $s2kim10->build(),

            
            'fisika1' => $fisika1->build(),
            'fisika2' => $fisika2->build(),
            'fisika3' => $fisika3->build(),
            'fisika4' => $fisika4->build(),
            'fisika5' => $fisika5->build(),
            'fisika6' => $fisika6->build(),
            'fisika7' => $fisika7->build(),
            'fisika8' => $fisika8->build(),
            'fisika9' => $fisika9->build(),
            'fisika10' => $fisika10->build(),

            'geo1' => $geo1->build(),
            'geo2' => $geo2->build(),
            'geo3' => $geo3->build(),
            'geo4' => $geo4->build(),
            'geo5' => $geo5->build(),
            'geo6' => $geo6->build(),
            'geo7' => $geo7->build(),
            'geo8' => $geo8->build(),
            'geo9' => $geo9->build(),
            'geo10' => $geo10->build(),

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
        PL10 $pl10,
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
    $percentages10 = $pl10->getDetailedPercentages();


    return view('evaluasi.Dosen.table', [
        'percentages1' => $percentages1,
        'percentages2' => $percentages2,
        'percentages3' => $percentages3,
        'percentages4' => $percentages4,
        'percentages5' => $percentages5,
        'percentages6' => $percentages6,
        'percentages7' => $percentages7,
        'percentages8' => $percentages8,
        'percentages9' => $percentages9,
        'percentages10' => $percentages10
    ]);
}

}