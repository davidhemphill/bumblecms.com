<?php namespace Monarkee\Models;

use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\BumbleModel;

class Comment extends BumbleModel
{
    /**
     * @return mixed
     */
    public function setFields()
    {
        return new Fieldset([
            new TextareaField('content'),
        ]);
    }

    public function entry()
    {
        return $this->belongsTo('Monarkee\Models\Entry');
    }

}
