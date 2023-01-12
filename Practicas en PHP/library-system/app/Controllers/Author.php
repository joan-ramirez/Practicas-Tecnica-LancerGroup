<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Author extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new \App\Models\AuthorModel();
    }

    public function index()
    {
        $data['authors'] = $this->model->findAll();
        return view('author/index', $data);
    }

    public function create()
    {
        return view('add_author');
    }

    public function new()
    {
        return view('author/new');
    }

    public function edit()
    {
        //
    }

    public function show()
    {
        //
    }

    public function update()
    {
        //
    }


    public function delete($id = null)
    {
        //
    }
}
