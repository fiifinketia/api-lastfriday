<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class CloudinaryController extends Controller
{
    public function show($imageName)
    {
        try {
            $imageUrl = Cloudinary::image($imageName)->toUrl();
            return response()->json(['url' => $imageUrl]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Image not found or Cloudinary error'], 500);
        }
    }
}
