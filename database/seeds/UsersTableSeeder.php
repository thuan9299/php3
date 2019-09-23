<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
    		[
	    		"name" => "thuan",
	    		"email" => "admin1@gmail.com",
	    		"password" => Hash::make('123456'),
          "role_id" => "1000"
	    	],
            [
                "name" => "thuan1",
                "email" => "admin2@gmail.com",
                "password" => Hash::make('123456'),
                "role_id" => "900"
            ],
            [
                "name" => "thuan2",
                "email" => "admin3@gmail.com",
                "password" => Hash::make('123456'),
                "role_id" => "100"
            ]
    	];
      	DB::table('users')->insert($users);
    }
}