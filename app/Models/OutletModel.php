<?php

namespace App\Models;

use CodeIgniter\Model;

class OutletModel extends Model
{
  protected $table                = 'm_outlet';
  protected $primaryKey           = 'id_outlet';
  protected $allowedFields        = ['nama_outlet', 'alamat_outlet', 'telp_outlet'];
}
