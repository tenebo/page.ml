
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function checkeds() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
    <script data-ad-client="ca-pub-7412478711619182" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<meta charset="utf-8" />
	<title>Shorten URL service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
      background-image: url('/');
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }
    .bgcolor{
        background-color:rgb(230, 230, 255);
    }
.clear_3 {
  border: 0px; 
  padding: 0px;
  margin:0px;
}
    </style>
    <script>
        function clickEvent(event) {
          var x = event.key;
          if (x=="Enter" || document.getElementById("document.form.submit();") != ""){
            document.getElementById('blank').innerHTML = "<script>document.form.submit();</ script>"
          }
        }
    </script>
    <script>
closeSidebar();

function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}
function whencheck(iid, oid, oid2) {
        var checkBox = document.getElementById(iid);
        var text = document.getElementById(oid);
        var text2 = document.getElementById(oid2);
        if (checkBox.checked == true){
            text.style.display = "block";
            text2.style.display = "block";
        } else {
            text.style.display = "none";
            text2.style.display = "none";
        }
}
</script>
</head>
  <body onkeydown="clickEvent(event)" class="bgcolor">
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-blue" >
    <!--
    <header>
        <div class="w3-container">
            <div class="w3-bar">
                <a href="?=ko" class="w3-button w3-blue w3-round-xlarge">한국어</a>
            </div>
        </div>
    </header>
    -->
      <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top">URL Shortener page.ml</h1>
        <form action="/shorten.php" method="post" name="urlTypeForm" >
        <div class="w3-bar">
          <div class="fa fa-link w3-bar-item" style="font-size:36px;"></div>
          <input class="w3-input w3-round-xlarge w3-bar-item" placeholder="Paste a long URL" style="width:70%" name="url" id="url" type="url">
          <div id="blank"></div>
            <input type="submit" class="w3-button w3-round-xlarge w3-blue w3-bar-item" value="Shorten"> 
          </div>
          <div class="w3-bar">
            <input type="checkbox" id="myCheck" style="padding:0px;"class="w3-check w3-bar-item w3-large" onclick="whencheck('myCheck', 'custom', 'url_label')">
            <p class="w3-bar-item clear_3 w3-large">Use customize link</p> 
            <label class="w3-bar-item clear_3 w3-large" id="url_label" style="display:none;padding:8px;">page.ml/</label>
            <input type=text style="margine:0px;border:0px;padding:8px;display:none;" id="custom" name='customurl' class='w3-round-xlarge  w3-bar-item'>
          </div>
          <a href="/app">Login & Sign Up</a>
        </form>
      </div>
    </div>
  </body>
</html>
