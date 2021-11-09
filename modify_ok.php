<?php
	require_once("db.php");
	require_once("config.php");
	$bno = $_POST['idx'];
	$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
	if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}
  require_once("config.php");
	$sql = mq("update board set name='".$username."',pw='".$userpw."',title='".$_POST['title']."',content='".$_POST['content']."',lock_post='".$lo_post."' where idx='".$bno."'");
echo "<script>alert('수정되었습니다.');</script>";
try {
  header("Location:http://matthew624.dothome.co.kr/home/board.php");
} catch (PDOException $EXCEPTION) {
    $pdo->rollBack();
    print "오류 :".$Exception->getMessage();
}
?>
