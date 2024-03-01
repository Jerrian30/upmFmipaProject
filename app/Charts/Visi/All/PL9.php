<?php

namespace App\Charts\Visi\All;

use App\Models\Visi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PL8
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Visi::select('misi_tujuan_strategi_dukung_visi', \DB::raw('count(*) as total'))
            ->groupBy('misi_tujuan_strategi_dukung_visi')
            ->pluck('total', 'misi_tujuan_strategi_dukung_visi')->all();

        $labels = ['Sangat Mendukung', 'Mendukung', 'Kurang mendukung', 'Tidak mendukung'];
        $counts = array_fill_keys($labels, 0); // Inisialisasi array dengan 0 untuk setiap label

        // Mengisi $counts dengan data yang ada
        foreach ($data as $key => $value) {
            if (array_key_exists($key, $counts)) {
                $counts[$key] = $value;
            }
        }

        return $this->chart->donutChart()
            ->addData(array_values($counts))
            ->setLabels(array_keys($counts));
    }
}
