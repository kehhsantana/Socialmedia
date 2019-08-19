<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /* C */
    public function run()
    {
    	//Criação de usuário manualmente para inserção no banco de dados:
      $user = new \App\User();
        $user->create([
        	'User'     => 'KellySa56660862',
        	'Name'     => 'Kelly',
        	'Lastname' => 'Santana',
        	'Email'    => 'kehhsantana@gmail.com',
        	'Cellphone'=> '11986631931',
        	'Age'      => '21',
        	'City'     => 'São Paulo'
        ]);

        //Criação de usuários fictícios via seeder. Nesse caso serão criados 5 usuários:
        factory(App\User::class, 5)->create();


    }
}
