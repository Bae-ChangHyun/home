<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="css/r_w_style.css?after" />
<?php
require_once("db.php");
require_once("config.php");
?>
</head>
<body>
  <?php if(!$userid){
    echo "<script>alert('로그인이 필요합니다');history.back();</script>";
  }
  else{}
    ?>
  <div class="side">
    <div class="title">
      Diary
    </div>
    <hr>
    <hr>
    <div><a href="board.php"><button name="write-btn2">게시판으로 돌아가기</button><a></div>
    <div id="board_write">
            <div id="write_area">
                <form action="write_ok_dev.php" method="post" enctype="multipart/form-data">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <h1 name="name" id="uname" rows="1" cols="55" ><b><?=$username?></b></h1>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용을 작성하세요" required></textarea>
                    </div>
                    <div id="in_pw">
                        <input type="password" name="pw" id="upw"  placeholder="비밀번호" required>
                    </div>
                    <div id="in_lock">
                        <input type="checkbox" value="1" name="lockpost" />해당글을 잠급니다.
                    </div>
                    <div id="in_file">
                        <input type="file" value="1" name="b_file" />
                    </div>
                    <button name="write-btn">글쓰기</button>
                </form>
            </div>
        </div>
    </body>
</html>
