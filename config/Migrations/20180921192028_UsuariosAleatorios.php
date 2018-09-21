<?php
use Migrations\AbstractMigration;

class UsuariosAleatorios extends AbstractMigration
{
     public function up()
    {
        $faker = \Faker\Factory::create();
        $populator= new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity('usuarios',100,[

            'Usuario' => function () use ($faker){
                return $faker->firstName();
            },
            'Contrasena' => 'secret',
            'role' => 'user',
            'active' => function () use ($faker){
                return rand(0,1);
            }
        ]);

        $populator->execute();

    }
}
