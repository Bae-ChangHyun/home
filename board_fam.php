<?php
require_once("MYDB.php");
$pdo=db_connect();
require_once("config.php");
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="css/r_w_style.css" />
<link rel="stylesheet" href="css/board.css">
<nav>
  <ul class="nav-bar">
    <li class=nav-item><a href="main.php">Home</a></li>
    <li class=nav-item><a href="gallery.html">Gallery</a></li>
    <li class=nav-item><a href="diary.html">Diary</a></li>
  </ul>
</nav>
</head>
<body>
<div class="side">
  <div class="title">
    Diary
  </div>
  <hr>
  <hr>
  <div class="write-btn-text">
        <a href="write_fam.php"><button name="write-btn">글쓰기</button></a>
  </div>
    <table class="mainbox1">
      <thead>
          <tr>
              <th width="65">번호</th>
                <th width="480">제목</th>
                <th width="110">작성자</th>
                <th width="100">날짜</th>
                <th width="80">조회수</th>
                <?php
                require_once("config.php");
                if($userid=="admin"){
                  ?>
                  <th width="80">삭제</th> <?php
                } else { }?>
            </tr>
        </thead>
        <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            try {
                $sql="select * from board_fam";
                $stmh=$pdo->prepare($sql);
                $stmh->execute();
                $row_num=$stmh->rowCount();
              }
              catch (PDOException $EXCEPTION) {
                  print "오류 :".$Exception->getMessage();
              }
                  $list = 5; //한 페이지에 보여줄 개수
                  $block_ct = 5; //블록당 보여줄 페이지 개수

                  $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
                  $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
                  $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

                  $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
                  if ($block_end > $total_page) {
                      $block_end = $total_page;
                  } //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
                  $total_block = ceil($total_page/$block_ct); //블럭 총 개수
                  $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

                  try {
                      $sql2="select * from board_fam order by idx desc limit $start_num, $list";
                      $stmh2=$pdo->prepare($sql2);
                      $stmh2->execute();
                    }
                    catch (PDOException $EXCEPTION) {
                        print "오류 :".$Exception->getMessage();
                    }

                  while ($board = $stmh2->fetch(PDO::FETCH_ASSOC)) {
                      $title=$board["title"];
                      if (strlen($title)>30) {
                          $title=str_replace($board["title"], mb_substr($board["title"], 0, 30, "utf-8")."...", $board["title"]);
                      }
                      try {
                          $sql3="select * from reply_fam where con_num='".$board['idx']."'";
                          $stmh3=$pdo->prepare($sql3);
                          $stmh3->execute();
                          $rep_count=$stmh3->rowCount();
                        }
                        catch (PDOException $EXCEPTION) {
                            print "오류 :".$Exception->getMessage();
                        }

      ?>
      <tbody>
        <tr>
          <td width="70" class="wh2"><?php echo $board['idx']; ?></td>
          <td width="500" class="wh3">
            <?php
            $nowdate = mktime();
            $timerdate=strtotime($board["timer"]);
            $lockimg = "<img src='img/lock.png' alt='lock' title='lock' width='20' height='20' />";
              if(($timerdate>$nowdate) && ($userid!="admin")){
            $timestamp=date( 'm-d', $timerdate ); ?>
            <a href='#'><?php echo $timestamp?>일에 열립니다.</a></td>
            <td width="120" class="wh3"><?php echo $board['name']?></td>
            <td width="100" class="wh3"><?php echo $board['date']?></td>
            <td width="100" class="wh3"><?php echo $board['hit']; ?></td>
            <?php
            if($userid=="admin"){
              ?>
              <th width="80" class="wh3"><a href="delete_fam.php?idx=<?php echo $board['idx']; ?>">삭제</a></th> <?php
            } else { }?>
        </tr>
      </tbody>
      <?php
    } else{
      if ($board['lock_post']=="1" && $userid!="admin") { ?>
            <a href='ck_read_fam.php?idx=<?php echo $board["idx"];?>'><?php echo $title ; ?>---[<?php echo $rep_count; ?>]<?php echo $lockimg ; ?><?php
    } else {?>
        <a href='read_fam.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title; ?> ---[<?php echo $rep_count; ?>] <?php } ?></a></td>
        <td width="120" class="wh3"><?php echo $board['name']?></td>
        <td width="100" class="wh3"><?php echo $board['date']?></td>
        <td width="100" class="wh3"><?php echo $board['hit']; ?></td>
        <?php
        if($userid=="admin"){
            ?>
            <th width="80" class="wh3"><a href="delete_fam.php?idx=<?php echo $board['idx']; ?>">삭제</a></th> <?php
        } else { }?>
        </tr>
      </tbody>
      <?php }
    }?>
    </table>
    <div class="pagination">
        <?php
          if ($page <= 1) { //만약 page가 1보다 크거나 같다면
            echo "<a href='#'>처음</a>"; //처음이라는 글자에 빨간색 표시
          } else {
              echo "<a href='?page=1'>처음</a>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if ($page <= 1) { //만약 page가 1보다 크거나 같다면 빈값
          } else {
              $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
          }
          for ($i=$block_start; $i<=$block_end; $i++) {
              //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if ($page == $i) { //만약 page가 $i와 같다면
              echo "<a class='exp' href='#'>$i</a>"; //아니라면 $i                                                    //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            } else {
                echo "<a href='?page=$i'>$i</a>"; //아니라면 $i
            }
          }
          if ($block_num >= $total_block) { //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
          } else {
              $next = $page + 1; //next변수에 page + 1을 해준다.

          }
          if ($page >= $total_page) { //만약 page가 페이지수보다 크거나 같다면
            echo "<a href='#'>마지막</a>"; //마지막 글자에 긁은 빨간색을 적용한다.
          } else {
              echo "<a href='?page=$total_page'>마지막</a>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
        ?>
    </div>

  <div id="search_box">
    <form action="search_result.php" method="get">
      <select name="catgo">
        <option value="title">제목</option>
        <option value="name">글쓴이</option>
        <option value="content">내용</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button>검색</button>
    </form>
    </div>
  </div>
</body>
</html>
