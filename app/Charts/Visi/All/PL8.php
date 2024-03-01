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
        $data = Visi::select('misi_sesuai_tridharma', \DB::raw('count(*) as total'))
            ->groupBy('misi_sesuai_tridharma')
            ->pluck('total', 'misi_sesuai_tridharma')->all();

        $labels = ['Sangat sesuai', 'Sesuai', 'Kurang Sesuai', 'Tidak Sesuai'];
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
