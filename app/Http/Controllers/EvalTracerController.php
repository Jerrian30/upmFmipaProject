<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tracer;


use App\Charts\Tracer\All\PL1;
// use App\Charts\Tracer\All\PL2;
// use App\Charts\Tracer\All\PL3;
// use App\Charts\Tracer\All\PL4;
// use App\Charts\Tracer\All\PL5;
// use App\Charts\Tracer\All\PL6;
// use App\Charts\Tracer\All\PL7;
// use App\Charts\Tracer\All\PL8;
// use App\Charts\Tracer\All\PL9;
// use App\Charts\Tracer\All\PL10;
// use App\Charts\Tracer\All\PL11;
// use App\Charts\Tracer\All\PL12;
// use App\Charts\Tracer\All\PL13;
// use App\Charts\Tracer\All\PL14;
// use App\Charts\Tracer\All\PL15;
// use App\Charts\Tracer\All\PL16;
// use App\Charts\Tracer\All\PL17;
// use App\Charts\Tracer\All\PL18;  
// use App\Charts\Tracer\All\PL19;
// use App\Charts\Tracer\All\PL20;
// use App\Charts\Tracer\All\PL21;
// use App\Charts\Tracer\All\PL22;
// use App\Charts\Tracer\All\PL23;
// use App\Charts\Tracer\All\PL24;
// use App\Charts\Tracer\All\PL25;
// use App\Charts\Tracer\All\PL26;
// use App\Charts\Tracer\All\PL27;
// use App\Charts\Tracer\All\PL28;
// use App\Charts\Tracer\All\PL29;
// use App\Charts\Tracer\All\PL30;
// use App\Charts\Tracer\All\PL31;
// use App\Charts\Tracer\All\PL32;
// use App\Charts\Tracer\All\PL33;
// use App\Charts\Tracer\All\PL34;  
// use App\Charts\Tracer\All\PL35;
// use App\Charts\Tracer\All\PL36;
// use App\Charts\Tracer\All\PL37;
// use App\Charts\Tracer\All\PL38;


// Class Geofisika
use App\Charts\Tracer\S1Geofisika\Geo1;
use App\Charts\Tracer\S1Geofisika\Geo2;
use App\Charts\Tracer\S1Geofisika\Geo3;
use App\Charts\Tracer\S1Geofisika\Geo4;
use App\Charts\Tracer\S1Geofisika\Geo5;
use App\Charts\Tracer\S1Geofisika\Geo6;
use App\Charts\Tracer\S1Geofisika\Geo7;
use App\Charts\Tracer\S1Geofisika\Geo8;
use App\Charts\Tracer\S1Geofisika\Geo9;
use App\Charts\Tracer\S1Geofisika\Geo10;
use App\Charts\Tracer\S1Geofisika\Geo11;
use App\Charts\Tracer\S1Geofisika\Geo12;
use App\Charts\Tracer\S1Geofisika\Geo13;
use App\Charts\Tracer\S1Geofisika\Geo14;
use App\Charts\Tracer\S1Geofisika\Geo15;
use App\Charts\Tracer\S1Geofisika\Geo16;
use App\Charts\Tracer\S1Geofisika\Geo17;
use App\Charts\Tracer\S1Geofisika\Geo18;
use App\Charts\Tracer\S1Geofisika\Geo19;



// Class Matematika
use App\Charts\Tracer\S1Matematika\Math1;
use App\Charts\Tracer\S1Matematika\Math2;
use App\Charts\Tracer\S1Matematika\Math3;
use App\Charts\Tracer\S1Matematika\Math4;
use App\Charts\Tracer\S1Matematika\Math5;
use App\Charts\Tracer\S1Matematika\Math6;
use App\Charts\Tracer\S1Matematika\Math7;
use App\Charts\Tracer\S1Matematika\Math8;
use App\Charts\Tracer\S1Matematika\Math9;
use App\Charts\Tracer\S1Matematika\Math10;
use App\Charts\Tracer\S1Matematika\Math11;
use App\Charts\Tracer\S1Matematika\Math12;
use App\Charts\Tracer\S1Matematika\Math13;
use App\Charts\Tracer\S1Matematika\Math14;
use App\Charts\Tracer\S1Matematika\Math15;
use App\Charts\Tracer\S1Matematika\Math16;
use App\Charts\Tracer\S1Matematika\Math17;
use App\Charts\Tracer\S1Matematika\Math18;
use App\Charts\Tracer\S1Matematika\Math19;


// Class Biologi
use App\Charts\Tracer\S1Biologi\Bio1;
use App\Charts\Tracer\S1Biologi\Bio2;
use App\Charts\Tracer\S1Biologi\Bio3;
use App\Charts\Tracer\S1Biologi\Bio4;
use App\Charts\Tracer\S1Biologi\Bio5;
use App\Charts\Tracer\S1Biologi\Bio6;
use App\Charts\Tracer\S1Biologi\Bio7;
use App\Charts\Tracer\S1Biologi\Bio8;
use App\Charts\Tracer\S1Biologi\Bio9;
use App\Charts\Tracer\S1Biologi\Bio10;
use App\Charts\Tracer\S1Biologi\Bio11;
use App\Charts\Tracer\S1Biologi\Bio12;
use App\Charts\Tracer\S1Biologi\Bio13;
use App\Charts\Tracer\S1Biologi\Bio14;
use App\Charts\Tracer\S1Biologi\Bio15;
use App\Charts\Tracer\S1Biologi\Bio16;
use App\Charts\Tracer\S1Biologi\Bio17;
use App\Charts\Tracer\S1Biologi\Bio18;
use App\Charts\Tracer\S1Biologi\Bio19;


// // Class Kebidanan
use App\Charts\Tracer\D3Kebidanan\Bidan1;
use App\Charts\Tracer\D3Kebidanan\Bidan2;
use App\Charts\Tracer\D3Kebidanan\Bidan3;
use App\Charts\Tracer\D3Kebidanan\Bidan4;
use App\Charts\Tracer\D3Kebidanan\Bidan5;
use App\Charts\Tracer\D3Kebidanan\Bidan6;
use App\Charts\Tracer\D3Kebidanan\Bidan7;
use App\Charts\Tracer\D3Kebidanan\Bidan8;
use App\Charts\Tracer\D3Kebidanan\Bidan9;
use App\Charts\Tracer\D3Kebidanan\Bidan10;
use App\Charts\Tracer\D3Kebidanan\Bidan11;
use App\Charts\Tracer\D3Kebidanan\Bidan12;
use App\Charts\Tracer\D3Kebidanan\Bidan13;
use App\Charts\Tracer\D3Kebidanan\Bidan14;
use App\Charts\Tracer\D3Kebidanan\Bidan15;




// Class Lab Sains
use App\Charts\Tracer\D3LabSains\LabSains1;
use App\Charts\Tracer\D3LabSains\LabSains2;
use App\Charts\Tracer\D3LabSains\LabSains3;
use App\Charts\Tracer\D3LabSains\LabSains4;
use App\Charts\Tracer\D3LabSains\LabSains5;
use App\Charts\Tracer\D3LabSains\LabSains6;
use App\Charts\Tracer\D3LabSains\LabSains7;
use App\Charts\Tracer\D3LabSains\LabSains8;
use App\Charts\Tracer\D3LabSains\LabSains9;
use App\Charts\Tracer\D3LabSains\LabSains10;
use App\Charts\Tracer\D3LabSains\LabSains11;
use App\Charts\Tracer\D3LabSains\LabSains12;
use App\Charts\Tracer\D3LabSains\LabSains13;
use App\Charts\Tracer\D3LabSains\LabSains14;
use App\Charts\Tracer\D3LabSains\LabSains15;
use App\Charts\Tracer\D3LabSains\LabSains16;
use App\Charts\Tracer\D3LabSains\LabSains17;
use App\Charts\Tracer\D3LabSains\LabSains18;
use App\Charts\Tracer\D3LabSains\LabSains19;

// Class Statistika
use App\Charts\Tracer\S1Statistika\Statis1;
use App\Charts\Tracer\S1Statistika\Statis2;
use App\Charts\Tracer\S1Statistika\Statis3;
use App\Charts\Tracer\S1Statistika\Statis4;
use App\Charts\Tracer\S1Statistika\Statis5;
use App\Charts\Tracer\S1Statistika\Statis6;
use App\Charts\Tracer\S1Statistika\Statis7;
use App\Charts\Tracer\S1Statistika\Statis8;
use App\Charts\Tracer\S1Statistika\Statis9;
use App\Charts\Tracer\S1Statistika\Statis10;
use App\Charts\Tracer\S1Statistika\Statis11;
use App\Charts\Tracer\S1Statistika\Statis12;
use App\Charts\Tracer\S1Statistika\Statis13;
use App\Charts\Tracer\S1Statistika\Statis14;
use App\Charts\Tracer\S1Statistika\Statis15;
use App\Charts\Tracer\S1Statistika\Statis16;
use App\Charts\Tracer\S1Statistika\Statis17;
use App\Charts\Tracer\S1Statistika\Statis18;
use App\Charts\Tracer\S1Statistika\Statis19;


use App\Charts\Tracer\S2Statistika\S2Statis1;
use App\Charts\Tracer\S2Statistika\S2Statis2;
use App\Charts\Tracer\S2Statistika\S2Statis3;
use App\Charts\Tracer\S2Statistika\S2Statis4;
use App\Charts\Tracer\S2Statistika\S2Statis5;
use App\Charts\Tracer\S2Statistika\S2Statis6;
use App\Charts\Tracer\S2Statistika\S2Statis7;
use App\Charts\Tracer\S2Statistika\S2Statis8;
use App\Charts\Tracer\S2Statistika\S2Statis9;
use App\Charts\Tracer\S2Statistika\S2Statis10;
use App\Charts\Tracer\S2Statistika\S2Statis11;
use App\Charts\Tracer\S2Statistika\S2Statis12;
use App\Charts\Tracer\S2Statistika\S2Statis13;
use App\Charts\Tracer\S2Statistika\S2Statis14;
use App\Charts\Tracer\S2Statistika\S2Statis15;
use App\Charts\Tracer\S2Statistika\S2Statis16;
use App\Charts\Tracer\S2Statistika\S2Statis17;
use App\Charts\Tracer\S2Statistika\S2Statis18;
use App\Charts\Tracer\S2Statistika\S2Statis19;

//Class S1 Kimia
use App\Charts\Tracer\S1Kimia\S1Kim1;
use App\Charts\Tracer\S1Kimia\S1Kim2;
use App\Charts\Tracer\S1Kimia\S1Kim3;
use App\Charts\Tracer\S1Kimia\S1Kim4;
use App\Charts\Tracer\S1Kimia\S1Kim5;
use App\Charts\Tracer\S1Kimia\S1Kim6;
use App\Charts\Tracer\S1Kimia\S1Kim7;
use App\Charts\Tracer\S1Kimia\S1Kim8;
use App\Charts\Tracer\S1Kimia\S1Kim9;
use App\Charts\Tracer\S1Kimia\S1Kim10;
use App\Charts\Tracer\S1Kimia\S1Kim11;
use App\Charts\Tracer\S1Kimia\S1Kim12;
use App\Charts\Tracer\S1Kimia\S1Kim13;
use App\Charts\Tracer\S1Kimia\S1Kim14;
use App\Charts\Tracer\S1Kimia\S1Kim15;
use App\Charts\Tracer\S1Kimia\S1Kim16;
use App\Charts\Tracer\S1Kimia\S1Kim17;
use App\Charts\Tracer\S1Kimia\S1Kim18;
use App\Charts\Tracer\S1Kimia\S1Kim19;


//Class S2 Kimia
use App\Charts\Tracer\S2Kimia\S2Kim1;
use App\Charts\Tracer\S2Kimia\S2Kim2;
use App\Charts\Tracer\S2Kimia\S2Kim3;
use App\Charts\Tracer\S2Kimia\S2Kim4;
use App\Charts\Tracer\S2Kimia\S2Kim5;
use App\Charts\Tracer\S2Kimia\S2Kim6;
use App\Charts\Tracer\S2Kimia\S2Kim7;
use App\Charts\Tracer\S2Kimia\S2Kim8;
use App\Charts\Tracer\S2Kimia\S2Kim9;
use App\Charts\Tracer\S2Kimia\S2Kim10;
use App\Charts\Tracer\S2Kimia\S2Kim11;
use App\Charts\Tracer\S2Kimia\S2Kim12;
use App\Charts\Tracer\S2Kimia\S2Kim13;
use App\Charts\Tracer\S2Kimia\S2Kim14;
use App\Charts\Tracer\S2Kimia\S2Kim15;
use App\Charts\Tracer\S2Kimia\S2Kim16;
use App\Charts\Tracer\S2Kimia\S2Kim17;
use App\Charts\Tracer\S2Kimia\S2Kim18;
use App\Charts\Tracer\S2Kimia\S2Kim19;




class EvalTracerController extends Controller
{
    public function index(

        //All
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
        // PL13 $pl13,
        // PL14 $pl14,
        // PL15 $pl15,
        // PL16 $pl16,
        // PL17 $pl17,
        // PL18 $pl18,
        // PL19 $pl19,
        // PL20 $pl20,
        // PL21 $pl21,
        // PL22 $pl22,
        // PL23 $pl23,
        // PL24 $pl24,
        // PL25 $pl25,
        // PL26 $pl26,
        // PL27 $pl27,
        // PL28 $pl28,
        // PL29 $pl29,
        // PL30 $pl30,
        // PL31 $pl31,
        // PL32 $pl32,
        // PL33 $pl33,
        // PL34 $pl34,
        // PL35 $pl35,
        // PL36 $pl36,
        // PL37 $pl37,
        // PL38 $pl38,


        // S1 Matematika
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
        Math11 $math11,
        Math12 $math12,
        Math13 $math13,
        Math14 $math14,
        Math15 $math15,
        Math16 $math16,
        Math17 $math17,
        Math18 $math18,
        Math19 $math19,



        // S1 Biologi
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
        Bio11 $bio11,
        Bio12 $bio12,
        Bio13 $bio13,
        Bio14 $bio14,
        Bio15 $bio15,
        Bio16 $bio16,
        Bio17 $bio17,
        Bio18 $bio18,
        Bio19 $bio19,

        // D3 Kebidanan
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
        Bidan11 $bidan11,
        Bidan12 $bidan12,
        Bidan13 $bidan13,
        Bidan14 $bidan14,
        Bidan15 $bidan15,

        //D3 Lab Sains
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
        LabSains11 $labsains11,
        LabSains12 $labsains12,
        LabSains13 $labsains13,
        LabSains14 $labsains14,
        LabSains15 $labsains15,
        LabSains16 $labsains16,
        LabSains17 $labsains17,
        LabSains18 $labsains18,
        LabSains19 $labsains19,

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
        Statis11 $statis11,
        Statis12 $statis12,
        Statis13 $statis13,
        Statis14 $statis14,
        Statis15 $statis15,
        Statis16 $statis16,
        Statis17 $statis17,
        Statis18 $statis18,
        Statis19 $statis19,
        
        S2Statis1 $s2statis1,
        S2Statis2 $s2statis2,
        S2Statis3 $s2statis3,
        S2Statis4 $s2statis4,
        S2Statis5 $s2statis5,
        S2Statis6 $s2statis6,
        S2Statis7 $s2statis7,
        S2Statis8 $s2statis8,
        S2Statis9 $s2statis9,
        S2Statis10 $s2statis10,
        S2Statis11 $s2statis11,
        S2Statis12 $s2statis12,
        S2Statis13 $s2statis13,
        S2Statis14 $s2statis14,
        S2Statis15 $s2statis15,
        S2Statis16 $s2statis16,
        S2Statis17 $s2statis17,
        S2Statis18 $s2statis18,
        S2Statis19 $s2statis19,


        // S1 Kimia
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
        S1kim11 $s1kim11,
        S1kim12 $s1kim12,
        S1kim13 $s1kim13,
        S1kim14 $s1kim14,
        S1kim15 $s1kim15,
        S1kim16 $s1kim16,
        S1kim17 $s1kim17,
        S1kim18 $s1kim18,
        S1kim19 $s1kim19,

        // S2 Kimia
        S2Kim1 $s2kim1,
        S2Kim2 $s2kim2,
        S2Kim3 $s2kim3,
        S2Kim4 $s2kim4,
        S2Kim5 $s2kim5,
        S2Kim6 $s2kim6,
        S2Kim7 $s2kim7,
        S2Kim8 $s2kim8,
        S2Kim9 $s2kim9,
        S2Kim10 $s2kim10,
        S2Kim11 $s2kim11,
        S2Kim12 $s2kim12,
        S2Kim13 $s2kim13,
        S2Kim14 $s2kim14,
        S2Kim15 $s2kim15,
        S2Kim16 $s2kim16,
        S2Kim17 $s2kim17,
        S2Kim18 $s2kim18,
        S2Kim19 $s2kim19,


        // Geofisika
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
        Geo11 $geo11,
        Geo12 $geo12,
        Geo13 $geo13,
        Geo14 $geo14,
        Geo15 $geo15,
        Geo16 $geo16,
        Geo17 $geo17,
        Geo18 $geo18,
        Geo19 $geo19,

    )
    {
        return view('evaluasi.tracer.index',
        [
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
            'math11' => $math11->build(),
            'math12' => $math12->build(),
            'math13' => $math13->build(),
            'math14' => $math14->build(),
            'math15' => $math15->build(),
            'math16' => $math16->build(),
            'math17' => $math17->build(),
            'math18' => $math18->build(),
            'math19' => $math19->build(),
            
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
            'bio11' => $bio11->build(),
            'bio12' => $bio12->build(),
            'bio13' => $bio13->build(),
            'bio14' => $bio14->build(),
            'bio15' => $bio15->build(),
            'bio16' => $bio16->build(),
            'bio17' => $bio17->build(),
            'bio18' => $bio18->build(),
            'bio19' => $bio19->build(),

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
            'bidan11' => $bidan11->build(),
            'bidan12' => $bidan12->build(),
            'bidan13' => $bidan13->build(),
            'bidan14' => $bidan14->build(),
            'bidan15' => $bidan15->build(),


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
            'labsains11' => $labsains11->build(),
            'labsains12' => $labsains12->build(),
            'labsains13' => $labsains13->build(),
            'labsains14' => $labsains14->build(),
            'labsains15' => $labsains15->build(),
            'labsains16' => $labsains16->build(),
            'labsains17' => $labsains17->build(),
            'labsains18' => $labsains18->build(),
            'labsains19' => $labsains19->build(),
            
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
            'statis11' => $statis11->build(),
            'statis12' => $statis12->build(),
            'statis13' => $statis13->build(),
            'statis14' => $statis14->build(),
            'statis15' => $statis15->build(),
            'statis16' => $statis16->build(),
            'statis17' => $statis17->build(), 
            'statis18' => $statis18->build(),
            'statis19' => $statis19->build(),

            's2statis1' => $s2statis1->build(),
            's2statis2' => $s2statis2->build(),
            's2statis3' => $s2statis3->build(),
            's2statis4' => $s2statis4->build(),
            's2statis5' => $s2statis5->build(),
            's2statis6' => $s2statis6->build(),
            's2statis7' => $s2statis7->build(),
            's2statis8' => $s2statis8->build(),
            's2statis9' => $s2statis9->build(),
            's2statis10' => $s2statis10->build(),
            's2statis11' => $s2statis11->build(),
            's2statis12' => $s2statis12->build(),
            's2statis13' => $s2statis13->build(),
            's2statis14' => $s2statis14->build(),
            's2statis15' => $s2statis15->build(),
            's2statis16' => $s2statis16->build(),
            's2statis17' => $s2statis17->build(),
            's2statis18' => $s2statis18->build(),
            's2statis19' => $s2statis19->build(),

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
            's1kim11' => $s1kim11->build(),
            's1kim12' => $s1kim12->build(),
            's1kim13' => $s1kim13->build(),
            's1kim14' => $s1kim14->build(),
            's1kim15' => $s1kim15->build(),
            's1kim16' => $s1kim16->build(),
            's1kim17' => $s1kim17->build(),
            's1kim18' => $s1kim18->build(),
            's1kim19' => $s1kim19->build(),

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
            's2kim11' => $s2kim11->build(),
            's2kim12' => $s2kim12->build(),
            's2kim13' => $s2kim13->build(),
            's2kim14' => $s2kim14->build(),
            's2kim15' => $s2kim15->build(),
            's2kim16' => $s2kim16->build(),
            's2kim17' => $s2kim17->build(),
            's2kim18' => $s2kim18->build(),
            's2kim19' => $s2kim19->build(),

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
            'geo11' => $geo11->build(),
            'geo12' => $geo12->build(),
            'geo13' => $geo13->build(),
            'geo14' => $geo14->build(),
            'geo15' => $geo15->build(),
            'geo16' => $geo16->build(),
            'geo17' => $geo17->build(),
            'geo18' => $geo18->build(),
            'geo19' => $geo19->build(),

            'pl1' => $pl1->build(),
            // 'pl2' => $pl2->build(),
            // 'pl3' => $pl3->build(),
            // 'pl4' => $pl4->build(),
            // 'pl5' => $pl5->build(),
            // 'pl6' => $pl6->build(),
            // 'pl7' => $pl7->build(),
            // 'pl8' => $pl8->build(),
            // 'pl9' => $pl9->build(),
            // 'pl10' => $pl10->build(),
            // 'pl11' => $pl11->build(),
            // 'pl12' => $pl12->build(),
            // 'pl13' => $pl13->build(),
            // 'pl14' => $pl14->build(),
            // 'pl15' => $pl15->build(),
            // 'pl16' => $pl16->build(),
            // 'pl17' => $pl17->build(),
            // 'pl18' => $pl18->build(),
            // 'pl19' => $pl19->build(),
            // 'pl20' => $pl20->build(),
            // 'pl21' => $pl21->build(),
            // 'pl22' => $pl22->build(),
            // 'pl23' => $pl23->build(),
            // 'pl24' => $pl24->build(),
            // 'pl25' => $pl25->build(),
            // 'pl26' => $pl26->build(),
            // 'pl27' => $pl27->build(),
            // 'pl28' => $pl28->build(),
            // 'pl29' => $pl29->build(),
            // 'pl30' => $pl30->build(),
            // 'pl31' => $pl31->build(),
            // 'pl32' => $pl32->build(),
            // 'pl33' => $pl33->build(),
            // 'pl34' => $pl34->build(),
            // 'pl35' => $pl35->build(),
            // 'pl36' => $pl36->build(),
            // 'pl37' => $pl37->build(),
            // 'pl38' => $pl38->build(),




        ]);
    } 



}