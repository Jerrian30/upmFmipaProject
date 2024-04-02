<?php

namespace App\Charts\Tracer\S1Biologi;

use App\Models\Tracerr;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class Bio6
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    
    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracerr::select('bidang_pekerjaan', \DB::raw('count(*) as total'))
            ->where('lulus_dari_program_studi', 'S1 Biologi')
            ->whereNotNull('bidang_pekerjaan') // Mengabaikan nilai null
            ->where('bidang_pekerjaan', '<>', '-') // Mengabaikan nilai '-'
            ->groupBy('bidang_pekerjaan')
            ->pluck('total', 'bidang_pekerjaan')->all();
    
        $definedLabels =  ['Pemerintah Daerah', 'Pemerintah Pusat', 'BUMN', 'Swasta di bidang Jasa', 'Swasta di bidang Manufaktur', 'Swasta di bidang Keuangan','Swasta di bidang Pendidikan', 'Wiraswasta'];
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

