<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
	public function up()
	{
		//tbl_product
		// product_id	int (11)	primary key
		// product_name	varchar (25)	not null
		// product_description	text	description about the product
		// product_image	varchar (40)	name of the product image
		// unit_price	double	
		// available_quantity	int (11)	number of items available in stock, with the minimum quantity being 0
		// subcategory_id	int (11)	foreign key to tbl_subcategories, subcategory_id
		// created_at	datetime	time product was first added
		// updated_at	datetime	time product was last updated
		// added_by	int (11)	foreign key to tbl_users, user_id for admin
		// is_deleted	int (11)	values can be 0/1. default 0 for active
		
		$this->forge->addField([
			'product_id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>true,
				'auto_increment'=>true
			],
			'product_name'=>[
				'type'=>'VARCHAR',
				'constraint'=>'25'

			],
			'product_description'=>[
				'type'=>'VARCHAR',
				'constraint'=>'25'
			],
			'product_image'=>[
				'type'=>'VARCHAR',
				'constraint'=>'40',
				
			],
			'unit_price'=>[
				'type'=>'double',
				

			],
			'available_quantity'=>[
				'type'=>'INT',
				'constraint'=>11 
			],
			'subcategory_id'=>[
				'type'=>'INT',
				'constraint'=>11 
				
			],
			'created_at'=>[
				'type'=>'datetime',
				
				

			],
			'updated_at'=>[
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
		$this->forge->addPrimaryKey('product_id',true);
		$this->forge->createTable('product');
		$this->forge->addKey('product_name',true);


	}

	public function down()
	{
		//
		$this->forge->dropTable('product');
	}
}

