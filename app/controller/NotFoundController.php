<?php

class NotFoundController extends Controller
{

    public function index()
    {
        $data = [
            'title' => '404 Not Found',
            'message' => 'The page you are looking for does not exist.',
        ];
        return view('errors/NotFound', $data);
    }
}