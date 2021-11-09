<?php
  require_once("db.php");
  require_once("config.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>메인화면</title>

    <!-- style -->
    <link rel="stylesheet" href="css/lightslider.min.css">
    <link rel="stylesheet" href="css/add2.css">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/lightgallery.css">
    <link rel="stylesheet" href="css/mainstyle.css?after">
    <link rel="stylesheet" href="css/jquery.countup.css"/>
    <link rel="stylesheet" href="css/countdown.css"/>
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.css?after /">

    <!-- Facebook meta tags -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="반응형 사이트 만들기(title)" />
    <meta property="og:url" content="http://richclub8.dothome.co.kr/responsive/html5/index.html" />
    <meta property="og:image" content="http://richclub8.dothome.co.kr/assets/ico/icon.png" />
    <meta property="og:site_name" content="반응형 사이트 만들기(site_name)" />
    <meta property="og:description" content="반응형 사이트 따라하기(description)" />

    <!-- twitter meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@webstoryboy" />
    <meta name="twitter:title" content="반응형 사이트 만들기(title)" />
    <meta name="twitter:description" content="반응형 사이트 만들기(description)." />
    <meta property="twitter:image" content="http://richclub8.dothome.co.kr/assets/ico/icon.png" />

    <!-- 파비콘 -->
    <link rel="shortcut icon" href="icon/favicon.ico">
    <link rel="icon" href="path/to/favicon.png">


    <!-- 웹 폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- HTLM5shiv ie6~8 -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script type="text/javascript">
            alert("현재 당신이 보는 브라우저는 지원하지 않습니다. 최신 브라우저로 업데이트해주세요!");
        </script>
    <![endif]-->
</head>
<body>
    <header id="header">
      <?php require_once("config.php");  ?>
        <div class="container">
            <div class="row">
                <div class="header">
                    <div class="header_menu">
                      <?php
                				if(!$userid){
                			?>
                	      <a href="login.php">로그인</a>
                        <a href="join.php">회원가입</a> <?php } else { ?>
                          <a href="#"><b><?=$username ?></b>님</a>
                                  <?php if($userid=="admin"){ ?>
                                    <a href="logout.php">로그아웃</a> <a href="list.php">정보수정</a>
                                  <?php }
                                   else{ ?>  <a href="logout.php">로그아웃</a> <?php  }  ?>
                          <?php
                            }
                          ?>
                    </div>
                    <!-- //header_menu -->
                    <div class="header_tit">
                        <?php if($userid=="matthew624"||$userid=="lyg6452") { ?>
                        <h1>우리가 사귄지 벌써..</h1>
                      <?php } else { ?>
                      <h1>제대까지...</h1>  <?php } ?>
                    </div>
                    <?php if($userid=="matthew624"||$userid=="lyg6452") { ?>
                      <div id="countdown"></div>
                      <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
                      <script src="js/jquery.countup.js"></script>
                      <script src="js/script.js"></script>
                    <?php } else { ?>
                      <div id="counter"></div>
                      <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
                      <script type="text/javascript" src="js/jquery.countdown.js"></script>
                      <script type="text/javascript" src="js/script2.js?ver=1"></script> <?php } ?>
                </div>
            </div>
        </div>
    </header>

    <nav id="nav">
		<div class="container">
			<div class="row">
				<div class="nav">
					<h2 class="ir_su">전체 메뉴</h2>
					<div>
			            <h3>개발예정입니다.</h3>
			            <ol>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			            </ol>
			        </div>
			        <div>
			            <h3>개발예정입니다.</h3>
			            <ol>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
                    <li><a href="#">개발예정입니다.</a></li>
			            </ol>
			        </div>
			        <div>
			            <h3>개발예정입니다.</h3>
			            <ol>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			                <li><a href="#">개발예정입니다.</a></li>
			            </ol>
			        </div>
				</div>
			</div>
		</div>
	</nav>
	<!-- //nav -->

    <article id="title">
		<div class="container">
			<div class="title">
				<h2>"창현이의 웹사이트"</h2>
				<a href="#" class="btn"><i class="fa fa-angle-down" aria-hidden="true"></i><span class="ir_su">전체메뉴 보기</span></a>
			</div>
		</div>
	</article>
	<!-- //title -->

    <main>
        <section id="contents">
            <div class="container">
				<h2 class="ir_su">반응형 사이트 컨텐츠</h2>
                <section id="cont_left">
                    <h3 class="ir_su">메뉴 및 게시판 컨텐츠 영역</h3>
                    <article class="column col1">
                        <h4 class="col_tit">Menu</h4>
                        <p class="col_desc"></p>
						<!-- 메뉴 -->
						<div class="menu">
							<ul>
                <?php if($userid=="baedoksa"||$userid=="csy6424"){
                  ?> <li><a href="board_fam.php">가족게시판 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li> <?php
                } else if($userid=="lyg6452"||$userid=="matthew624"||$userid=="admin"){ ?>
                  <li><a href="board.php">커플게시판 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li> <?php
                } else{ ?> <li><a href="#">로그인후 이용가능합니다. <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li> <?php } ?>
                <li><a href="board_dev.php">개발일지<i class="fa fa-angle-double-right" aria-hidden="true"ver></i></a></li>
								<li><a href="index.php">갤러리(미완성) <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                <?php if($userid=="matthew624"||$userid=="lyg6452"||$userid=="admin"){
                ?> <li><a href="mp3.php">녹음게시판? <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li> <?php } ?>
								<li><a href="#">추가예정 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
								<li><a href="#">추가예정 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
								<li><a href="#">추가예정 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<!--//메뉴 -->
                    </article>
                    <!-- //col1 -->

                    <article class="column col2">
						<h4 class="col_tit">Notice</h4>
            <p class="col_desc"></p>
						<!-- 게시판 -->

						<!--//게시판 -->
						<!-- 게시판2 -->
						<div class="notice2 mt15">
							<h5>개발자게시판</h5>
              <table class="mainbox1">
                  <?php
                      if (isset($_GET['page'])) {
                          $page = $_GET['page'];
                      } else {
                          $page = 1;
                      }
                            $sql = mq("select * from board_dev");
                            $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
                            $list = 3; //한 페이지에 보여줄 개수
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

                            $sql2 = mq("select * from board_dev order by idx desc limit $start_num, $list");
                            while ($board = $sql2->fetch_array()) {
                                $title=$board["title"];
                                if (strlen($title)>30) {
                                    $title=str_replace($board["title"], mb_substr($board["title"], 0, 30, "utf-8")."...", $board["title"]);
                                }
                                $sql3 = mq("select * from reply_dev where con_num='".$board['idx']."'");
                                $rep_count = mysqli_num_rows($sql3); ?>
                <tbody>
                  <tr>
                    <td width="500">
                      <?php
                        $lockimg = "<img src='img/lock.png' alt='lock' title='lock' width='5' height='5' />";
                                if ($board['lock_post']=="1" && $userid!="admin") { ?>
                          <span class="locki">&#xf023;</span><a href='ck_read_dev.php?idx=<?php echo $board["idx"];?>'><?php echo $title ; ?><?php
                        } else {?>

                      <a href='read_dev.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title; ?> <?php } ?></a></td>
                  </tr>
                </tbody>
                <?php
                            } ?>
              </table>
              		<a href="board_dev.php" class="more" title="더 보기">More <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
						</div>
					</article>
					<!-- //col2 -->

                    <article class="column col3">
						<h4 class="col_tit">업데이트예정</h4>
						<p class="col_desc">추후에 업데이트될 예정입니다.</p>
						<!-- blog -->
						<div class="blog1">
							<h5 class="ir_su">Image1</h5>
							<figure>
                                <img src="img/res/blog4_@1.jpg" class="img-normal" alt="normal image">
                                <img src="img/res/blog4_@2.jpg" class="img-retina" alt="retina image">
                                <figcaption>반응형 웹 사이트 이미지 글입니다. 반응형 웹 사이트 이미지 글입니다. 반응형 웹 사이트 이미지 글입니다. 반응형 웹 사이트 이미지 글입니다.</figcaption>
							</figure>
						</div>
						<!--//blog -->
						<!-- blog2 -->
						<div class="blog2 mt15">
							<div class="img-retina">
							    <h5>Image2</h5>
							</div>
                            <p>반응형 웹 사이트 이미지 글입니다. 반응형 웹 사이트 이미지 글입니다. 반응형 웹 사이트 이미지 글입니다.</p>
						</div>
						<!--//blog2 -->
					</article>
					<!-- //col3 -->
                </section>
                <!-- //cont_left -->

                <section id="cont_center">
                    <h3 class="ir_su">반응형 사이트 가운데 컨텐츠</h3>
                    <article class="column col4">
                        <h4 class="col_tit">Best picture</h4>
						<p class="col_desc">가장 잘나온 셀카들</p>
						<!-- 이미지 슬라이드 -->
            <div class="demo">
              <ul class="lightSlider">
                <?php if($userid=="matthew624" || $userid=="lyg6452"){ ?>
                  <li data-thumb="img/mainpage/001.jpg">
                    <img src="img/mainpage/001.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/002.jpg">
                    <img src="img/mainpage/002.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/003.jpg">
                    <img src="img/mainpage/003.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/004.jpg">
                    <img src="img/mainpage/004.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/005.jpg">
                    <img src="img/mainpage/005.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/006.jpg">
                    <img src="img/mainpage/006.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/007.jpg">
                    <img src="img/mainpage/007.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/008.jpg">
                    <img src="img/mainpage/008.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/009.jpg">
                    <img src="img/mainpage/009.jpg" />
                  </li>
                <?php }
                else if($userid=="baedoksa"||$userid=="csy6424"){ ?>
                  <li data-thumb="img/mainpage/1.jpg">
                    <img src="img/mainpage/1.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/2.jpg">
                    <img src="img/mainpage/2.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/3.jpg">
                    <img src="img/mainpage/3.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/4.jpg">
                    <img src="img/mainpage/4.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/5.jpg">
                    <img src="img/mainpage/5.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/6.jpg">
                    <img src="img/mainpage/6.jpg" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                <?php }
                else { ?>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/update.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                  <li data-thumb="img/mainpage/pdate.png">
                    <img src="img/mainpage/update.png" />
                  </li>
                    <?php
                  }  ?>
              </ul>
            </div>
						<!--//이미지 슬라이드 -->
                    </article>
                    <!-- //col4 -->

                    <article class="column col5">
                        <h4 class="col_tit">Filter Effect</h4>
						<p class="col_desc">추후에 업데이트될 예정입니다.</p>
						<!-- lightbox -->
            <?php
            $stmt = mq("select * from tbl_photos ORDER by img_id ASC");
            foreach ($stmt as $img) {
            ?>
            <?php } ?>

						<div class="lightbox square clearfix">
							<a href="<?= $img['img_path']; ?>"><img src="<?= $img['img_path']; ?>" alt="이미지"><em>blur</em></a>
							<a href="<?= $img['img_path']; ?>"><img src="<?= $img['img_path']; ?>" alt="이미지"><em>brightness</em></a>
							<a href="img/reslight03_s.jpg"><img src="img/res/light03.jpg" alt="이미지"><em>contrast</em></a>
							<a href="img/res/light04_s.jpg"><img src="img/res/light04.jpg" alt="이미지"><em>grayscale</em></a>
							<a href="img/res/light05_s.jpg"><img src="img/res/light05.jpg" alt="이미지"><em>hue-rotate</em></a>
							<a href="img/res/light06_s.jpg"><img src="img/res/light06.jpg" alt="이미지"><em>invert</em></a>
							<a href="img/res/light07_s.jpg"><img src="img/res/light07.jpg" alt="이미지"><em>opacity</em></a>
							<a href="img/res/light08_s.jpg"><img src="img/res/light08.jpg" alt="이미지"><em>saturate</em></a>
							<a href="img/res/light09_s.jpg"><img src="img/res/light09.jpg" alt="이미지"><em>sepia</em></a>
							<a href="img/res/light10_s.jpg"><img src="img/res/light10.jpg" alt="이미지"><em>Mix</em></a>
						</div>
						<!--//lightbox -->
                    </article>
                    <!-- //col5 -->

                    <article class="column col6">
						<h4 class="col_tit">Video</h4>
						<p class="col_desc">추후에 업데이트될 예정입니다.</p>
						<!-- video -->
						<!-- <video autoplay="autoplay" controls="controls" loop="loop">
							<source src="img/video.mp4" type="video/mp4">
						</video> -->
						<div class="video">
              <?php
              if($userid=="lyg6452"){ ?>
              <video src='real.mp4' width='680' height='400' controls autoplay>
                  해당 브라우저는 video 태그를 지원하지 않습니다.
             </video>
           <?php } else{ ?>
             <img src="img/mainpage/update.png" width='600' height='300' />
          <?php } ?>
						</div>
						<!--//video -->
					</article>
					<!-- //col6 -->
                </section>
                <!-- //cont_center -->
                <section id="cont_right">
                    <h3 class="ir_su">반응형 사이트 오른쪽 컨텐츠</h3>
                    <article class="column col7">
                      <h4 class="col_tit">업데이트예정</h4>
          <p class="col_desc">추후에 업데이트될 예정입니다.</p>
						<div class="side1">
                            <figure class="front">
                                <img src="img/res/face1.jpg" alt="이미지2">
                            </figure>
                            <div class="back">
                                <img src="img/res/face2.jpg" alt="이미지2">
                            </div>
                        </div>
                        <!-- side1//-->
                    </article>
                    <!-- //col7 -->

                    <article class="column col8">
                        <h4 class="col_tit">업데이트예정</h4>
						<p class="col_desc">추후에 업데이트될 예정입니다.</p>
						<!-- side2 -->
						<div class="side2">
                            <figure class="front">
                                <img src="img/res/face4.jpg" alt="이미지2">
                                <figcaption>
                                    <h3>Chang Hyun</h3>
                                </figcaption>
                            </figure >
                            <figure class="back">
                                <img src="img/res/face5.jpg" alt="이미지2">
                                <figcaption>
                                    <h3>Chang Hyun</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- side2//-->
                    </article>
                    <!-- //col8 -->

                    <article class="column col9">
                        <h4 class="col_tit">업데이트예정</h4>
						<p class="col_desc">추후에 업데이트될 예정입니다.</p>
						<!-- side3 -->
						<div class="side3">
                            <figure>
                                <img src="img/res/face3.jpg" alt="이미지3">
                                <figcaption>
                                    <h3>Chang<em>Hyun</em></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- side3//-->
                    </article>
                    <!-- //col9 -->
                </section>
                <!-- //cont_right -->
            </div>
        </section>
        <!-- //contents -->
    </main>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <ul>
                        <li><a href="#">사이트 도움말</a></li>
                        <li><a href="#">사이트 이용약관</a></li>
                        <li><a href="#">사이트 운영원칙</a></li>
                        <li><a href="#">개인정보취급방침</a></li>
                        <li><a href="#">고객센터</a></li>
                    </ul>
                    <address>
                        Copyright &copy;
                          <a href="#"><strong>Chang Hyun</strong></a>
                        All Rights Reserved.
                    </address>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- JavaScript Libraries -->
    <script src="vendor/jquery/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="js/lightslider.min.js" charset="utf-8"></script>
    <script src="js/modernizr-custom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/lightgallery.min.js"></script>
    <script>
        //접기/펼치기
        $(".btn").click(function(e){
            e.preventDefault();
            $(".nav").slideToggle();
            $(".btn").toggleClass("open");
            //var btn = $(".btn").find(">i").attr("class");
            //alert(btn);

            if($(".btn").hasClass("open")){
                //open이 있을 때
                $(".btn").find(">i").attr("class","fa fa-angle-up");
            } else {
                //open이 없을 때
                $(".btn").find(">i").attr("class","fa fa-angle-down");
            }
        });

        $(window).resize(function(){
            var wWidth = $(window).width();
            if(wWidth > 600){
                $(".nav").removeAttr("style");
            }
        });

        //라이트 박스
        $(".lightbox").lightGallery({
            thumbnail: true,
            autoplay: true,
            pause: 3000,
            progressBar: true
        });

        //이미지 슬라이더
        $(".slider").slick({
			dots: true,
			autoplay: true,
			autoplaySpeed: 3000,
			arrows: true,
			responsive: [
			    {
				    breakpoint: 768,
				    settings: {
				        autoplay: false,
			      	}
			    }
			]
    });

    $(document).ready(function() {
      $(".lightSlider").lightSlider({
        item: 3,
        auto: true,
        loop: true,
        speed: 1000,
        pause: 4000,
        gallery: true,
        slideMargin: 0,
        thumbItem: 8,
        keyPress: true,
        responsive: [{
          breakpoint: 720,
          settings: {
            item: 1
          }
        }]
      });
    });






        //sns 공유하기
        $(".facebook").click(function(e){
            e.preventDefault();
            window.open('https://www.facebook.com/sharer/sharer.php?u=' +encodeURIComponent(document.URL)+'&t='+encodeURIComponent(document.title), 'facebooksharedialog', 'menubar=no, toolbar=no, resizable=yes, scrollbars=yes, height=300, width=600');
        });
        $(".twitter").click(function(e){
            e.preventDefault();
            window.open('https://twitter.com/intent/tweet?text=[%EA%B3%B5%EC%9C%A0]%20' +encodeURIComponent(document.URL)+'%20-%20'+encodeURIComponent(document.title), 'twittersharedialog', 'menubar=no, toolbar=no, resizable=yes, scrollbars=yes, height=300, width=600');
        });
    </script>
</body>
</html>
