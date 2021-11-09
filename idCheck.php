<?php
require_once("MYDB.php");
$pdo=db_connect();

$id = $_REQUEST["id"];

try {
$sql="select name from user where id=?";
$stmh=$pdo->prepare($sql);
$stmh->bindValue(1, $id);
$stmh->execute();
$LoginResult=$stmh->rowCount();
} catch (PDOException $EXCEPTION) {
    print "오류 :".$Exception->getMessage();
}

if( $LoginResult<1 ){
	echo "<span style='color:green;'>ID Available</span>\n
		  <span id='id_res_Bool' style='display:none;'>true<span>\n";
}else{
	echo "<span style='color:red;'>ID Unavailable</span>\n
		  <span id='id_res_Bool' style='display:none;'>false<span>\n"; //중복, 빨간색
}





?>
