<?php

namespace App\Charts\Laypro\S1Geofisika;

use App\Models\Laypro;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Geo8
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Laypro::where('program_studi', 'S1 Geofisika')
            ->selectRaw('COUNT(*) as count, penetapan_dosen')
            ->groupBy('penetapan_dosen')
            ->pluck('count', 'penetapan_dosen');

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
