<?php
require_once 'tabla.php';
require_once 'db.php';

function showTablaPagos() {
    // obtengo tabla
    $pagos = getTablaPagos();
}

function showHome() {
    showTablaPagos();
}