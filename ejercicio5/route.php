<?php
require_once 'db.php';
require_once 'tasks.php';

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
    case 'nombre':

        break;
    case 'profesor':

        break;
    default:
        echo 'error!';
        break;
}
