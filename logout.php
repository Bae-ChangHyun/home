<?php
header('Content-Type: text/html; charset=utf-8');
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  echo("
       <script>
  		  alert('로그아웃 했습니다.');
          location.href = 'main.php';
         </script>
       ");
?>
