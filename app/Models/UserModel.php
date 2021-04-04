<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table                = 'm_user';
  protected $primaryKey           = 'id_user';
  protected $allowedFields        = ['nama_user', 'username', 'password', 'id_outlet', 'role'];

  public function userData()
  {
    return $this
      ->join('m_outlet', 'm_outlet.id_outlet = m_user.id_outlet')
      ->orderBy('role', 'asc')
      ->get()->getResultArray();
  }
}
