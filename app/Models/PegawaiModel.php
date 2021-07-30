<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
   protected $table = 'pegawai';
   protected $allowedFields = ['nama', 'tempat_lahir', 'alamat', 'agama', 'no_tlp', 'jenis_kelamin', 'pendidikan_terakhir', 'kewarganegaraan', 'foto'];

   public function getPegawai($id)
   {
      if ($id == false) {
         return $this->findAll();
      }
      return $this->where(['id' => $id])->first();
   }
}
