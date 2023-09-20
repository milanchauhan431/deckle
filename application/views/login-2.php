<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url("assets/dist/img/deckle_logo.png")?>">
	<title>LOGIN | <?=SITENAME?></title>
	
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=base_url("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css?=".time())?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/login.css?=".time())?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="<?=base_url("assets/dist/img/wave.png")?>">
	<div class="container">
		<div class="img">
			<img src="<?=base_url("assets/dist/img/bg.svg")?>">
		</div>
		<div class="login-content">
			<form>
				<!-- <img src="<?=base_url("assets/dist/img/avatar.svg")?>"> -->
				<img src="<?=base_url("assets/dist/img/deckle_text_logo.png")?>">
           		<div class="input-div one userName">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
					  	<h5>Username</h5>
           		   		<input type="text" class="input" name="userName" id="userName" placeholder="">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
					  	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" id="password" placeholder="">
            	   </div>
            	</div>
                <div class="rememberMe icheck-success">
                    <input type="checkbox" id="rememberMe" onclick="lsRememberMe()">
                    <label for="rememberMe">
                        Remember Me
                    </label>
                </div>
                <div class="forgotPsw">
                    <a href="#" >Forgot Password?</a>
                </div>
                
            	<input type="button" class="btn" id="login" value="Login">
            </form>
        </div>
    </div>
    
</body>
<!-- jQuery -->
<script src="<?=base_url("assets/plugins/jquery/jquery.min.js?=".time())?>"></script>
<script>
const inputs = document.querySelectorAll(".input");
const rmCheck = document.getElementById("rememberMe"),emailInput = document.getElementById("userName"),password = document.getElementById("password");
$(document).ready(function(){
    if (localStorage.checkbox && localStorage.checkbox !== "") {
        rmCheck.setAttribute("checked", "checked");
        emailInput.value = localStorage.username;
        password.value = localStorage.password;
		$(".userName,.pass").addClass('focus');
    } else {
        rmCheck.removeAttribute("checked");
        emailInput.value = "";
        password.value = "";
    }

	$(document).on('click','#login',function(){
		window.location.href = '<?=base_url("dashboard")?>';
	});
});


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});


function lsRememberMe() {
    if (rmCheck.checked && emailInput.value !== "") {
        localStorage.username = emailInput.value;
        localStorage.password = password.value;
        localStorage.checkbox = rmCheck.value;
    } else {
        localStorage.username = "";
        localStorage.password = "";
        localStorage.checkbox = "";
    }
}
</script>
</html>