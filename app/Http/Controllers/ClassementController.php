<?php

namespace App\Http\Controllers;

use App\Classement;
use App\Http\Resources\ClassementResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClassementController extends Controller
{
    public function index()
    {
        $classements = Classement::orderBy('id', 'desc')->get();
        return ClassementResource::collection($classements);
    }
}
