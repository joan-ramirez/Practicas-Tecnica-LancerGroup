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

    public function new()
    {
        return view('book/new');
    }

    public function create()
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'edition'  => $this->request->getVar('edition')
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
