<?php
require_once 'db.php';
require_once './templates/tabla.php';

function showHome() {
    require_once 'templates/header.php';
    showMaterias();
    require_once 'templates/footer.php';
}

function showMaterias() {
    $materia = getMaterias();
}

function addStuff() {
    
}