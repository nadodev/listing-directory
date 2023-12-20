<?php

/*
 * This file is part of the yoeunes/toastr package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

return array(
    /*
    |--------------------------------------------------------------------------
    | Toastr options
    |--------------------------------------------------------------------------
    |
    | Here you can specify the options that will be passed to the toastr.js
    | library. For a full list of options, visit the documentation.
    |
    | Example:
    | 'options' => [
    |     'closeButton' => true,
    |     'debug' => false,
    |     'newestOnTop' => false,
    |     'progressBar' => true,
    | ],
    */

    'options' => [
        'closeEasing'       => '',
        'extendedTimeOut'   => 10000,
        'hideDuration'      => 1000,
        'showMethod'        => 'slideDown',
        'newestOnTop' => false,
        'hideEasing'        => 'linear',
        'hideMethod'        => 'fadeOut',

    ],
);
