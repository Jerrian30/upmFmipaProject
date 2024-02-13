<?php

namespace App\Charts\Dosen\All;

use App\Models\Dosen;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PL8
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $dataPercentages = $this->calculatePercentages('kesempatan_pengembangan_karir');
        
        return $this->chart->donutChart()
            ->addData(array_values($dataPercentages))
            ->setLabels(['1', '2', '3', '4']);
    }

    protected function calculatePercentages($columnName): array
    {
        $dataTotal = PenggunaLulusan::selectRaw("COUNT(*) as count, $columnName")
            ->groupBy($columnName)
            ->pluck('count', $columnName);

        $dataValues = [
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
        ];

        foreach ($dataTotal as $nilai => $count) {
            if (isset($dataValues[$nilai])) {
                $dataValues[$nilai] = $count;
            }
        }

        $totalResponden = array_sum($dataValues);

        return array_map(function ($value) use ($totalResponden) {
            return ($totalResponden > 0) ? round(($value / $totalResponden) * 100, 2) : 0;
        }, $dataValues);
    }

    // Asumsikan Anda memerlukan method ini untuk tujuan tertentu
    public function getDetailedPercentages()
    {
        
        $percentages = $this->calculatePercentages('kesempatan_pengembangan_karir');
        return [
            'persen1' => $percentages[1] ?? 0,
            'persen2' => $percentages[2] ?? 0,
            'persen3' => $percentages[3] ?? 0,
            'persen4' => $percentages[4] ?? 0,
        ];
    }
}
