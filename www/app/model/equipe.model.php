<?php
function getALLEquipe() {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM equipe";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    return $stmt->fetchALL();
}
function getALLEquipeMMI() {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM equipe Where classe = 'MMI 7-8' ";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    return $stmt->fetchALL();
}
function getALLEquipeGB() {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM equipe Where classe = 'GB SEE2' ";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    return $stmt->fetchALL();
}

function getEquipe($id) {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM equipe Where id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt-> bindParam(':id', $id , PDO::PARAM_INT);
    $stmt -> execute();
    return $stmt->fetch();
}