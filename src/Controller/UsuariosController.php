<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 */
class UsuariosController extends AppController
{
    public function index()
    {
        $usuarios = $this->paginate($this->Usuarios);
        $this->set('usuarios',$usuarios);
    }
    public function ini()
    {
    	
        $this->render();
    }
}
