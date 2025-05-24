<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}


function getURL() {
    $url = $_GET['url'] ?? 'home';
    $url = filter_var($url, FILTER_SANITIZE_URL);
    return explode('/', $url);
}

function view($name, $data = [])
{
    $file = '../app/views/' . $name . '.php';

    if (file_exists($file)) {
        extract($data);
        require_once $file;
    } else {
        die("View does not exist: " . $file);
    }
}