<?php

namespace App\Charts\Mahasiswa\S1Farmasi;

use App\Models\Mahasiswa;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class S1Farm15
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Mahasiswa::where('program_studi', 'S1 Farmasi')
            ->selectRaw('COUNT(*) as count, penanganan_keluhan_mahasiswa')
            ->groupBy('penanganan_keluhan_mahasiswa')
            ->pluck('count', 'penanganan_keluhan_mahasiswa');

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
