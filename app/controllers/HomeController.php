<?php

use Monarkee\Models\Banner;
use Monarkee\Models\Contact;
use Monarkee\Models\Entry;
use Monarkee\Models\Homepage;
use Monarkee\Models\Page;

class HomeController extends Controller
{

    public function index()
    {
        $banners = Banner::all();
        $homepage = Homepage::find(1);

        return View::make('home.index')->with(compact('banners', 'homepage'));
    }

    public function store()
    {
        $input = Input::all();

        $rules = [
            'email' => 'required|unique:contacts'
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails())
        {
            return Response::json([
                'status' => 'failed',
                'errors' => $validator->messages()
            ]);
        }

        Contact::create(Input::all());

        return Response::json([
            'status' => 'success',
            'message' => 'Thank you! We will let you know on launch day.',
        ]);
    }
}
