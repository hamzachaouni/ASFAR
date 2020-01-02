<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Http\Resources\ProduitResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
	public function index()
    {
        $produits = Produit::All();
        return ProduitResource::collection($produits);
    }

    public function indexAccuiel()
    {
        $produits = Produit::orderBy('created_at', 'desc')->paginate(4);
        return ProduitResource::collection($produits);
    }
}
