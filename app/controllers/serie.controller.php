<?php
require_once './app/models/serie.model.php';
require_once './app/views/serie.view.php';
require_once './app/models/genero.model.php';
require_once './app/helpers/adminhelper.php';

class SeriesController {
    private $model;
    private $view;
    private $adminHelper;

    public function __construct() {
        $this->model = new SeriesModel();
        $this->view = new SeriesView();
        $this->modelgen = new GeneroModel();
        $this->adminHelper = new AdminHelper();
 
    }

    public function mostrarlista() {
        $this->adminHelper->checkLogged();
        $series = $this->model->series();
        $generos = $this->modelgen->generos();

        $this->view->mostrarlista($series,$generos);
    }
    function agregarseries() {
        $this->adminHelper->checkLogged();
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];

        if (empty($titulo)||empty($genero)||empty($descripcion)) {
            $this->view->mostrarerror('Faltan datos obligatorios');
            die();
        }

        $id = $this->model->agregoserie($titulo, $genero, $descripcion);

        header("Location: " . BASE_URL); 
    }

    function borrarserie($id) {
        $this->adminHelper->checkLogged();
        $this->model->borrarserieid($id);
        header("Location: " . BASE_URL); 
    }
    function borrargenero($id) {
        $this->adminHelper->checkLogged();
        $this->modelgen->borrargeneroid($id);
        header("Location: " . BASE_URL);
    }
    function editoserie($id){
        $this->adminHelper->checkLogged();
        $series = $this->model->id($id);
        $this->view->editarserie($series);
    }
    function editarserie($id){
        $this->adminHelper->checkLogged();
      
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];
    
        if (empty($titulo) || empty($genero) || empty($descripcion)) {
            $this->view->mostrarerror('Faltan datos obligatorios');
            die();
        }
        $this->model->actualizoserie($titulo, $genero, $descripcion,$id);
        
        header("Location: " . BASE_URL); 

    }
   
    function verserie($id) { 
        $id= $this->model->id($id);
        if($id) {
            $this->view->detalleserie($id);
        }
        else {
            $this->view->mostrarerror('Tarea no encontrada');
        }
    }
    function vergenero($id) { 
        $id= $this->modelgen->getidgen($id);
        if($id) {
            $this->view->detallegenero($id);
        }
        else {
            $this->view->mostrarerror('Tarea no encontrada');
        }
    }
    function buscador(){
        $genre = $_POST['genero'];
        
        if (empty($genre)) {
            $this->view->mostrarerror('Faltan datos obligatorios');
            die();
        }
        $gener = $this->model->buscargenero($genre);
        $this->view->mostrargenero($gener);
    }

    function agregargeneros() {
        $this->adminHelper->checkLogged();
        $id = $_POST['id'];
        $infogenero = $_POST['infogenero'];

        $id = $this->modelgen->agregargenero($id,$infogenero);

        header("Location: " . BASE_URL);    
    } 
    function mostrarcategoria(){
        $series=$this->model->series();
        $generos=$this->modelgen->generos();
        $this->view->mostrarcategorias($series,$generos);
    }
    function editogenero($id){
        $id = $this->modelgen->getidgen($id);
        if ($id) {
        $this->view->mostrarerror('No es posible editar los generos, debe eliminar y volver a ingresar los datos');
        } else {
            $generos = $this->modelgen->getidgen($id);
            $this->view->editargenero($generos);
        }
            
    }
    function editagenero($id){
    $this->adminHelper->checkLogged();
    $id = $_POST['id'];
    $infogenero = $_POST['infogenero'];
    if (empty($id) || empty($infogenero)) {
        $this->view->mostrarerror('Faltan datos obligatorios');
        die();
    }
    $this->modelgen->editargeneros($id, $infogenero);
    header("Location: " . BASE_URL); 

    }
}
