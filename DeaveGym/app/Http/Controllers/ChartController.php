<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
class ChartController extends Controller
{
    public function index()
    {
        $chart = Charts::create('bar', 'chartjs')
            ->title('Ventas por mes')
            ->elementLabel('Ventas')
            ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'])
            ->values([100, 200, 150, 300, 400, 250]);

        return view('chart', compact('chart'));
    }
}