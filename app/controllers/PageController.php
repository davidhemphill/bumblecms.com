<?php

use Monarkee\Models\Page;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as Adapter;

class PageController extends Controller
{

    public function index()
    {
        $page = Page::active()->whereSlug('doc-index')->firstOrFail();

        return View::make('docs.index')->with(compact('page'));
    }

    public function show($slug)
    {
        // Fetch the doc page
        $filesystem = new Filesystem(new Adapter(Config::get('site.docs_folder')));

        if ($page = $filesystem->read($slug.'.md'))
        {
            return View::make('docs.show')->with(compact('page'));
        }
        // $page = Page::active()->whereSlug($slug)->first();
    }
}
