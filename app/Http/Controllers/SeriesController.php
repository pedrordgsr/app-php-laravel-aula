<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    
    public function listarSeries() {
        $series = [
                'Lost',
                'Greys Anatomy',
                'Agents of SHIELD',
                'Breaking Bad',
                'Eu a Patroa e as Crianças'
            ];
        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";
        
        return $html;
    }

}
