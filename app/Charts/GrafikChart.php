<?php

namespace App\Charts;

use App\Models\product;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GrafikChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $products = Product::all();
        return $this->chart->lineChart()
        ->setTitle('Sablon.')
        ->setSubtitle('Data Product 1 Tahun.')
        ->addData('stok', $products->pluck('stok')->toArray())
        ->setXAxis($products->pluck('kategori')->toArray());
    }
}
