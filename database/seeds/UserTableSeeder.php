<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = array(

    		[
    			'name' => 'Mao',
    			'last_name' => 'Forero',
    			'email' => 'mauricio.1020@hotmail.com',
    			'user' => 'mao1020',
    			'password' => \Hash::make('123456'),
    			'type' => 'admin',
    			'active' => 1,
    			'address' => 'Bogota',
    			'created_at' => new DateTime,
    			'updated_at'=> new DateTime
    		],
    		[
    			'name' => 'Adela',
    			'last_name' => 'Torres',
    			'email' => 'adela@gmail.com',
    			'user' => 'adela1020',
    			'password' => \Hash::make('123456'),
    			'type' => 'user',
    			'active' => 1,
    			'address' => 'Cali',
    			'created_at' => new DateTime,
    			'updated_at'=> new DateTime
    		],
    	);
    	User::insert($data);
    }
}
