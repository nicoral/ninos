<?php
use Migrations\AbstractMigration;

class CrearteUsuariosInfo extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('info_Usuario');
        $table->addColumn('Nombres','string',array('limit'=>100))
            ->addColumn('user_ID','integer',array('signed'=>'disable'))
            ->addForeignKey('user_ID','usuarios','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->addColumn('Apellidos','string',array('limit'=>100))
            ->addColumn('Correo','string',array('limit'=>100))
            ->addColumn('Telefono','string',array('limit'=>12))
            ->addColumn('Direccion','string',array('limit'=>200))
            ->create();
    }
}
