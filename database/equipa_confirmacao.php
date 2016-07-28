<?php

include_once($BASE_DIR .'database/equipas.php');

function getConfirmacoes() {
    global $conn;
    $stmt = $conn->prepare("
SELECT confirmacao.confirmacao_id, confirmacao.confirmacao_data ,equipa.nome, equipa.username
FROM confirmacao JOIN equipa on(confirmacao.equipa_id = equipa.equipa_id)
");
    $stmt->execute();
    return $stmt->fetchAll();
}


function getConfirmacoesByDate($date) {
    global $conn;
    $stmt = $conn->prepare("
SELECT confirmacao.confirmacao_id, equipa.nome, equipa.username
FROM confirmacao JOIN equipa on(confirmacao.equipa_id = equipa.equipa_id)
WHERE confirmacao.confirmacao_data = ?
");
    $stmt->execute(array($date));
    return $stmt->fetchAll();
}


function registaEquipa($username,$date) {

    $equipa_id = getEquipaId($username)[0]['equipa_id'];

    global $conn;

    $stmt = $conn->prepare("INSERT INTO confirmacao(confirmacao_data,equipa_id) VALUES (?, ?)");
    $stmt->execute(array($date, $equipa_id));
}

function removeEquipa($username,$date) {

    $equipa_id = getEquipaId($username)[0]['equipa_id'];

    global $conn;

    $stmt = $conn->prepare("DELETE FROM confirmacao
WHERE confirmacao_data = ? AND equipa_id = ?");
    $stmt->execute(array($date, $equipa_id));
}

function getConfirmacoesMesAno($year,$month) {

    global $conn;
    $stmt = $conn->prepare("SELECT date_part('day',confirmacao_data) as dia,equipa.nome
FROM confirmacao
  JOIN equipa ON confirmacao.equipa_id = equipa.equipa_id
WHERE date_part('year',confirmacao_data) = ? AND date_part('month',confirmacao_data) = ?
ORDER BY date_part('day',confirmacao_data)");
    $stmt->execute(array($year, $month));
    return $stmt->fetchAll();

}

?>