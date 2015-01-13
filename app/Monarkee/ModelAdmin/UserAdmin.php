<?php namespace Monarkee\ModelAdmin;

use Monarkee\Bumble\Fields\BooleanField;
use Monarkee\Bumble\Fields\DateTimeField;
use Monarkee\Bumble\Fields\HasOneField;
use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fields\PasswordField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\ModelAdmin;

class UserAdmin extends ModelAdmin
{
    public $showInTopNav = true;

    public $editingTitle = 'username';

    public $description = 'All of the users in the system';

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