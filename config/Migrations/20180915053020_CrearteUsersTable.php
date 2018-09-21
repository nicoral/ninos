<?php
use Migrations\AbstractMigration;

class CrearteUsersTable extends AbstractMigration
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
        $table = $this->table('usuarios');
        $table->addColumn('Usuario','string',array('limit'=>100))
            ->addColumn('user','integer',array('signed'=>'disable'))
            ->addColumn('Contrasena','string')
            ->addColumn('role','enum',array('values'=>'admin,user'))
            ->addColumn('active','boolean')
            ->create();
        
        
        
        
    }
}
