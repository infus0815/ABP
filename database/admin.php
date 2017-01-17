<?php
//ADMIN STUFF
function disableMonth($month , $year) {
    global $conn;
    try {
        $stmt = $conn->prepare("INSERT INTO disabledMonth(month,year) VALUES (?,?)");
        $stmt->execute(array($month, $year));
    }
    catch( PDOException $Exception ) {
        return false;
    }
    return true;
}

function deletedisableMonth($disabledMonth_id) {
    global $conn;
    try {
        $stmt = $conn->prepare("DELETE FROM disabledMonth WHERE disabledmonth_id = ?");
        $stmt->execute(array($disabledMonth_id));
    }
    catch( PDOException $Exception ) {
        return false;
    }
    return true;
}

function listdisableMonth() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM disabledMonth
                            ");
    $stmt->execute();
    return $stmt->fetchAll();
}


?>