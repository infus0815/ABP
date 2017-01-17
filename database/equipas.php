<?php

function createUser($username, $realname, $password) {
    global $conn;
    try {
        $stmt = $conn->prepare("INSERT INTO equipa(username,nome,password) VALUES (?, ?, ?)");
        $stmt->execute(array($username, $realname, sha1($username . $password)));
    }
    catch( PDOException $Exception ) {
        return false;
    }
    return true;
}

function checkUserEquipaEscalao($username,$equipaescalao_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM equipa
                            JOIN equipaescalao ON(equipaEscalao.equipa_id = equipa.equipa_id)
                            WHERE username = ? AND equipaescalao_id = ?");
    $stmt->execute(array($username, $equipaescalao_id));
    return $stmt->fetch() == true;
}

function deleteEquipaEscalao($equipaescalao_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM equipaescalao WHERE equipaescalao_id = ?");
    $stmt->execute(array($equipaescalao_id));
    return true;
}

function createEquipaEscalaowithoutNome($equipa_id, $escalao_id) {
    global $conn;
    try {
        $stmt = $conn->prepare("INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES (?, ?)");
        $stmt->execute(array($equipa_id, $escalao_id));
    }
    catch( PDOException $Exception ) {
        return false;
    }
    return true;
}

function createEquipaEscalaowithNome($equipa_id, $escalao_id, $nome) {
    global $conn;
    try {
        $stmt = $conn->prepare("INSERT INTO equipaEscalao(nome, equipa_id,escalao_id) VALUES (?, ?, ?)");
        $stmt->execute(array($nome, $equipa_id, $escalao_id));
    }
    catch( PDOException $Exception ) {
        return false;
    }
    return true;
}

function listEquipas() {
    global $conn;
    $stmt = $conn->prepare("SELECT equipa_id,username, nome
                            FROM equipa
                            WHERE username <> 'admin'");
    $stmt->execute();
    return $stmt->fetchAll();
}

function listEscaloes() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM escalao
                            ");
    $stmt->execute();
    return $stmt->fetchAll();
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