<!DOCTYPE html>
<html lang="ko">

<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util_signup.css">
	<link rel="stylesheet" type="text/css" href="css/main_signup.css">

	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>


</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="frm" class="login100-form validate-form" method="post" action="join_ok.php" autocomplete="off">
					</span>
					<span class="login100-form-title p-b-48">
						<a href="main.php"><i class="zmdi zmdi-font"></i></a>
					</span>

					<div class="wrap-input100 validate-input" data-validate="창빵맨">
						<input type="id" class="check" placeholder="아이디" name="id" id="id" maxlength="15"><br>
						<button type="button" id="ID_dupl_btn">ID 중복확인</button>
						<span id="ID_dupl_resTxt"></span>
					</div>

					<script>
						$(document).ready(function(){

							var frm = $("form[name='frm']");
							var uID = frm.find("input[name='id']");
							var duplBool = false;
							var ID_dupl_btn = frm.find("#ID_dupl_btn");
							var ID_dupl_resTxt = frm.find("#ID_dupl_resTxt");

							ID_dupl_btn.click(function(){

								if( uID.val() == "" ){
									alert('ID를 입력해주세요.');
									return false;
								}

								var param = encodeURI('id='+uID.val());
								ID_dupl_resTxt.load('idCheck.php?' + param, complete);

								function complete(){
									var res = $("#id_res_Bool").text();
									//console.log( res );
									duplBool=eval(res);
									if(duplBool==true){
 			              $("#id").attr('readonly', 'readonly');
 		 							}
								}
							});
							//폼이전송 되면
							frm.submit(function(){
								if( duplBool==false ){
									alert("아이디 중복확인을 해주세요.");
									return false;
								}
								if( $("#pass").val()!=$("#pass_confirm").val()){
									alert("비밀번호가 일치하지 않습니다.");
									return false;
								}
							});

						});
					</script>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input type="password" class="input100" placeholder="비밀번호" name="pass" id="pass" maxlength="20">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input type="password" class="input100" placeholder="비밀번호 확인" name="pass_confirm" id="pass_confirm" maxlength="20">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid name is: 홍길동">
						<input type="text" class="input100" placeholder="이름" name="name" id="name" maxlength="20">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid number is: 010-1234-5678">
						<input type="tel" class="input100" placeholder="전화번호" name="phone" id="phone" maxlength="20">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						<input type="email" class="input100" placeholder="이메일" name="email" id="email" maxlength="80">
					</div>



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								sign up
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main_signup.js"></script>

</body>

</html>
