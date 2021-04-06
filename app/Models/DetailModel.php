<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{
	protected $table                = 'm_detail_transaksi';
	protected $primaryKey           = 'id_transaksi';
	protected $allowedFields        = [
		'id_transaksi',
		'id_paket',
		'qty',
		'total_harga',
	];
}
