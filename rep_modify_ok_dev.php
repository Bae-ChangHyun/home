<?php
require_once("db.php");

$rno = $_POST['rno'];
$sql = mq("select * from reply_dev where idx='".$rno."'");
$reply = $sql->fetch_array();

$bno = $_POST['b_no'];
$sql2 = mq("select * from board_dev where idx='".$bno."'");
$board = $sql2->fetch_array();

$pwk = $_POST['pw'];
$bpw = $reply['pw'];

if(password_verify($pwk, $bpw))
	{
		$sql3 = mq("update reply_dev set content='".$_POST['content']."' where idx = '".$rno."'");
		echo "<script>alert('수정되었습니다.');</script>";
	?>
	<script type="text/javascript">location.replace("read_dev.php?idx=<?php echo $board["idx"]; ?>");</script>
	<?php
	}else{
		echo "<script>alert('비밀번호가 틀립니다');history.back();</script>";
	}
 ?>
