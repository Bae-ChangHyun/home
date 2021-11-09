<?php $id=$_GET["id"]; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<title>정보수정</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
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
				<form name="frm" class="login100-form validate-form" method="post" action="updatePro.php" autocomplete="off">
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<input type="hidden" name="id" value="<?php echo $id; ?>">

					<div class="wrap-input100 validate-input">
						<p><?php echo $id ?></p>
					</div>

					<script>
						$(document).ready(function(){

							var frm = $("form[name='frm']");
							//폼이전송 되면
							frm.submit(function(){
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

					<div class="wrap-input100 validate-input" data-validate="Valid name is: 창빵맨">
						<input type="text" class="input100" placeholder="이름" name="name" id="name" maxlength="20">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid number is: 010-1234-5678">
						<input type="tel" class="input100" placeholder="전화번호" name="phone" id="phone" maxlength="20">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is: abcde@google.com">
						<input type="email" class="input100" placeholder="이메일" name="email" id="email" maxlength="80">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Edit Ok
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
