<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;


class CustomModel extends Model
{
	protected $db;
	protected $DBGroup              = 'default';
	protected $table                = 'users';
	protected $primaryKey           = 'user_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'user_created_at';
	protected $updatedField         = 'user_updated_at';
	//protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	// protected $allowCallbacks       = true;
	// protected $beforeInsert         = [];
	// protected $afterInsert          = [];
	// protected $beforeUpdate         = [];
	// protected $afterUpdate          = [];
	// protected $beforeFind           = [];
	// protected $afterFind            = [];
	// protected $beforeDelete         = [];
	// protected $afterDelete          = [];
	// public function __construct(ConnectionInterface &$db){
	// 	$this->db=& $db;

	// }
	// function getPosts(){
	// 	$builder=$this->db->table('posts');
	// 	$builder->join('users','posts.post_author= users.user_id');
	// 	$posts=$builder->get()->getResultArray();
	// 	return $posts;
	// }
	public function getOneUser(){
		$user_details=array('Michael','John','Peter');
		return $user_details;

	}


}
