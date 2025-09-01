<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

//Rota simples
Route::get('/ola', function(){
    return "Olá Mundo.";
});

Route::get('soma', function(){
    $a = 100;
    $b = 200;
    $soma = $a + $b;
    return "A soma é {$soma}";
});

//Rota com passagem de parâmetros
Route::get('/somaa/{v1}/{v2}', function($v1, $v2){
    $soma = $v1 + $v2;
    return "A soma é {$soma}";
});

/**
 * Colocar interrogação no parâmetro (ex. param2),
 * diz que vai ser opcional
 */
Route::get('/adicionar-produto/{param1}/{param2?}', 
function($p1, $p2 = null) {
    $texto  = "O parâmetro 1 da URL é {$p1}<br>";
    if ($p2 != null)
        $texto .= "O parâmetro 2 da URL é {$p2}<br>";
    return $texto;
});


Route::get('/series2', function () {
    $series = [
                'Lost',
                'Greys Anatomy',
                'Agents of SHIELD',
            ];
    $html = "<ul>";
    foreach ($series as $serie) {
        $html .= "<li>$serie</li>";
    }
    $html .= "</ul>";
    
    return $html;
});

Route::get('/series', [SeriesController::class, 'listarSeries']);
