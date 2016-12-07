<?php

namespace App\Http\Controllers;

use App\Footer;
use App\Blog;
use App\Contact;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::find(1);
        $blogs = Blog::latest()->get();
        return view('landing', compact('footer', 'blogs'));
    }
    /**
     * Display a contacts
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        $footer = Footer::find(1);
        $contact = Contact::find(1);
        $google_key = env('GOOGLE_MAPS_KEY');
        return view('contact', compact('footer', 'contact', 'google_key'));
    }
    /**
     * Display a categories-article
     *
     * @return \Illuminate\Http\Response
     */
    public function categoriesArticle()
    {
        return view('categories-article');
    }
    /**
     * Display a categories
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $footer = Footer::find(1);
        return view('categories', compact('footer', 'contact'));
    }

}
