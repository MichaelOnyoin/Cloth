<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Role extends Migration
{
	public function up()
	{
		//Will have role_id,role_name,role_description,role_status	
		$this->forge->addField([
			'role_id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>true,
				'auto_increment'=>true
			],
			'role_name'=>[
				'type'=>'VARCHAR',
				'constraint'=>'20'

			],
			'role_status'=>[
				'type'=>'VARCHAR',
				'constraint'=>'25'
			],

		]);
		$this->forge->addPrimaryKey('role_id',true);
		$this->forge->createTable('tbl_roles');
		$this->forge->addKey('role_name',true);






	}

	public function down()
	{
		//Will have role_id,role_name,role_description,role_status
		$this->forge->dropTable('tbl_roles');
					
	}
}
