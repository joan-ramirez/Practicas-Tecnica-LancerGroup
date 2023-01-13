<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Book extends BaseController
{
    private $model;
    private $entity;

    function __construct()
    {
        $this->model = model('BookModel');
        $this->entity = new \App\Entities\BookEntity();
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
            'edition'  => $this->request->getVar('edition'),
            'authors'  => $this->request->getVar('authors') ?? [],
        ];

        $this->model->insert($data);

        return $this->response->redirect(site_url('/books'));
    }

    public function edit()
    {
        //
    }

    public function show($id = null)
    {
        $data['book'] = $this->model->where('id', $id)->first();
        return view('book/show', $data);
    }

    public function update()
    {
        //
    }


    public function delete($id = null)
    {
    }
}
