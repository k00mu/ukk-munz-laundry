<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table                = 'm_transaksi';
	protected $primaryKey           = 'id_transaksi';
	protected $allowedFields        = [
		'id_outlet',
		'id_paket',
		'tgl_transaksi',
		'total_transaksi',
		'status',
		'konfirmasi_pembayaran',
		'id_user',
	];

	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tgl_transaksi';
}
