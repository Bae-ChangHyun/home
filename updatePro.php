<?php
header('Content-Type: text/html; charset=utf-8');
$id   = $_REQUEST['id'];
$pass = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT); // 입력받은 패스워드를 해쉬값으로 암호화
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email  = $_REQUEST['email'];
$job  = $_REQUEST['mySelect'];

require_once("MYDB.php");
$pdo=db_connect();

try {
    $pdo->beginTransaction();
    $sql="update user set pass=?,name=?,phone=?,email=?,reg_date=now() where id=? ";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $pass, PDO::PARAM_STR);
    $stmh->bindValue(2, $name, PDO::PARAM_STR);
    $stmh->bindValue(3, $phone, PDO::PARAM_STR);
    $stmh->bindValue(4, $email, PDO::PARAM_STR);
    $stmh->bindValue(5, $id, PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit();
    echo "
      <script>
        alert('수정이 완료 되었습니다.');
        location.href = 'list.php';
      </script>
    ";
} catch (PDOException $EXCEPTION) {
    $pdo->rollBack();
    print "오류 :".$Exception->getMessage();
}
?>
