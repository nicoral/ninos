<?php
use Migrations\AbstractMigration;

class PermisosTable extends AbstractMigration
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
        $table = $this->table('Permisos');
        $table->addColumn('user_ID','integer',array('signed'=>'disable'))
            ->addColumn('token','integer',array('signed'=>'disable'))
            ->addForeignKey('user_ID','usuarios','id',array('update'=>'NO_ACTION'))
            ->update();
    }
}
