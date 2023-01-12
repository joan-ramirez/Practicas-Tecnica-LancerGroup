<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Book extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new \App\Models\BookModel();
    }

    public function index()
    {
        $data['books'] = $this->model->findAll();
        return view('book/index', $data);
    }

    public function create()
    {
        return view('add_book');
    }

    public function new()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email')
        ];

        $this->model->insert($data);
        return $this->response->redirect(site_url('/books'));
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


    public function delete()
    {
        //
    }
}
