<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Author extends BaseController
{
    private $model;
    private $entity;

    function __construct()
    {
        $this->model = model('AuthorModel');
        $this->entity = new \App\Entities\AuthorEntity();
    }


    public function index()
    {
        $data['authors'] = $this->model->findAll();
        return view('author/index', $data);
    }

    public function new()
    {
        $paisModel = new \App\Models\CountryModel();
        $data['countries'] = $paisModel->findAll();
        return view('author/new', $data);
    }


    public function create()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'surname'  => $this->request->getVar('surname'),
            'country_id'  =>  $this->request->getVar('country'),
        ];

        $author = new $this->entity($data);

        $this->model->save($author);

        return $this->response->redirect(site_url('/authors'));
    }


    public function edit()
    {
        //
    }

    public function show($id = null)
    {
        $data['author'] = $this->model->where('id', $id)->first();
        return view('author/show', $data);
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
