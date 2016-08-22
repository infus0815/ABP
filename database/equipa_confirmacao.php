<?php

include_once($BASE_DIR .'database/equipas.php');

function getDisponibilidade($escalao_id) {
    global $conn;
    $stmt = $conn->prepare("
SELECT disponibilidade.disponibilidade_id, agenda.data,agenda.agenda_id, agenda.horario, equipa.nome, equipa.username
FROM disponibilidade
JOIN equipaEscalao ON(disponibilidade.equipaescalao_id = equipaEscalao.equipaescalao_id)
JOIN equipa ON(equipaEscalao.equipa_id = equipa.equipa_id)
JOIN agenda ON(agenda.agenda_id = disponibilidade.agenda_id)
WHERE equipaEscalao.escalao_id = ?
");
    $stmt->execute(array($escalao_id));
    return $stmt->fetchAll();
}


function getDisponibilidadeByDate($date) {
    global $conn;
    $stmt = $conn->prepare("
SELECT disponibilidade.disponibilidade_id, equipa.nome, equipa.username
FROM disponibilidade 
JOIN equipaEscalao ON(disponibilidade.equipaescalao_id = equipaEscalao.equipaescalao_id)
JOIN equipa ON(equipaEscalao.equipa_id = equipa.equipa_id)
JOIN agenda ON(agenda.agenda_id = disponibilidade.agenda_id)
WHERE agenda.data = ?
");
    $stmt->execute(array($date));
    return $stmt->fetchAll();
}

function getDisponibilidadeId($agenda_id,$equipaEscalao_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT disponibilidade.disponibilidade_id
                            FROM disponibilidade
                            WHERE disponibilidade.agenda_id = ? AND disponibilidade.equipaescalao_id = ?" );
    $stmt->execute(array($agenda_id,$equipaEscalao_id));
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

function getAgendaIds($date) {
    global $conn;
    $stmt = $conn->prepare("SELECT agenda.agenda_id
                            FROM agenda
                            WHERE agenda.data = ?" );
    $stmt->execute(array($date));
    return $stmt->fetchAll();
}

function createAgenda($date,$horario) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO agenda(data,horario) VALUES (?, ?)" );
    $stmt->execute(array($date,$horario));
}




function registaDisponibilidade($equipaEscalao_id,$date,$horario,$organizador) {

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

    $stmt = $conn->prepare("INSERT INTO disponibilidade(equipaescalao_id,agenda_id,organizador) VALUES (?, ?,?)");
    $stmt->execute(array($equipaEscalao_id,$agenda_id,$organizador));
}

function removeDisponibilidade($equipaEscalao_id,$date) {

    $agenda_ids = getAgendaIds($date);

    global $conn;


    foreach ($agenda_ids as $agenda_id) {
            
        $stmt = $conn->prepare("DELETE FROM disponibilidade WHERE agenda_id = ? AND equipaescalao_id = ?");
        $stmt->execute(array($agenda_id['agenda_id'],$equipaEscalao_id));

    }

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