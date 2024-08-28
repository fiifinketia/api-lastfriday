<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class CloudinaryController extends Controller
{
    public function show($imageName)
    {
        try {
            $image = Cloudinary::admin()->asset($imageName);
            return $image;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode() ?: 404);
        }
    }
}
