<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SeriesView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    function mostrarlista($series, $generos) {
        $this->smarty->assign('series', $series);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('admin-lista.tpl');
    }
  
    function mostrarerror($msg) {
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('error.tpl');
    }
    function detalleserie($series) {
        $this->smarty->assign('serie', $series);
        $this->smarty->display('serie.detalle.tpl');
    }
    function detallegenero($generos) {
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('genero.detalle.tpl');
    }
    function mostrargenero($gener){
        $this->smarty->assign('gener',$gener);
        $this->smarty->display('filtro.tpl');
    }
    function editarserie($series){
        $this->smarty->assign('series',$series);
        $this->smarty->display('editarserie.tpl');

    }
    function mostrarcategorias($series, $generos) {
        $this->smarty->assign('series', $series);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('usuario-lista.tpl');
    }
}