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
    public function home(){
        $this->render();
        
    }
    public function logout(){
        return %this->redirect($this->logout());
    }
    public function login(){
        
        if($this->request->is('post')){
            
            $usuario=$this->Auth->identify();
            
            if($user){
                $this->Auth->setUser($usuario);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else{
                $this->Flash->error('Usuario o Contraseña invalidos :( ',['key' => 'auth']);
            }
        }       
    }
    
    public function ini()
    {
    	
        $this->render();
    }
}
