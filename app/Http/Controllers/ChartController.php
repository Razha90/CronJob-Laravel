<?php

namespace App\Http\Controllers;

use ConsoleTVs\Charts\Facades\Charts;
// use Console
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function showChart()
    {
        // Data untuk chart
        $chartData = [10, 20, 30, 40, 50];

        // Membuat objek chart
        $chart = Charts::create('bar', 'highcharts')
            ->title('Contoh Chart')
            ->labels(['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'])
            ->values($chartData)
            ->dimensions(1000, 500)
            ->responsive(true);

        // Merender view dan melewatkan chart sebagai data
        return view('chart.show', compact('chart'));
    }
}
