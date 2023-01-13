<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class AuthorEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    protected function getCountry()
    {
        if (!empty($this->attributes['country_id'])) {
            $contryModel = model('CountryModel');
            return $contryModel->where('id', $this->attributes['country_id'])->first();
        }

        return $this;
    }


    protected function getBooks()
    {
        if (!empty($this->attributes['id'])) {
            $AuthorsBooksModel = model('AuthorsBooksModel');
            $joins = $AuthorsBooksModel->where('author_id', $this->attributes['id'])->findAll();

            foreach ($joins as $join) {
                $AuthorModel = model('BookModel');
                $autor = $AuthorModel->where('id', $join['book_id'])->first();

                if ($autor)
                    $books[] = $autor;
            }
            return $books ?? [];
        }
        return $this;
    }

    public function getFullName()
    {
        return $this->attributes['name'] . ' ' . $this->attributes['surname'];
    }
}
