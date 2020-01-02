<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nouvelle;
use App\Http\Resources\NouvelleResource;
use Illuminate\Support\Facades\DB;

class NouvelleController extends Controller
{
    public function index()
    {
        $nouvelles = Nouvelle::orderBy('created_at', 'desc')->paginate(15);
        return NouvelleResource::collection($nouvelles);
    }

    public function slider()
    {
        $nouvelles = Nouvelle::orderBy('created_at', 'desc')->paginate(4);
        return NouvelleResource::collection($nouvelles);
    }

    public function slideractive()
    {
        $nouvelles = Nouvelle::orderBy('created_at', 'desc')->paginate(1);
        return NouvelleResource::collection($nouvelles);
    }

    public function indexAccuiel()
    {
        $nouvelles = Nouvelle::orderBy('created_at', 'desc')->paginate(8);
        return NouvelleResource::collection($nouvelles);
    }

    public function show($nouvelle)
    {
        return new NouvelleResource(Nouvelle::where('slug', $nouvelle)->get());
    }
}
