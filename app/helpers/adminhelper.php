<?php

class AdminHelper {


function checkLogged() {
    session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
        header("Location: " . BASE_URL . 'login');
        die();
        }
     }
     
    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    }    

 


}

