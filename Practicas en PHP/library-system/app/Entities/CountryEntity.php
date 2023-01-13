<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CountryEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at'];
    protected $casts   = [];

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
}
