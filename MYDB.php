<?php
function db_connect()
{
    $db_user="matthew624";
    $db_pass="baedoksa6424!";
    $db_host="localhost";
    $db_name="matthew624";
    $db_type="mysql";
    $dsn="$db_type:host=$db_host;dbname=$db_name;charset=utf8";

    try {
        $pdo=new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    catch (PDOException $Exception) {
        die("오류:" .$Exception->getMessage());
    }

    return $pdo;
}
