<?php
require_once 'db.php';
require_once 'tabla.php';

function showHome() {
    showMaterias();
}

function showMaterias() {
    $materia = getMaterias();
}