<?php namespace Monarkee\Models;

use Monarkee\Bumble\Models\BumbleModel;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Category extends BumbleModel
{
    use SoftDeletingTrait;

    public function bumble()
    {
        return $this->hasAdmin('Monarkee\ModelAdmin\CategoryAdmin');
    }
}
