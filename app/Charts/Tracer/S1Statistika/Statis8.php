<?php

namespace App\Charts\Tracer\S1Matematika;

use App\Models\Tracerr;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class Math8
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracerr::select('pendapatan_rata_rata_per_bulan', \DB::raw('count(*) as total'))
            ->where('lulus_dari_program_studi', 'S1 Matematika') // Menambahkan filter untuk program_studi
            ->groupBy('pendapatan_rata_rata_per_bulan')
            ->pluck('total', 'pendapatan_rata_rata_per_bulan')->all();

        $labels = ['< Rp. 1.000.000', '> Rp. 1.000.000 -  ≤ Rp. 3.000.000', '> Rp. 3.000.000 -  ≤ Rp. 5.000.000','> Rp. 5.000.000 -  ≤ Rp. 7.500.000','> Rp. 7.500.000 -  ≤ Rp. 10.000.000', 'Other'];
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