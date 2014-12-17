<?php namespace Monarkee\Models;

use Monarkee\Bumble\Models\BumbleModel;

abstract class BaseModel extends BumbleModel
{
    public function scopeActive($query)
    {
        return $query->where('active', '=', 1);
    }
}
