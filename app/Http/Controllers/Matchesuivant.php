<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matchsuivant;
use App\Http\Resources\MatchsuivantResource;

class Matchesuivant extends Controller
{

    public function show($matchesuivant)
    {
        return new MatchsuivantResource(Matchsuivant::where('id', $matchesuivant)->get());
    }
}
