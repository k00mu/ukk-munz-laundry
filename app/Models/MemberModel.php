<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
	protected $table                = 'm_member';
	protected $primaryKey           = 'id_member';
	protected $allowedFields        = ['nama_member', 'alamat_member', 'jenis_kelamin', 'telp_member'];
}
