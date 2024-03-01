<?php

namespace App\Charts\Visi\All;

use App\Models\Visi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PL6
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Visi::select('visi_sesuai_tuntutan_kerja', \DB::raw('count(*) as total'))
            ->groupBy('visi_sesuai_tuntutan_kerja')
            ->pluck('total', 'visi_sesuai_tuntutan_kerja')->all();

        $labels = ['Sangat sesuai', 'Sesuai', 'Kurang sesuai', 'Tidak sesuai'];
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
