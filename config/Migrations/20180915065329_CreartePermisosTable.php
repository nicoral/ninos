<?php
use Migrations\AbstractMigration;

class CreartePermisosTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    //TABLAS DE PERMISOS
    public function change()
    {
        $table = $this->table('Permisos');
        $table->addColumn('user_ID','integer',array('signed'=>'disable'))
            ->addColumn('token','integer',array('signed'=>'disable'))
            ->create();
    }
}
