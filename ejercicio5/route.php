<?php
require_once 'app/db.php';
require_once 'app/tasks.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// home           ->        showHome();
// agregar        ->        addStuff();
// eliminar/:ID   ->      removeStuff();

// parsea para separar acción real de parametros
$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'add':
        addStuff();
        break;
    case 'modificar':
        renewStuff($params[1]);
        break;
    case 'eliminar':
        removeStuff($params[1]);
        break;
    default:
        echo 'error!';
        break;
}
