<?php

namespace App\Charts\Tracer\S2Statistika;

use App\Models\Tracerr;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class S2Statis3
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        // Menghitung total IPK dan jumlah responden
        $totalIpkDanJumlahResponden = Tracerr::where('lulus_dari_program_studi', 'S2 Statistika')
            ->selectRaw('SUM(ipk) as total_ipk, COUNT(*) as jumlah_responden')
            ->first();

        // Menghitung rata-rata IPK
        $rataRataIpk = $totalIpkDanJumlahResponden->jumlah_responden > 0
            ? round($totalIpkDanJumlahResponden->total_ipk / $totalIpkDanJumlahResponden->jumlah_responden, 2)
            : 0;

        // Membuat label dan data untuk chart
        $labels = ['Rata-Rata IPK'];
        $data = [$rataRataIpk];

        // Mengembalikan objek DonutChart dengan rata-rata IPK
        return $this->chart->donutChart()
            ->addData($data)
            ->setLabels($labels);
    }
}
