<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiuserModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'apiusers';
	protected $primaryKey           = 'apiuser_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['username','key','added_by','is_deleted'];
	public $supportedResponseFormats = [
		'application/json',
		'application/xml',
	];
	public $formatters = [
		'application/json' => \CodeIgniter\Format\JSONFormatter::class,
		'application/xml'  => \CodeIgniter\Format\XMLFormatter::class,
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_on';
	//protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
