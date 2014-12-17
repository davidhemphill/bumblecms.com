<?php namespace Monarkee\Models;

use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\BumbleModel;

class Setting extends BumbleModel
{
    public $showInTopNav = true;

    public $description = 'Place your site settings here and use them throughout your app';

    public $rules = [
        'key' => 'required|unique:settings',
        'value' => 'required',
    ];

    public function setFields()
    {
        return new Fieldset([
            new TextField('key'),
            new TextField('value'),
            new TextareaField('description'),
        ]);
    }
}
