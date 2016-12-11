<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use App\Blog;

class BlogController extends Controller
{

    public function show($id)
    {
        $blog = Blog::find($id);
        $footer = Footer::find(1);

        return view('about-blog', compact('footer', 'blog'));
    }

}
