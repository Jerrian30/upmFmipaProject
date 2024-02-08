<?php

namespace App\Charts\PenggunaLulusan\D3Keperawatan;

use App\Models\PenggunaLulusan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Rawat4
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        // Ambil data dari database berdasarkan program_studi "D3 Farmasi"
        $dataD3Farmasi = PenggunaLulusan::where('program_studi', 'D3 Keperawatan')
            ->selectRaw('COUNT(*) as count, kemampuan_teknologi_informasi') // Menghitung jumlah responden untuk setiap nilai
            ->groupBy('kemampuan_teknologi_informasi')
            ->pluck('count', 'kemampuan_teknologi_informasi');

        // Inisialisasi data dengan nilai default 0 untuk setiap nilai
        $dataValues = [
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
        ];

        // Mengisi data yang sesuai dengan hasil query
        foreach ($dataD3Farmasi as $nilai => $count) {
            $dataValues[$nilai] = $count;
        }

        // Menghitung total responden
        $totalResponden = array_sum($dataValues);

        // Menghitung persentase untuk setiap nilai
        $dataPercentages = array_map(function ($value) use ($totalResponden) {
            return ($totalResponden > 0) ? round(($value / $totalResponden) * 100, 2) : 0;
        }, $dataValues);

        return $this->chart->donutChart()
            ->addData(array_values($dataPercentages))
            ->setLabels(['1', '2', '3', '4']);
    }
}
