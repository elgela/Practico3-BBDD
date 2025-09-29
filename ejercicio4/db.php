<?php

function conection() {
    return new PDO('mysql:host=localhost;dbname=registropagos;charset=utf8', 'root', '');
}

function getTablaPagos() {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("SELECT * FROM pagos");
    $query->execute();

    // 3. obtengo los datos que arroja la query
    $pagos = $query->fetchAll(PDO::FETCH_OBJ);
    return $pagos;
}
$pagos = getTablaPagos();