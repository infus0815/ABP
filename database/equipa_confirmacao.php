<?php

include_once($BASE_DIR .'database/equipas.php');

function getDisponibilidade() {
    global $conn;
    $stmt = $conn->prepare("
SELECT disponibilidade.disponibilidade_id, agenda.data,agenda.agenda_id, agenda.horario, equipa.nome, equipa.username
FROM disponibilidade 
JOIN equipa ON(disponibilidade.equipa_id = equipa.equipa_id)
JOIN agenda ON(agenda.agenda_id = disponibilidade.agenda_id)
");
    $stmt->execute();
    return $stmt->fetchAll();
}


function getConfirmacoesByDate($date) {
    global $conn;
    $stmt = $conn->prepare("
SELECT disponibilidade.disponibilidade_id, equipa.nome, equipa.username
FROM disponibilidade JOIN equipa ON(disponibilidade.equipa_id = equipa.equipa_id)
JOIN agenda ON(agenda.agenda_id = disponibilidade.agenda_id)
WHERE agenda.data = ?
");
    $stmt->execute(array($date));
    return $stmt->fetchAll();
}

function getDisponibilidadeId($agenda_id,$equipa_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT disponibilidade.disponibilidade_id
                            FROM disponibilidade
                            WHERE disponibilidade.agenda_id = ? AND disponibilidade.equipa_id = ?" );
    $stmt->execute(array($agenda_id,$equipa_id));
    return $stmt->fetch();
}



//AGENDA

function getAgendaId($date,$horario) {
    global $conn;
    $stmt = $conn->prepare("SELECT agenda.agenda_id
                            FROM agenda
                            WHERE agenda.data = ? AND agenda.horario = ?" );
    $stmt->execute(array($date,$horario));
    return $stmt->fetch();
}

function createAgenda($date,$horario) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO agenda(data,horario) VALUES (?, ?)" );
    $stmt->execute(array($date,$horario));
}




function registaEquipa($username,$date,$horario,$organizador) {

    $equipa_id = getEquipaId($username)[0]['equipa_id'];


    $result = getAgendaId($date,$horario);
    $agenda_id;
    if($result) {

        $agenda_id = $result['agenda_id'];

    }
    else {

        createAgenda($date,$horario);
        $agenda_id = getAgendaId($date,$horario)['agenda_id'];

    }

    global $conn;

    $stmt = $conn->prepare("INSERT INTO disponibilidade(equipa_id,agenda_id,organizador) VALUES (?, ?,?)");
    $stmt->execute(array($equipa_id,$agenda_id,$organizador));
}

function removeEquipa($username,$date,$horario) {

    $equipa_id = getEquipaId($username)[0]['equipa_id'];
    $agenda_id = getAgendaId($date,$horario)['agenda_id'];
    $disponibilidade_id = getDisponibilidadeId($agenda_id,$equipa_id)['disponibilidade_id'];

    global $conn;

    $stmt = $conn->prepare("DELETE FROM disponibilidade WHERE disponibilidade_id = ?");
    $stmt->execute(array($disponibilidade_id));
}

function getConfirmacoesMesAno($year,$month) {

    global $conn;
    $stmt = $conn->prepare("SELECT date_part('day',agenda.data) AS dia,equipa.nome
    FROM disponibilidade
  JOIN equipa ON disponibilidade.equipa_id = equipa.equipa_id
  JOIN agenda ON(agenda.agenda_id = disponibilidade.agenda_id)

WHERE date_part('year',agenda.data) = ? AND date_part('month',agenda.data) = ?
ORDER BY date_part('day',agenda.data)");
    $stmt->execute(array($year, $month));
    return $stmt->fetchAll();

}

?>