<?php

namespace App\Charts\Tracer\All;

use App\Models\Tracer;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class PL4
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $data = Tracer::select('alasan_melanjutkan_pendidikan', \DB::raw('count(*) as total'))
            ->groupBy('alasan_melanjutkan_pendidikan')
            ->pluck('total', 'alasan_melanjutkan_pendidikan')->all();
    
        $labels = ['Kurang yakin kalo hanya di bidang ini saja', 'Sebagai syarat dalam pekerjaan (syarat pekerjaan)', 'Ada kesempatan', 'Merasa ilmu yang dimiliki masih kurang', 'Perlu untuk bekerja', 'Mengisi kekosongan menganggur'];
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
    
        // Agar label menampilkan persentase, Anda bisa memodifikasi $labels disini
        // atau saat menampilkan di view/front-end, tergantung pada kebutuhan Anda.
    
        return $this->chart->donutChart()
            ->addData(array_values($counts))
            ->setLabels(array_keys($counts));
    }
}