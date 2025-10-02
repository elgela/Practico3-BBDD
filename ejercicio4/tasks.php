<?php
require_once 'tabla.php';
require_once 'db.php';
require_once 'formulario_ingreso.php';

function showTablaPagos() {
    // obtengo tabla
    $pagos = getTablaPagos();
}

function showHome() {
    showTablaPagos();
}

function addPay() {
    if (isset($_POST['deudor'], ($_POST['cuota']), ($_POST['monto']), ($_POST['fecha'])) && !empty($_POST['deudor']) && filter_var($_POST['cuota'], FILTER_VALIDATE_INT) && filter_var($_POST['monto'], FILTER_VALIDATE_FLOAT)) {
        $deudor = $_POST['deudor'];
        $cuota = (int) $_POST['cuota'];
        $monto = (float) $_POST['monto'];
        $fecha_pago = $_POST['fecha'];
    } else {
        echo 'Falta ingresar datos';
        die();
    }
    $id = insertPays($deudor, $cuota, $monto, $fecha_pago);

    header('Location: home');
}
