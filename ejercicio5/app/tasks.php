<?php

function showHome() {
    require_once 'templates/header.phtml';
    require_once 'templates/form_add.phtml';
    // $materias = getStuff();
    require_once 'templates/footer.phtml';
}

function addStuff() {
    // TODO: validacion de datos
    if (isset($_POST['nombre_materia'], $_POST['profesor'], $_POST['nombre_carrera'], $_POST['anios']) && !empty($_POST['nombre_materia'])) {
        // obtengo los datos del usuario
        $nombre_materia = $_POST['nombre_materia'];
        $profesor = $_POST['profesor'];
        $nombre_carrera = $_POST['nombre_carrera'];
        $anios = $_POST['anios'];
        // inserto en la DB
        insertStuff($nombre_materia, $profesor, $nombre_carrera, $anios);
        header('Location: ' . BASE_URL);
    } else {
        echo '<h1>Debe ingresar datos!</h1>';
    }
}

function showStuff() {
    require_once 'templates/header.phtml';
    $materias = getStuff();
    require_once 'templates/tabla.phtml';
    require_once 'templates/footer.phtml';
}

function showProfesor() {
    require_once 'templates/header.phtml';
    require_once 'templates/profesores.phtml';
}

function renewStuff($id) {
    $materias = getStuffById($id);
    showEditForm($id);
}

function showEditForm($id) {
    require_once 'templates/form_update.phtml';
    
}

function removeStuff($id) {
    deleteStuff($id);
    header('Location: ' . BASE_URL);
}
