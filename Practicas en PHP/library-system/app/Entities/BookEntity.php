<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class BookEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    protected function getAuthors()
    {
        if (!empty($this->attributes['id'])) {
            $AuthorsBooksModel = model('AuthorsBooksModel');
            $joins = $AuthorsBooksModel->where('book_id', $this->attributes['id'])->findAll();

            foreach ($joins as $join) {
                $AuthorModel = model('AuthorModel');
                $authors[] = $AuthorModel->where('id', $join['author_id'])->first();
            }
            return $authors;
        }
        return $this;
    }
}
