<?php
require_once './app/controllers/serie.controller.php';
require_once './app/controllers/admin.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'lista';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


switch ($params[0]) {
    case 'login':
        $controller = new AdminController();
        $controller->ingresar();
        break;
    case 'verificar':
        $controller = new AdminController();
        $controller->validar(); 
        break;
    case 'logout':
        $controller = new AdminController();
        $controller->cierrasesion();
        break; 
   case 'lista':
        $controller = new SeriesController();
        $controller->mostrarlista();
        break;
    case 'agregar':
        $controller = new SeriesController();
        $controller->agregarseries();
        break;
    case 'categorias':
        $controller = new SeriesController();
        $controller->mostrarcategoria();
        break;
    case 'agregargenero':
        $controller = new SeriesController();
        $controller->agregargeneros();
        break;
    case 'buscador':
        $controller = new SeriesController();
        $controller->buscador();
        break;
    case 'editar':
        $controller = new SeriesController();
        $id = $params[1];
        $controller->editoserie($id);
        break;
    case 'actualizar':
        $controller = new SeriesController();
        $id= $params[1];
        $controller->editarserie($id);
        break;
    case 'editargenero':
        $controller = new SeriesController();
        $id = $params[1];
        $controller->editogenero($id);
        break;
    case 'actualizargenero':
        $controller = new SeriesController();
        $id= $params[1];
        $controller->editagenero($id);
        break;
    case 'borrarserie':
        $controller = new SeriesController();
        $id = $params[1];
        $controller->borrarserie($id);
        break;
    case 'borrargenero':
        $controller = new SeriesController();
        $id = $params[1];
        $controller->borrargenero($id);
        break;
    case 'ver':
        $controller = new SeriesController();
        $id = $params[1];
        $controller->verserie($id);
        break;
    case 'vergenero':
        $controller = new SeriesController();
        $id = $params[1];
        $controller->vergenero($id);
        break;
    default:
        echo('404 Page not found');
        break;
}