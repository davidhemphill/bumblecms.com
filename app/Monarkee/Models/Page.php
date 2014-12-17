<?php namespace Monarkee\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Monarkee\Bumble\Fields\BooleanField;
use Monarkee\Bumble\Fields\DateTimeField;
use Monarkee\Bumble\Fields\HasOneField;
use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;

class Page extends BaseModel
{
    use SoftDeletingTrait;

    public $showInTopNav = true;

    public $description = 'Pages for the different sections of the website';

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
                new HasOneField('parent', [
                    // 'title_column' => 'Parent ID',
                    // 'method' => 'parent',
                    // 'default' => 0,
                    // 'default_label' => '--',
                    // 'related_title' => 'title',
                ]),
                new TextField('title'),
                new SlugField('slug', [
                    'set_from' => 'title'
                ]),
                new BooleanField('active', ['description' => 'Hello World']),
                new TextareaField('content', [
                    'description' => 'Your entry content goes here'
                ]),
            ],
            'meta' => [
                new TextField('sort'),
            ],
        ]);
    }

    public function parent()
    {
        return $this->hasOne('Monarkee\Models\Page');
    }

    public function children()
    {
        return $this->hasMany('Monarkee\Models\Page');
    }

    public function scopeDocs($query)
    {
        return $query->whereParent(9);
    }
}
