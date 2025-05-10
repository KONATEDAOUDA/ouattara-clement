<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    // app/Http/Controllers/ImageUploadController.php
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        // Stockage direct dans le dossier public accessible
        $filename = 'img_'.time().'_'.bin2hex(random_bytes(4)).'.'.$request->image->extension();
        $path = $request->file('image')->move(public_path('upload_images'), $filename);

        return response()->json([
            'url' => '/upload_images/' . $filename,
            'path' => $path->getPathname()
        ]);
    }
}

