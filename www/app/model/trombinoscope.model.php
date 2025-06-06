<?php
/*
*fonction permetant de recupérer tous les etudiants
* stockés dans la base de données sous forme de tableau
*/
function getALLStudents() {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM students";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    return $stmt->fetchALL();
}

function getStudent($id) {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM students Where id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt-> bindParam(':id', $id , PDO::PARAM_INT);
    $stmt -> execute();
    return $stmt->fetch();
}