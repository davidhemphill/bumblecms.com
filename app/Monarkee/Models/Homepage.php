<?php namespace Monarkee\Models;

use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\BumbleModel;

class Homepage extends BumbleModel
{
    public $rules = [
        'title' => 'required',
    ];

    public function setFields()
    {
        return new Fieldset([
            'title' => [
                new TextField('title')
            ],
            'first_feature' => [
                new TextField('feature_1_title', ['show_in_listing' => false]),
                new TextareaField('feature_1_content', [
                    'show_in_listing' => false,
                    'widget' => 'WYSIWYGField'
                ]),
            ],
            'second_feature' => [
                new TextField('feature_2_title', ['show_in_listing' => false]),
                new TextareaField('feature_2_content', [
                    'show_in_listing' => false,
                    'widget' => 'WYSIWYGField'
                ]),
            ],
            'third_feature' => [
                new TextField('feature_3_title', ['show_in_listing' => false]),
                new TextareaField('feature_3_content', [
                    'show_in_listing' => false,
                    'widget' => 'WYSIWYGField'
                ]),
            ],
            'fourth_feature' => [
                new TextField('feature_4_title', ['show_in_listing' => false]),
                new TextareaField('feature_4_content', [
                    'show_in_listing' => false,
                    'widget' => 'WYSIWYGField'
                ]),
            ],
        ]);
    }
}
