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

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


?>