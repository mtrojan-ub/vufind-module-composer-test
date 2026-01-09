<?php
return [
    'js' => ['mixin-popup.js'],
    'helpers' => [
        'factories' => [
            'MyModule\View\Helper\MyMixin\MyHelper' => 'Laminas\ServiceManager\Factory\InvokableFactory',
        ],
        'aliases' => [
            'myHelper' => 'MyModule\View\Helper\MyMixin\MyHelper',
        ],
    ],
];
