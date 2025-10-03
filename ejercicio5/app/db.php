<?php

function conection() {
    return new PDO('mysql:host=localhost;dbname=sistema_universitario;charset=utf8', 'root', '');
}

function getMaterias() {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("SELECT * FROM materia");
    $query->execute();

    // 3. obtengo los datos que arroja la query
    $materias = $query->fetchAll(PDO::FETCH_OBJ);
    return $materias;
}
$materias = getMaterias();

function insertStuff($nombre, $profesor) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("INSERT INTO materia(nombre, profesor) VALUES ('?','?')");
    $query->execute([$nombre, $profesor]);

}

function updateStuff($id) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("UPDATE materia SET nombre='?',profesor='?' WHERE id = ?");
    $query->execute([$id]);

}

function deleteStuff($id) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("DELETE FROM materia WHERE id = ?");
    $query->execute([$id]);

}
