<?php

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Moox Configuration
|--------------------------------------------------------------------------
|
| This configuration file uses translatable strings. If you want to
| translate the strings, you can do so in the language files
| published from moox_core. Example:
|
| 'trans//core::core.all',
| loads from common.php
| outputs 'All'
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | The following configuration is done per Filament resource.
    |
    */

    'resources' => [
        'login-link' => [

            /*
            |--------------------------------------------------------------------------
            | Title
            |--------------------------------------------------------------------------
            |
            | The translatable title of the Resource in singular and plural.
            |
            */

            'single' => 'trans//core::login-link.login-link',
            'plural' => 'trans//core::login-link.login-links',

            /*
            |--------------------------------------------------------------------------
            | Tabs
            |--------------------------------------------------------------------------
            |
            | Define the tabs for the Resource table. They are optional, but
            | pretty awesome to filter the table by certain values.
            | You may simply do a 'tabs' => [], to disable them.
            |
            */

            'tabs' => [
                'all' => [
                    'label' => 'trans//core::core.all',
                    'icon' => 'gmdi-filter-list',
                    'query' => [],
                ],
                /*
                'documents' => [
                    'label' => 'trans//core::core.documents',
                    'icon' => 'gmdi-text-snippet',
                    'query' => [
                        [
                            'field' => 'expiry_job',
                            'operator' => '=',
                            'value' => 'Documents',
                        ],
                    ],
                ],
                */
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation Group
    |--------------------------------------------------------------------------
    |
    | The translatable title of the navigation group in the
    | Filament Admin Panel. Instead of a translatable
    | string, you may also use a simple string.
    |
    */

    'navigation_group' => 'trans//core::user.users',

    /*
    |--------------------------------------------------------------------------
    | Login Link - User Models
    |--------------------------------------------------------------------------
    |
    | Add your user models here. You can add as many as you want.
    |
    */

    'user_models' => [
        'App Users' => User::class,
        'Moox Users' => \Moox\User\Models\User::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Login Link - Redirect To
    |--------------------------------------------------------------------------
    |
    | Where should we go after successful login?
    |
    */

    'redirect_to' => '/moox',

];
