<?php

namespace App\Http\Controllers;

use App\Histoire;
use App\Http\Resources\HistoireResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HistoireController extends Controller
{
    public function index($type)
    {
        return new HistoireResource(Histoire::where('type', $type)->get());
    }

    public function show($slug)
    {
        return new HistoireResource(Histoire::where('slug', $slug)->get());
    }
}
