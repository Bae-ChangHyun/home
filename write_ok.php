<?php
	require_once("db.php");
	require_once("config.php");
	$date = date('Y-m-d');
	$timestamp =date( 'Y-m-d H:i:s' );
	$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
	if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}

$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
$folder = "upload/".$filename;
move_uploaded_file($tmpfile,$folder);
$mqq = mq("alter table board auto_increment =1"); //auto_increment 값 초기화
  require_once("config.php");
	$sql= mq("insert into board(name,pw,title,content,date,hit,lock_post,file,timer)
	values('".$username."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."','0','".$lo_post."','".$o_name."','".$timestamp."')");
	try {
	  header("Location:http://matthew624.dothome.co.kr/home/board.php");
	} catch (PDOException $EXCEPTION) {
	    $pdo->rollBack();
	    print "오류 :".$Exception->getMessage();
	}
?>
