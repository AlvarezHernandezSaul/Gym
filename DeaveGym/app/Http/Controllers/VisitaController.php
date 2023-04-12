<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Visita;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class VisitaController extends Controller
{
    public function index()
    {
        // Obtener el rango de fechas que se mostrarán en la gráfica (desde el primer día de la semana hasta el último)
        $fecha_inicio = Carbon::now()->startOfWeek()->toDateString(); // primer día de la semana
        $fecha_fin = Carbon::now()->endOfWeek()->toDateString(); // último día de la semana
        
        // Obtener las visitas diarias para cada día de la semana dentro del rango de fechas
        $visitas = DB::table('visitas')
        ->select(DB::raw('DATE_FORMAT(fecha, "%Y-%m-%d") AS dia, SUM(visitas_diarias) AS total'))
        ->whereBetween('fecha', [$fecha_inicio, $fecha_fin])
        ->groupBy('dia')
        ->orderBy('dia')
        ->get();
    
        // Crear un array con los datos de visitas para cada día de la semana
        $data = array_fill(0, 7, 0);
    
        foreach ($visitas as $visita) {
            $dia_semana = Carbon::createFromFormat('Y-m-d', $visita->dia)->dayOfWeekIso; // Obtener el día de la semana (1-7)
            $data[$dia_semana ] = $visita->total;
        }
    
        return view('grafic', compact('data'));
    }

    
}