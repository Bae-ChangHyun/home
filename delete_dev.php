<?php
	require_once("db.php");

	$bno = $_GET['idx'];
	$sql = mq("delete from board_dev where idx='$bno';");
	$sql2 = mq("delete from reply_fam where con_num='$bno';");

	echo "<script>alert('삭제되었습니다.');</script>";
try {
  header("Location:http://matthew624.dothome.co.kr/home/board_dev.php");
} catch (PDOException $EXCEPTION) {
    $pdo->rollBack();
    print "오류 :".$Exception->getMessage();
}
?>
