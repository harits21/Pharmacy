<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama_obat', 'jenis_obat', 'harga', 'deskripsi'];

    public function getObat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_obat' => $id])->first();
    }
}
