<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
				'name'=>'Neeraj Bhandari',
				'bio'=>'Neeraj Bhandari is a good coder',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
			));

		DB::table('authors')->insert(array(
				'name'=>'Delton Dsouza',
				'bio'=>'Delton Dsouza is a good coder as well',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name','=','Neeraj Bhandari')->delete();
		DB::table('authors')->where('name','=','Delton Dsouza')->delete();
	}

}
