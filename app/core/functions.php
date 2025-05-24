<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}


function getURL() {
    $url = $_GET['url'] ?? 'home';
    $url = filter_var($url, FILTER_SANITIZE_URL);
    return explode('/', $url);
}