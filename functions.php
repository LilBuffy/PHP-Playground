<?php

function CheckyThingy($value) {
    $id = filter_var($value, FILTER_VALIDATE_INT);
    if ($id === false) {
        return false;
    } else {
        return true;
    }
}

/*function getUserById(PDO $pdo, int $id): array | false {
    $fuck = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $fuck->execute(["id" => $id]);

    $WHAT = $fuck->fetch(PDO::FETCH_ASSOC);

    if ($WHAT === false) {
        return false;
    }
    return $WHAT;
}*/

