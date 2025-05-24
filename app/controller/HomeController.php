<?php

class HomeController extends Controller
{
    public function __construct() {}

    public function index(){
        $data = [
            'title' => 'Home Page',
            'foo' => 'bar',
        ];
        return view('home/index', $data);
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