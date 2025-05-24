<?php

class UserController extends Controller
{
    public function __construct() {}

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->store();
        }
        return view('users/index' , [ 'title' => 'Users Management' ]);
    }

    public function show($value)
    {
    }

    public function create() {
        return view('users/create', [ 'title' => 'Add User' ]);
    }

    public function store() {
    }

    public function edit($value)
    {
    }

    public function update() {}

    public function delete() {}
}
