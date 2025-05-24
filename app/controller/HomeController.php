<?php 

class HomeController {
    public function __construct() {
    }

    public function index(){
        echo 'index';
    }

    public function show($value){
        echo 'show ' . $value;
    }

    public function create() {}

    public function store(){}

    public function edit($value) {
        echo 'edit ' . $value;
    }

    public function update() {}

    public function delete(){}
 }