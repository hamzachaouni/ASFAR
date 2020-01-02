<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Palmare;
use App\Http\Resources\PalmareResource;

class PalmareController extends Controller
{
    public function index()
    {
        $palmares = Palmare::all();
        return PalmareResource::collection($palmares);
    }
}
