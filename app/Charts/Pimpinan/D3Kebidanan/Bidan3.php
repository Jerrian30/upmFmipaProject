<?php

namespace App\Charts\Pimpinan\D3Kebidanan;

use App\Models\Pimpinan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Bidan3
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Pimpinan::where('program_studi', 'D3 Kebidanan')
            ->selectRaw('COUNT(*) as count, rencana_kerja_jelas')
            ->groupBy('rencana_kerja_jelas')
            ->pluck('count', 'rencana_kerja_jelas');

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