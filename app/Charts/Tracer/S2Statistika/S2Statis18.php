<?php

namespace App\Charts\Tracer\S2Statistika;

use App\Models\Tracerr;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class S2Statis18
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracerr::select('kompetensi_kerjasama', \DB::raw('count(*) as total'))
            ->where('lulus_dari_program_studi', 'S2 Statistika') // Menambahkan filter untuk program_studi
            ->groupBy('kompetensi_kerjasama')
            ->pluck('total', 'kompetensi_kerjasama')->all();

            $labels = ['Sangat Baik', 'Baik','Cukup', 'Kurang'];
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

        // Mengembalikan objek DonutChart dengan data yang sudah difilter
        return $this->chart->donutChart()
            ->addData(array_values($counts))
            ->setLabels(array_keys($counts));
    }

}