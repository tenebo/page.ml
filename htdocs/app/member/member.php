<doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Shorten URL service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://briancaffey.github.io/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>sign up page</title>
    <script>
    function checkForm() {
    var email = document.getElementById('email').value; 
    var pw = document.getElementById('pw').value;
    var pw2 = document.getElementById('pw2').value;
    if (email=="") {
        alert("Please type email");
        return false;
    } else if (pw=="") {
        alert("Please type password");
        return false;
    } else if (pw2==""){
        alert("Please type confirm password");
        return false;
    }
    if(pw.length <8) {
        alert("Password must be longer than 7");
        return false;
    }
    if(pw != pw2){
        alert("Passwords don't match");
        return false;
    }
    
}
  </script>
</head>
<body style="background-color:rgb(230, 230, 255);">    
<div class="page-content">
    <div class="wrapper">
        <div class="home">
            <h1 class="w3-jumbo w3-animate-top w3-text-blue">Sign up for page.ml</h1>
            <form name="join" method="post" action="memberSave.php" onsubmit="return checkForm()">
            <div class="fa fa-user w3-bar-item" style="font-size:36px;color:#2196F3"></div>
            <label class="w3-text-blue">Email</label>
            <input type="email" size="30" name="email" id="email" class="w3-input w3-round-xlarge w3-bar-item">
            <div class="fa fa-key"style="font-size:36px;color:#2196F3"></div>
            <label class="w3-text-blue">Password</label>
            <input type="password" size="30" name="pw" id="pw" class="w3-input w3-round-xlarge w3-bar-item">
            <div class="fa fa-key"style="font-size:36px;color:#2196F3"></div>
            <label class="w3-text-blue">Password Confirm</label>
            <input type="password" size="30" id="pw2" class="w3-input w3-round-xlarge w3-bar-item">
            <input type="submit" value="submit" class="w3-button w3-round-xlarge w3-blue w3-bar-item" value="Sign Up">
            <a href="/app/">Log in</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>