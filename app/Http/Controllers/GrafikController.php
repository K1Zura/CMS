<?php

namespace App\Http\Controllers;

use App\Charts\GrafikChart;
use App\Models\product;
use Illuminate\Http\Request;

class GrafikController extends Controller
{
    Public function index(GrafikChart $chart)
    {
        return view('admin/grafik', ['chart' => $chart->build()]);
    }
}
