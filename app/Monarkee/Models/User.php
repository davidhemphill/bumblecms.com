<?php namespace Monarkee\Models;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Monarkee\Bumble\Fields\BooleanField;
use Monarkee\Bumble\Fields\PasswordField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Traits\BumbleUserTrait;
use Monarkee\Bumble\Models\BumbleModel;
use Monarkee\Bumble\Models\User as BumbleUser;

class User extends BumbleModel implements UserInterface, RemindableInterface
{
    use UserTrait;
    use BumbleUserTrait;
    use RemindableTrait;

    public $showInTopNav = true;

    /**
     * @var array
     */
    public $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
    ];

    /**
     *
     */
    public function setFields()
    {
        return new Fieldset([
            'basics' => [
                new TextField('username'),
                new TextField('email'),
                new PasswordField('password'),
            ],
            'extra' => [
                new TextField('prefix'),
                new TextField('first_name'),
                new TextField('middle_name'),
                new TextField('last_name'),
                new BooleanField('active'),
            ],
        ]);
    }
}
