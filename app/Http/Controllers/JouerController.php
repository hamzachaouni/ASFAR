<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jouer;
use App\Http\Resources\JouerResource;

class JouerController extends Controller
{

    public function index($center)
    {
        return new JouerResource(Jouer::where('center', $center)->get());
    }

    public function show($slug)
    {
        return new JouerResource(Jouer::where('slug', $slug)->get());
    }
}
