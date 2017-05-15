<?php
$jsfiles=['js/angular.min.js',
    'js/angular-animate.min.js',
    'js/angular-aria.min.js',
    'js/angular-messages.min.js',
    'js/angular-material.min.js',
    'js/angular-route.min.js',
    
    
    'js/modules/login/login.module.js',
    'js/modules/login/login.controller.js',
    'js/modules/login/login.route.js',
    
    'js/app.js'
    
    ];

foreach($jsfiles as $file) {
    echo '<script type="text/javascript" src="../' . $file . '"></script>';
}