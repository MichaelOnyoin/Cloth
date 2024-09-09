<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
	public function run()
	{
		//3 Roles ,admin
		$data=[
			['role_name'=>'adminer','role_status'=>'Administrator'],
			['role_name'=>'teacher','role_status'=>'Lecturing'],
			['role_name'=>'driver','role_status'=>'transport']
		];
		$this->db->table('tbl_roles')->insertBatch($data);
	}
}
