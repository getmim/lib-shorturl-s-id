<?php

return [
    '__name' => 'lib-shorturl-s-id',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-shorturl-s-id.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-shorturl-s-id' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-curl' => NULL
            ],
            [
                'lib-shorturl' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibShorturlSId\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-shorturl-s-id/library'
            ]
        ],
        'files' => []
    ],
    'libShortURL' => [
        'shorteners' => [
            's.id' => 'LibShorturlSId\\Library\\Shortener'
        ]
    ]
];