<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function donwload($file_name)

    {
        $file_name = public_path() . '/storage/donwload/my-cv.pdf';
        $file = Storage::disk('public')->get($file_name);

        return (new Response($file, 200))
            ->header('content-type', 'application/pdf');
    }
}
