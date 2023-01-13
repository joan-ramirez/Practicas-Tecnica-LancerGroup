<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\BookEntity;

class BookModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'books';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = BookEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'edition'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $beforeInsert = [];
    protected $afterInsert = [];

    // Insert or update book tutors
    public function transBooksTutors($data, $id = null)
    {
        $this->db->transStart();

        $authorsBooksModel = model('AuthorsBooksModel');

        if ($id) {
            foreach ($data['authors'] as $author) {
                $authorsBooksModel->where('book_id', $id)->delete();
            }
            $this->update($id, $data);
        } else {
            $book = $this->insert($data);
        }

        foreach ($data['authors'] as $author) {
            $authorsBooksModel->insert(
                ['author_id' => $author, 'book_id' => $book ?? $id]
            );
        }

        $this->db->transComplete();
    }
}
