<?php

namespace App\Charts\Akademik\S2Statistika;

use App\Models\Akademik;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class S2Statis7
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Akademik::where('program_studi', 'S2 Statistika')
            ->selectRaw('COUNT(*) as count, staff_terbuka_kritik')
            ->groupBy('staff_terbuka_kritik')
            ->pluck('count', 'staff_terbuka_kritik');

        $dataValues = [1 => 0, 2 => 0, 3 => 0, 4 => 0];

        foreach ($dataD3Farmasi as $nilai => $count) {
            $dataValues[$nilai] = $count;
        }

        $totalResponden = array_sum($dataValues);

        return array_map(function ($value) use ($totalResponden) {
            return ($totalResponden > 0) ? round(($value / $totalResponden) * 100, 2) : 0;
        }, $dataValues);
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $dataPercentages = $this->calculatePercentages();
        
        return $this->chart->donutChart()
            ->addData(array_values($dataPercentages))
            ->setLabels(['1', '2', '3', '4']);
    }

}