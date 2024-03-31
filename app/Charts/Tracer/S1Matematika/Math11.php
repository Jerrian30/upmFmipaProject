<?php

namespace App\Charts\Tracer\S1Matematika;

use App\Models\Tracerr;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class Math11
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracerr::select('pertimbangan_memilih_pekerjaan', \DB::raw('count(*) as total'))
            ->where('lulus_dari_program_studi', 'S1 Matematika')
            ->whereNotNull('pertimbangan_memilih_pekerjaan') // Mengabaikan nilai null
            ->where('pertimbangan_memilih_pekerjaan', '<>', '-') // Mengabaikan nilai '-'
            ->groupBy('pertimbangan_memilih_pekerjaan')
            ->pluck('total', 'pertimbangan_memilih_pekerjaan')->all();
    
        $definedLabels = ['Mendapatkan ketrampilan baru', 'Mendapatkan ilmu pengetahuan baru','Mendapatkan pengalaman baru', 'Sesuai dengan bidang ilmu', 'Gaji yang memadai'];
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