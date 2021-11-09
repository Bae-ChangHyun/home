<?php
	require_once("db.php");

	$bname = $_GET['id'];
	$sql = mq("delete from user where id='$bname';");

	echo "<script>alert('삭제되었습니다.');</script>";
try {
  header("Location:http://matthew624.dothome.co.kr/home/list.php");
} catch (PDOException $EXCEPTION) {
    $pdo->rollBack();
    print "오류 :".$Exception->getMessage();
}
?>
