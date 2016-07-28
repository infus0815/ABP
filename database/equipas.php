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

?>
