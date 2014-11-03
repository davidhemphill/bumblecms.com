<?php namespace Monarkee\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Monarkee\Bumble\Fields\BooleanField;
use Monarkee\Bumble\Fields\DateField;
use Monarkee\Bumble\Fields\PasswordField;
use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fields\TimeField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\BumbleModel;

class Tag extends BumbleModel
{
    use SoftDeletingTrait;

    protected $description = 'Tags are ways to organize things';

    public $rules = [
        'slug' => 'required|unique:tags',
    ];

    public function setFields()
    {
        return new Fieldset([
            new SlugField('slug'),
        ]);
    }
}
