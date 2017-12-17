<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('pages.' . $page->view_name, compact('page'));
    }
}
