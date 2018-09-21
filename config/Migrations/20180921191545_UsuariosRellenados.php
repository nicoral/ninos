<?php
use Migrations\AbstractMigration;

class UsuariosRellenados extends AbstractMigration
{
public function up()
    {
        $faker = \Faker\Factory::create();
        $populator= new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity('usuarios',1,[
            'Usuario' => 'Edson',
            'user' => 405,
            'Contrasena' => 'pass',
            'role' => 'admin',
            'active' => 1
        ]);

        $populator->execute();

    }
}
