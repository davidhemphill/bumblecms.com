<?php

use Monarkee\Models\Page;

class PageController extends Controller
{

    public function index()
    {
        $page = Page::whereSlug('doc-index')->first();

        return View::make('docs.index')->with(compact('page'));
    }

    public function show($slug)
    {
        $page = Page::whereSlug($slug)->first();

        return View::make('docs.show')->with(compact('page'));
    }
}
