<?php
header('Content-Type: text/html; charset=utf-8');
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    require_once("db.php");

   $sql = "SELECT * FROM user WHERE id='$id'";
   $result = mysqli_query($db, $sql);
   $num_match = mysqli_num_rows($result);


   if(!$num_match) {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             location.href = 'login.php';
           </script>
         ");
    } else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row['pass'];

        mysqli_close($db);
		/* 로그인 화면에서 전송된 $pass와 DB의 $db_pass의 해쉬값 비교 */
        if(!password_verify($pass, $db_pass)){
        	echo("
	              <script>
	                window.alert('비밀번호가 틀립니다!')
	                location.href = 'login.php';
	              </script>
	           ");
	           exit;
        }else {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            echo("
              <script>
                location.href = 'main.php';
              </script>
            ");
        }
     }
?>
