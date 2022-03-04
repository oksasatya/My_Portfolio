<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function donwload()

    {
        $file = public_path() . "/images/test.jpg";

        $headers = ['Content-Type: image/jpeg'];

        if (file_exists($file)) {
            return Response::download($file, 'plugin.jpg', $headers);
        } else {
            echo ('File not found.');
        }
    }
}
