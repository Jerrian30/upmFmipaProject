<?php

namespace App\Charts\Tracer\D3LabSains;

use App\Models\Tracerr;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class LabSains5
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracerr::select('waktu_tunggu_pekerjaan', \DB::raw('count(*) as total'))
            ->where('lulus_dari_program_studi', 'D3 Lab Sains')
            ->whereNotNull('waktu_tunggu_pekerjaan') // Mengabaikan nilai null
            ->where('waktu_tunggu_pekerjaan', '<>', '-') // Mengabaikan nilai '-'
            ->groupBy('waktu_tunggu_pekerjaan')
            ->pluck('total', 'waktu_tunggu_pekerjaan')->all();
    
        $definedLabels = ['Kurang dari 6 bulan setelah lulus', '6-18 bulan setelah lulus', 'Belum bekerja'];
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