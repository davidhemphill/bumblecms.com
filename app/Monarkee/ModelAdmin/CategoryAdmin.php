<?php namespace Monarkee\ModelAdmin;

use Monarkee\Bumble\Models\ModelAdmin;
use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;

class CategoryAdmin extends ModelAdmin
{
    // public $showInTopNav = true;

    public $rules = [
        'title' => 'required',
    ];

    /**
     * @return mixed
     */
    public function setFields()
    {
        return new Fieldset([
            new TextField('title'),
            new SlugField('slug', [
                'set_from' => 'title'
            ]),
        ]);
    }
}