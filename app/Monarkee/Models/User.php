<?php namespace Monarkee\Models;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Monarkee\Bumble\Traits\BumbleUserTrait;
use Monarkee\Bumble\Models\BumbleModel;

class User extends BumbleModel implements UserInterface, RemindableInterface
{
    use UserTrait;
    use BumbleUserTrait;
    use RemindableTrait;

    public function bumble()
    {
        return $this->hasAdmin('Monarkee\ModelAdmin\UserAdmin');
    }
}
