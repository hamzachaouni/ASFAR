<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Http\Resources\ImageResource;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
	public function indexAccuiel()
    {
        $images = Image::orderBy('created_at', 'desc')->paginate(3);
        return ImageResource::collection($images);
    }

    public function show($image)
    {
        return new ImageResource(Image::where('slug', $image)->get());
    }
}
