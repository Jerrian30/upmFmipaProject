<?php

namespace App\Charts\Pimpinan\D3LabSains;

use App\Models\Pimpinan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LabSains9
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Pimpinan::where('program_studi',  'D3 Lab Sains')
            ->selectRaw('COUNT(*) as count, terbuka_kritik_saran')
            ->groupBy('terbuka_kritik_saran')
            ->pluck('count', 'terbuka_kritik_saran');

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
