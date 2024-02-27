<?php

namespace App\Charts\Lab\S1Fisika;

use App\Models\Lab;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Fisika6
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Lab::where('program_studi', 'S1 Fisika')
            ->selectRaw('COUNT(*) as count, kesesuaian_perjanjian')
            ->groupBy('kesesuaian_perjanjian')
            ->pluck('count', 'kesesuaian_perjanjian');

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
