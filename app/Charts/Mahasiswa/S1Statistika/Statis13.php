<?php

namespace App\Charts\Laypro\S1Statistika;

use App\Models\Laypro;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Statis13
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    protected function calculatePercentages()
    {
        $dataD3Farmasi = Laypro::where('program_studi', 'S1 Statistika')
            ->selectRaw('COUNT(*) as count, fasilitas_organisasi_kemahasiswaan')
            ->groupBy('fasilitas_organisasi_kemahasiswaan')
            ->pluck('count', 'fasilitas_organisasi_kemahasiswaan');

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
