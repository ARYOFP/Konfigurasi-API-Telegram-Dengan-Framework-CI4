<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'Id_Dosen';
    protected $allowedFields = ['Nama_Dosen', 'Matakuiah'];

    public function getDosen($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function addDosen($data)
    {
        return $this->insert($data);
    }
}
