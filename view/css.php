<?php
$cssfiles=['css/angular-material.min.css'
    ];

foreach($cssfiles as $file) {
    echo '<link rel="stylesheet" type="text/css"  href="../' . $file . '" />';
}