<?php

class BlogController extends Controller
{
    public function __construct() {}

    public function index()
    {
        return view('blogs/index', ['title' => 'Blogs Management']);
    }

    public function show($value) {}

    public function create() {
        return view('blogs/create', ['title' => 'Add Blog']);
    }

    public function store() {}

    public function edit($value) {}

    public function update() {}

    public function delete() {}
}
