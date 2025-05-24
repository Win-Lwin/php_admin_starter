<?php

class Controller {
    public function view($name, $data = [])
    {
        $file = '../app/views/' . $name . '.php';

        if (file_exists($file)) {
            extract($data);
            require_once $file;
        } else {
            die("View does not exist: " . $file);
        }
    }
}