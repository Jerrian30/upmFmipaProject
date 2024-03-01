<?php

namespace App\Charts\Visi\All;

use App\Models\Visi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PL10
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Visi::select('vmts_dukung_atmosfer_akademik', \DB::raw('count(*) as total'))
            ->groupBy('vmts_dukung_atmosfer_akademik')
            ->pluck('total', 'vmts_dukung_atmosfer_akademik')->all();

        $labels = ['Sangat mendukung', 'Mendukung', 'Kurang mendukung', 'Tidak mendukung'];
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
