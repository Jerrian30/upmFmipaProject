<?php

namespace App\Charts\Tracer\D3Kebidanan;

use App\Models\Tracer;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class Bidan5
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracer::select('respon_perusahaan_terhadap_lamaran', \DB::raw('count(*) as total'))
            ->where('program_studi', 'D3 Kebidanan') // Menambahkan filter untuk program_studi
            ->groupBy('respon_perusahaan_terhadap_lamaran')
            ->pluck('total', 'respon_perusahaan_terhadap_lamaran')->all();

        $labels = ['lebih dari 12 bulan', '3-12 bulan', 'Kurang dari 3 bulan'];
        $counts = array_fill_keys($labels, 0);

        // Hitung total keseluruhan responden
        $totalResponden = array_sum($data);

        // Mengisi $counts dengan persentase data yang ada
        foreach ($data as $key => $value) {
            if (array_key_exists($key, $counts)) {
                // Hitung persentase dan simpan ke dalam $counts
                $counts[$key] = $totalResponden > 0 ? round(($value / $totalResponden) * 100, 2) : 0;
            }
        }

        // Mengembalikan objek DonutChart dengan data yang sudah difilter
        return $this->chart->donutChart()
            ->addData(array_values($counts))
            ->setLabels(array_keys($counts));
    }

}