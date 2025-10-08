<?php
// require_once 'db.php';
require_once 'templates/form_add.php';
require_once 'templates/tabla.php';

function showHome() {
    showStuff();
}

function showStuff() {
    require_once 'templates/header.php';
    $materias = getStuff();
    require_once 'templates/footer.php';
}

function addStuff() {
    // TODO: validacion de datos
    if (isset($_POST['nombre'], $_POST['profesor']) && !empty($_POST['nombre'])) {
        // obtengo los datos del usuario
        $nombre = $_POST['nombre'];
        $profesor = $_POST['profesor'];
        // inserto en la DB
        insertStuff($nombre, $profesor);
        header('Location: ' . BASE_URL);
    } else {
        echo 'Error!';
    }
}

function renewStuff($id) {
    var_dump($id);
}

function removeStuff($id) {
    deleteStuff($id);
    header('Location: ' . BASE_URL);
}
