<?php

namespace App\Charts\Lab\All;

use App\Models\Lab;
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
        $data = Visi::select('pemahaman_visi', \DB::raw('count(*) as total'))
            ->groupBy('pemahaman_visi')
            ->pluck('total', 'pemahaman_visi')->all();

        $labels = ['Sangat paham', 'Paham', 'Kurang paham', 'Tidak paham'];
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
