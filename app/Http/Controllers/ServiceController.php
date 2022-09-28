<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function bookPublishing()
    {
        return view('frontend.services.book-publishing');
    }

    public function bookEditing()
    {
        return view('frontend.services.book-editing');
    }

    public function bookMarketing()
    {
        return view('frontend.services.book-marketing');
    }

    public function bookGhostWriting()
    {
        return view('frontend.services.book-ghostwriting');
    }

}
