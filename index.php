<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LogIn_Ar</title>
	<link rel="stylesheet" type="text/css" href="./Module Index/Styles/index.css">
</head>
<body style="--LoginBackgroundImage: url('../../src/ecommerce.png')">
	<div id="formDisplay_ArId">
		<div class="form-container_ArClass">
			<div class="btn-box_ArClass">
				<button class="btn btn-1_ArClass" onclick="controller_Btn_SignIn('#21264D')" id="login_ArId">Sign In</button>
				<button class="btn btn-2_ArClass" onclick="controller_Btn_SignUp('#21264D')" id="register_ArId">Sign Up</button>
			</div>
			<div class="innerbox_ArClass" id="innerbox_ArId">
				<div class="col-1_ArClass">
					<form onsubmit="controller_Btn_Login(event)">
						<div class="login-form_ArClass">
							<div class="form-title_ArClass">
								<span>Sign In</span>
							</div>
							<div class="form-inputs_ArClass">
								<div class="input-box_ArClass">
									<input type="text" id="username_ArId" class="input-field_ArClass" placeholder="Username" required>
									<i class="bx bx-user icon_ArClass"></i>
								</div>
								<div class="input-box_ArClass">
									<input type="password" id="password_ArId" class="input-field_ArClass" placeholder="Password" required>
									<i class="bx bx-lock-alt icon_ArClass"></i>
								</div>
								<div class="forgot-pass_ArClass">
									<a href="#">Forgot Password?</a>
								</div>
								<div class="input-box_ArClass">
									<button type="submit" class="input-submit_ArClass">
										<span>Sign In</span>
										<i class="bx bx-right-arrow-alt_ArClass"></i>
									</button>
								</div>
							</div>
							<div class="social-login_ArClass">
								<i class="bx bxl-google_ArClass"></i>
								<i class="bx bxl-facebook_ArClass"></i>
								<i class="bx bxl-twitetr_ArClass"></i>
								<i class="bx bxl-github_ArClass"></i>
							</div>
						</div>
					</form>
				</div>

				<div class="col-2_ArClass">
					<!---Login Form--->
					<form>
						<div class="register-form_ArClass">
							<div class="form-title_ArClass">
								<span>Create Account</span>
							</div>
							<div class="form-inputs_ArClass">
								<div class="input-box_ArClass">
									<input type="text" class="input-field_ArClass" placeholder="Email" required>
									<i class="bx bx-envelope icon_ArClass"></i>
								</div>
								<div class="input-box_ArClass">
									<input type="text" class="input-field_ArClass" placeholder="Email" required>
									<i class="bx bx-envelope icon_ArClass"></i>
								</div>
								<div class="input-box_ArClass">
									<input type="text" class="input-field_ArClass" placeholder="Email" required>
									<i class="bx bx-envelope icon_ArClass"></i>
								</div>
								<div class="input-box_ArClass">
									<input type="text" class="input-field_ArClass" placeholder="Email" required>
									<i class="bx bx-envelope icon_ArClass"></i>
								</div>
								<div class="input-box_ArClass">
									<input type="text" class="input-field_ArClass" placeholder="Email" required>
									<i class="bx bx-envelope icon_ArClass"></i>
								</div>
								<div class="input-box_ArClass">
									<input type="password" class="input-field_ArClass" placeholder="Password" required>
									<i class="bx bx-lock-alt icon_ArClass"></i>
								</div>
								<div class="forgot-pass_ArClass">
									<a href="#">Forgot Password?</a>
								</div>
								<div class="input-box_ArClass">
									<button class="input-submit_ArClass">
										<span>Create Account</span>
										<i class="bx bx-right-arrow-alt_ArClass"></i>
									</button>
								</div>
							</div>
							<div class="social-login_ArClass">
								<i class="bx bxl-google_ArClass"></i>
								<i class="bx bxl-facebook_ArClass"></i>
								<i class="bx bxl-twitetr_ArClass"></i>
								<i class="bx bxl-github_ArClass"></i>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
	<!-- bector panget -->
	
	<script type="module" src="./Module Index/Client Side/Controller_Btn_SignIn.js"></script>
	<script type="module" src="./Module Index/Client Side/Controller_Btn_SignUp.js"></script>
	<!--take note auto ajust ung hight ung scroll sa gilid pag maliit-->


</body>
</html>