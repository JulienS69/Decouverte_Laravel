<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models\Visiteurs;

class VisiteursController extends Controller
{
    public function visiteurs()
    {
        $visiteur = new Visiteurs();
        $visiteurs = $visiteur->getVisiteurs();
        return view ('vueVisiteurs',compact('visiteurs'));
    }
}
