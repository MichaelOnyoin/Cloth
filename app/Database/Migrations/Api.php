<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Api extends Migration
{
	public function up()
	{
		//tbl_apiusers
				// apiuser_id	int (11)	primary key
				// username	varchar (40)	username for the api user
				// key	varchar (60)	access key for the api user. allows access to unsecured api endpoints
				// created_at	datetime	time access token was created 
				// updated_on	datetime	time access token expires
				// added_by	int (11)	foreign key to tbl_users, user_id for administrator
				// is_deleted	int (11)	values can be 0/1. default 0 for active

				$this->forge->addField([
					'apiuser_id'=>[
						'type'=>'INT',
						'constraint'=>11,
						'unsigned'=>true,
						'auto_increment'=>true
					],
					'username'=>[
						'type'=>'VARCHAR',
						'constraint'=>'40'
		
					],
					'key'=>[
						'type'=>'VARCHAR',
						'constraint'=>'60'
					],
					
					'created_at'=>[
						'type'=>'datetime',
						
						
		
					],
					'updated_on'=>[
						'type'=>'datetime',
						
					],
					'added_by'=>[
						'type'=>'INT',
						'constraint'=>11,
					],
					'is_deleted'=>[
						'type'=>'INT',
						'constraint'=>11,
						
					]
		
				]);
				$this->forge->addPrimaryKey('apiuser_id',true);
				$this->forge->createTable('apiusers');
				$this->forge->addKey('username',true);
		
		
			}


	

	public function down()
	{
		//
		$this->forge->dropTable('apiusers');
	}
}

