<?php

namespace app\models;

class UserResume extends AppModel
{
    public $attributes = [
        'name' => '',
        'surname' => '',
        'sex' => '',
        'education' => '',
        'resume_description' => '',
        'user_id' => '',
        'occupation_id' => '',
        'photo' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
            ['surname'],
            ['sex'],
            ['education'],
            ['resume_description'],
            ['user_id'],
            ['occupation_id'],
        ],    
    ];
}