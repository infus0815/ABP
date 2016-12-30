<?php

function createUser($realname, $username, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?)");
    $stmt->execute(array($username, $realname, sha1($password)));
}

function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM equipa
                            WHERE username = ? AND password = ?");
    $stmt->execute(array($username, sha1($username.$password)));
    return $stmt->fetch() == true;
}


function getEquipaId($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT equipa.equipa_id
                            FROM equipa
                            WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
}

function getEquipaEscaloes($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT equipaEscalao.equipaescalao_id,escalao.escalao_id, equipaEscalao.nome AS equipaescalao_nome, escalao.nome
                            FROM equipaEscalao
                            JOIN escalao ON(equipaEscalao.escalao_id = escalao.escalao_id)
                            JOIN equipa ON(equipa.equipa_id = equipaEscalao.equipa_id)
                            WHERE equipa.username = ?
                            ORDER BY escalao.nome ASC
                            ");
    $stmt->execute(array($username));
    return $stmt->fetchAll();

}

function changePassword($username, $newPassword) {
    global $conn;
    $stmt = $conn->prepare("UPDATE equipa 
                            SET  password = ?
                            WHERE username = ?");
    return $stmt->execute(array(sha1($username.$newPassword), $username));
  }

?>