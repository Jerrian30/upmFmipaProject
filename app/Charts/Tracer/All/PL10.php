<?php

namespace App\Charts\Tracer\All;

use App\Models\Tracer;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class PL10
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracer::select('kebutuhan_institusi_terhadap_lulusan', \DB::raw('count(*) as total'))
            ->groupBy('kebutuhan_institusi_terhadap_lulusan')
            ->pluck('total', 'kebutuhan_institusi_terhadap_lulusan')->all();
    
        $labels = ['Sangat Rendah', 'Rendah', 'Tinggi', 'Sangat tinggi'];
        $counts = array_fill_keys($labels, 0);
    
        // Hitung total keseluruhan responden
        $totalResponden = array_sum($data);
    
        // Mengisi $counts dengan persentase data yang ada
        foreach ($data as $key => $value) {
            if (array_key_exists($key, $counts)) {
                // Hitung persentase dan simpan ke dalam $counts
                $counts[$key] = $totalResponden > 0 ? round(($value / $totalResponden) * 100, 2) : 0;
            }
        }
    
        // Agar label menampilkan persentase, Anda bisa memodifikasi $labels disini
        // atau saat menampilkan di view/front-end, tergantung pada kebutuhan Anda.
    
        return $this->chart->donutChart()
            ->addData(array_values($counts))
            ->setLabels(array_keys($counts));
    }
}