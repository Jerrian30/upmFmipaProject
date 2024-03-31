<?php

namespace App\Charts\Tracer\S1Statistika;

use App\Models\Tracerr;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class Statis8
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracerr::select('pendapatan_rata_rata_per_bulan', \DB::raw('count(*) as total'))
            ->where('lulus_dari_program_studi', 'S1 Statistika')
            ->whereNotNull('pendapatan_rata_rata_per_bulan') // Mengabaikan nilai null
            ->where('pendapatan_rata_rata_per_bulan', '<>', '-') // Mengabaikan nilai '-'
            ->groupBy('pendapatan_rata_rata_per_bulan')
            ->pluck('total', 'pendapatan_rata_rata_per_bulan')->all();
    
        $definedLabels = ['< Rp. 1.000.000', '> Rp. 1.000.000 - ≤ Rp. 3.000.000', '> Rp. 3.000.000 - ≤ Rp. 5.000.000','> Rp. 5.000.000 - ≤ Rp. 7.500.000','> Rp. 7.500.000 - ≤ Rp. 10.000.000'];
        // 'Other' dimasukkan ke dalam labels untuk menangani nilai yang tidak terdefinisi selain null dan '-'
        $labels = array_merge($definedLabels, ['Other']);
    
        $counts = array_fill_keys($labels, 0);
    
        // Hitung total keseluruhan responden, termasuk mengabaikan nilai null dan '-'
        $totalResponden = array_sum($data);
    
        foreach ($data as $key => $value) {
            if (in_array($key, $definedLabels)) {
                $counts[$key] = $totalResponden > 0 ? round(($value / $totalResponden) * 100, 2) : 0;
            } else {
                // Hanya nilai non-null dan non-'-' yang 'lainnya' akan ditambahkan ke 'Other'
                $counts['Other'] += $totalResponden > 0 ? round(($value / $totalResponden) * 100, 2) : 0;
            }
        }
    
        return $this->chart->donutChart()
            ->addData(array_values($counts))
            ->setLabels(array_keys($counts));
    }
    
}
