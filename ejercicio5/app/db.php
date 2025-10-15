<?php

function conection() {
    return new PDO('mysql:host=localhost;dbname=sistema_universitario;charset=utf8', 'root', '');
}

function getStuff() {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("SELECT * FROM materia INNER JOIN carrera ON materia.id_carrera = carrera.id");
    $query->execute();

    // 3. obtengo los datos que arroja la query
    $materias = $query->fetchAll(PDO::FETCH_OBJ);
    return $materias;
}
$materias = getStuff();

// inserta en la base de datos
function insertStuff($nombre_materia, $profesor, $nombre_carrera, $anios) {
    $db = conection();

    // 1. Buscar si la carrera ya existe
    $query = $db->prepare("SELECT id FROM carrera WHERE nombre_carrera = ?");
    $query->execute([$nombre_carrera]);
    $carrera = $query->fetch(PDO::FETCH_ASSOC);

    if ($carrera) {
        $id_carrera = $carrera['id'];
    } else {
        // 2. Insertar nueva carrera
        $insertCarrera = $db->prepare("INSERT INTO carrera (nombre_carrera, anios) VALUES (?, ?)");
        $insertCarrera->execute([$nombre_carrera, $anios]);
        $id_carrera = $db->lastInsertId();
    }

    // 3. Insertar materia con el id_carrera
    $insertMateria = $db->prepare("INSERT INTO materia (nombre_materia, profesor, id_carrera) VALUES (?, ?, ?)");
    $insertMateria->execute([$nombre_materia, $profesor, $id_carrera]);
}

function getStuffById($id) {
    $db = conection();
    $query = $db->prepare("SELECT nombre_materia FROM materia WHERE materia.id = ?");
    $query->execute([$id]);
    return $id;
}

// actualizar
function conectStuffById($id) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("SELECT * FROM materia WHERE materia.id = ?");
    $query->execute([$id]);
    return $id;
}

// eliminar
function deleteStuff($id) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("DELETE FROM materia WHERE materia.id_carrera = ?");
    $query->execute([$id]);

}

function searchStuff($id) {
    $db = conection();
    $query = $db->prepare("SELECT * FROM materia WHERE anios = ?");
    $query->execute([$id]);
}
