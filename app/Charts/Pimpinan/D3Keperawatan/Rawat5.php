<?php

namespace App\Charts\Pimpinan\D3Keperawatan;

use App\Models\Pimpinan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Rawat5
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Pimpinan::where('pimpinan_dinilai', 'Wakil Dekan Bidang Sumber Daya')
            ->selectRaw('COUNT(*) as count, menegakkan_kebijakan')
            ->groupBy('menegakkan_kebijakan')
            ->pluck('count', 'menegakkan_kebijakan');

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
