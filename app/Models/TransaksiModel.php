<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table                = 'm_transaksi';
	protected $primaryKey           = 'id_transaksi';
	protected $allowedFields        = [
		'kode_invoice',
		'tgl_transaksi',
		'batas_waktu',
		'biaya_tambahan',
		'diskon',
		'pajak',
		'total_biaya',
		'status',
		'konfirmasi',
		'id_outlet',
		'id_member',
		'id_user',
	];

	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tgl_transaksi';
	protected $updatedField         = '';
	protected $deletedField         = '';
}
