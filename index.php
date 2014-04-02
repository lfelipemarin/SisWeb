<?php

require 'app/controller/mvc.controller.php';

//se instancia al controlador 
$mvc = new mvc_controller();
if ($_GET['action'] == 'add_company') { //muestra el modulo del buscador
    $mvc->add_company();
} else if ($_GET['action'] == 'add_contact') {
    $mvc->add_contact();
} else if (isset($_POST['pma_username']) && $_POST['pma_username'] != '' && isset($_POST['pma_password']) && $_POST['pma_password'] != '') {//muestra el buscador y los resultados
    $mvc->load_register();
} else if (isset($_POST['nm_id']) && $_POST['nm_id'] != '' && isset($_POST['nm_nit']) &&
        isset($_POST['nm_name']) && $_POST['nm_name'] != '' && isset($_POST['nm_address']) &&
        isset($_POST['nm_tel1']) && $_POST['nm_tel1'] != '' &&
        isset($_POST['nm_tel2']) && isset($_POST['nm_web'])) {
    $newCompany = array('id_empresa' => $_POST['nm_id'], 'nit' => $_POST['nm_nit'],
        'Nombre' => $_POST['nm_name'], 'direccion' => $_POST['nm_address'],
        'telefono1' => $_POST['nm_tel1'], 'telefono2' => $_POST['nm_tel2'],
        'pagina_web' => $_POST['nm_web']);
    $mvc->add_company($newCompany, 'datos_empresa');
} else { //Si no existe GET o POST -> muestra la pagina de login
    $mvc->login();
}
?>