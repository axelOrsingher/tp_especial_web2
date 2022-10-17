<?php
require_once './app/models/user.model.php';
require_once './app/views/admin.view.php';
require_once './app/helpers/adminhelper.php';


class AdminController {
    private $model;
    private $view;
    


    public function __construct() {
        $this->model = new UserModel();
        $this->view = new  AdminView();
    }
    
    function ingresar() {
        $this->view->ingresarform();
    }

    public function validar() {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $usuario = $this->model->getUserByEmail($email);

        if ($usuario && password_verify($contraseña, $usuario->contraseña)) {

            session_start();
            $_SESSION['usuario'] = $usario->id;
            $_SESSION['email'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;


            header("Location: " . BASE_URL . 'lista'); 
        } else {
        
           $this->view->ingresar("El usuario o la contraseña no existe.");
        } 
    }
    function cierrasesion() {
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    }
}
   