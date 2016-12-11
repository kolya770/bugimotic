<?php

namespace App\Http\Controllers\Api;

use App\Images;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Validator;
use Illuminate\Support\Facades\Input as Input;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadImage()
    {
        $file = Request::file('file');
        $destinationPath = public_path() . '/uploads/';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath, $filename);
        echo url('/') . '/uploads/' . $filename;
    }


//    public function dropzoneUploadImages()
//    {
//        $path = public_path().'/uploads/';
//        $files = Images::create(Input::file('image'));
//
//        foreach($files as $file) {
//            $fileName = $file->getClientOriginalName();
//            $file->move($path, $fileName);
//        }
//    }
}
