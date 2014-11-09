<?php namespace Monarkee\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Monarkee\Bumble\Fields\BooleanField;
use Monarkee\Bumble\Fields\DateTimeField;
use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\BumbleModel;

class Page extends BumbleModel
{
    use SoftDeletingTrait;

    public $showInTopNav = true;

    protected $description = 'Pages for the different sections of the website';

    public $rules = [
        'title' => 'required',
//        'slug' => 'required',
        'content' => 'required',
        'active' =>  'required',
    ];

    public function setFields()
    {
        return new Fieldset([
            'content' => [
                new TextField('title'),
                new SlugField('slug', [
                    'set_from' => 'title'
                ]),
                new BooleanField('active', ['description' => 'Hello World']),
                new TextareaField('content', [
                    'widget' => 'WYSIWYGField',
                    'description' => 'Your entry content goes here'
                ]),
            ],
        ]);
    }
}
