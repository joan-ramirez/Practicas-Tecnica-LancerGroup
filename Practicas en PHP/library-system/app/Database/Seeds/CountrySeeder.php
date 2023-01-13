<?php

namespace App\Database\Seeds;

use App\Models\CountryModel;
use CodeIgniter\Database\Seeder;
use App\Database\Seeds\Shared\Csv;

class CountrySeeder extends Seeder
{
    public function run()
    {
        Csv::insert(
            name: 'countries.csv',
            model: CountryModel::class,
            columns: ['name', 'iso']
        );
    }
}
