<?php

namespace App\Database\Seeds\Shared;

class Csv
{
    /**
     * Insert a csv file into a table.
     * 
     * @param string $path is where the CSV file is located.
     * @param string $name is the name of the CSV.
     * @param array $columns must have the columns in the order of the csv file.
     * @param 
     */
    public static function insert(string $model, array $columns = [], string $name, string $path = "../app/Database/Seeds/CSVs/", $mode = 'r', $delimiter = '|',)
    {
        // $mode: r = read, w = write, a = append
        $csv = fopen($path . $name, $mode);

        $length = 0;

        while (($value = fgetcsv($csv, $length, $delimiter)) !== false) {

            for ($i = 0; $i < count($columns); $i++) {
                if (count($value) == count($columns)) {
                    $data[$columns[$i]] = $value[$i];
                }
            }

            (new $model)->insert($data);
        }
    }
}
