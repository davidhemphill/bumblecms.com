<?php namespace Monarkee\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Page extends BaseModel
{
    use SoftDeletingTrait;

    public function bumble()
    {
        return $this->hasAdmin('Monarkee\ModelAdmin\PageAdmin');
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
