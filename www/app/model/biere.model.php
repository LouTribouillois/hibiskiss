<?php
function getALLBieres() {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM bieres";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    return $stmt->fetchALL();
}

function getBiere($id) {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM bieres Where id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt-> bindParam(':id', $id , PDO::PARAM_INT);
    $stmt -> execute();
    return $stmt->fetch();
}