<?php

class GeneroModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=series;charset=utf8', 'root', '');
    }
    function generos() {  
        $query = $this->db->prepare("SELECT * FROM generos");
        $query->execute();
        $generos = $query->fetchAll(PDO::FETCH_OBJ); 
    
        return $generos;
    }
    public function agregargenero($id, $infogenero) {
        $query = $this->db->prepare("INSERT INTO generos (id, infogenero) VALUES (?,?)");
        $query->execute([$id,$infogenero]);

        return $this->db->lastInsertId();
    }
    function borrargeneroid($id) {
        $query = $this->db->prepare('DELETE FROM generos WHERE id = ?');
        $query->execute([$id]);
    }
    function editargeneros($id, $infogenero) {
        $query = $this->db->prepare("UPDATE generos SET infogenero=? WHERE id=?");
        $query->execute([$id,$infogenero]);
    }
    
    function getidgen($id) {
        $query = $this->db->prepare('SELECT * FROM generos WHERE id =?');
        $query->execute([$id]);
        $id = $query->fetch(PDO::FETCH_OBJ);
        return $id;
    }
}