<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Author extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = model('AuthorModel');
    }

    protected function countries()
    {
        $paisModel = new \App\Models\CountryModel();
        return $paisModel->findAll();
    }

    public function index()
    {
        $data['authors'] = $this->model->findAll();
        return view('author/index', $data);
    }

    public function new()
    {
        $data['countries'] = $this->countries();
        return view('author/new', $data);
    }

    public function create()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'surname'  => $this->request->getVar('surname'),
            'country_id'  =>  $this->request->getVar('country'),
        ];

        $this->model->save($data);

        return $this->response->redirect(site_url('/authors'));
    }

    public function show($id = null)
    {
        $data['author'] = $this->model->find($id);
        return view('author/show', $data);
    }

    public function edit($id = null)
    {
        $data['countries'] = $this->countries();
        $data['author'] = $this->model->find($id);
        return view('author/edit', $data);
    }

    public function update()
    {
        //
    }

    public function delete($id = null)
    {
        $this->model->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('authors'));
    }
}
