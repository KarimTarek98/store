<?php
return
[
    'template' => [
        'wrapperstart'      => TEMPLATE_PATH . 'wrapperstart.php',
        'header'            => TEMPLATE_PATH . 'header.php',
        'nav'               => TEMPLATE_PATH . 'nav.php',
        ':view'             => ':action_view',
        'wrapperend'        => TEMPLATE_PATH . 'wrapperend.php'
    ],
    'header_resources' => [
        'css' => [
            'noramlize'     => CSS . 'normalize.css',
            'fawsome'       => CSS . 'fawsome.min.css',
            'gicons'        => CSS . 'googleicons.css',
            'main'              => CSS . 'main' . $_SESSION['lang'] . '.css'
        ],
        'js' => [
            'modernizr'     => JS . 'vendor/modernizr-2.8.3.min.js'
        ]
    ],
    'footer_resources' => [
        'jquery'            => JS . 'vendor/jquery-1.12.0.min.js',
        'helper'            => JS . 'helper.js',
        'datatables'            => JS . 'datatables' . $_SESSION['lang'] . '.js',
        'main'              => JS . 'mainscript.js'
    ]
];
