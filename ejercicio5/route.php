<?php
require_once './app/db.php';
require_once './app/tasks.php';
require_once './templates/tabla.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'alta':
        addStuff();
        break;
    case 'baja':
        deleteStuff($id);
        break;
    case 'modificar':
        updateStuff($id);
        break;
    default:
        echo 'error!';
        break;
}
