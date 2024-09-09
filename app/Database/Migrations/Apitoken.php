<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Apitoken extends Migration
{
	public function up()
	{
		Schema::table('apitokens', function ($table) {
			$table->string('api_token', 80)->after('password')
								->unique()
								->nullable()
								->default(null);
		});
	}

	public function down()
	{
		//
	}
}
