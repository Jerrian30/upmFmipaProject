<?php

namespace App\Charts\Laypro\S1Geofisika;

use App\Models\Laypro;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Geo5
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Laypro::where('program_studi', 'S1 Geofisika')
            ->selectRaw('COUNT(*) as count, materi_kuliah_jelas')
            ->groupBy('materi_kuliah_jelas')
            ->pluck('count', 'materi_kuliah_jelas');

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
