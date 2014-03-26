<?php

require 'app/controller/mvc.controller.php';

//se instancia al controlador 
$mvc = new mvc_controller();
if ($_GET['action'] == 'add_company') { //muestra el modulo del buscador
    $mvc->add_conpany();
}else if($_GET['action'] == 'add_contact'){
        $mvc->add_contact();
}else if (isset($_POST['pma_username']) && $_POST['pma_username'] != '' && isset($_POST['pma_password']) && $_POST['pma_password'] != '') {//muestra el buscador y los resultados
    $mvc->buscador();
} else { //Si no existe GET o POST -> muestra la pagina principal
    $mvc->login();
}
?>