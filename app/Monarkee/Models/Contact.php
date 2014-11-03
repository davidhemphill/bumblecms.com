<?php namespace Monarkee\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\BumbleModel;

class Contact extends BumbleModel
{
    use SoftDeletingTrait;

    protected $fillable = ['email'];

    public $editingTitle = 'email';

    /**
     * @return mixed
     */
    public function setFields()
    {
        return new Fieldset([
            new TextField('email'),
        ]);
    }

}
