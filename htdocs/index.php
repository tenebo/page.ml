<!DOCTYPE html>
<html>
<script data-ad-client="ca-pub-7412478711619182" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169189510-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169189510-1');
</script>

<head>
<script data-ad-client="ca-pub-7412478711619182" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php
if( !isset($_SERVER['HTTPS'] ) ) {
    echo "<meta http-equiv='refresh' content='0;url=https://page.ml'>";
}
?>
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

var i;
function realtimeClock() {
    if(i==0){
        document.getElementById("tips").innerHTML = '<?php if($_COOKIE['la'] == "ko"){echo "로그인하시고 링크를 관리하고, 방문자를 분석하세요";}else{echo "Login and controll and analyze your link";}?>';
        i++;
    }else if(i==1){
        document.getElementById("tips").innerHTML = '<?php if($_COOKIE['la'] == "ko"){echo "모든 서비스는 무료이며 광고가 없습니다";}else{echo "All services are free and no Ads";}?>';
        i++;
    }else{
        document.getElementById("tips").innerHTML = '<?php if($_COOKIE['la'] == "ko"){echo "링크단축 수와 링크클릭수는 재한이 없습니다.";}else{echo "Unlimited click amounts and links";}?>';
        i=0;
    }
    setTimeout("realtimeClock()", 4000);
}

</script>
	<meta charset="utf-8" />
    <meta name="keywords" content="짧은주소, 링크축약, url단축기, 단축url, url단축, 링크단축, url 단축기, 링크 줄이기, 링크 주소 줄이기, 링크 단축, 짧은 url, url 줄이기, 주소단축, url주소, 무료, 광고없음, 무료 대시보드, 모료 통계, 간편함" />
    <link rel="stylesheet" href="https://briancaffey.github.io/css/main.css">
	<title>Shorten URL service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/f/css/main.css">
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
<body onkeydown="clickEvent(event)" onload="realtimeClock()">
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-blue bgcolor" style="height:50%;" >
        <header >
            <div class="wrapper">

            <a class="site-title" href="/">page.ml</a>

            <nav class="site-nav">
            <a href="#" class="menu-icon">
                <svg viewBox="0 0 18 15">
                <path fill="#424242" d="M18,1.484c0,0.82-0.665,1.484-1.484,1.484H1.484C0.665,2.969,0,2.304,0,1.484l0,0C0,0.665,0.665,0,1.484,0 h15.031C17.335,0,18,0.665,18,1.484L18,1.484z"/>
                <path fill="#424242" d="M18,7.516C18,8.335,17.335,9,16.516,9H1.484C0.665,9,0,8.335,0,7.516l0,0c0-0.82,0.665-1.484,1.484-1.484 h15.031C17.335,6.031,18,6.696,18,7.516L18,7.516z"/>
                <path fill="#424242" d="M18,13.516C18,14.335,17.335,15,16.516,15H1.484C0.665,15,0,14.335,0,13.516l0,0 c0-0.82,0.665-1.484,1.484-1.484h15.031C17.335,12.031,18,12.696,18,13.516L18,13.516z"/>
                </svg>
            </a>

            <div class="trigger">
                        <a class="page-link" href="/app/"><?php if($_COOKIE['la'] == "ko"){echo "로그인";}else{echo "Login";}?></a>
                        <a class="page-link" href="/app/member/member.php"><?php if($_COOKIE['la'] == "ko"){echo "회원 가입";}else{echo "Sign Up";}?></a>
            </div>
            </nav>

            </div>
        </header>
        <div class="page-content" >
            <div class="wrapper">
                <div class="home" >

                <h1 class="w3-xxxlarge w3-animate-top w3-center"><?php if($_COOKIE['la'] == "ko"){echo "주소 단축 서비스 page.ml";}else{echo "Link Shortener page.ml";}?></h1>
                <form action="/shorten.php" method="post" name="urlTypeForm" >
                    <div class="w3-bar">
                    <input class="w3-input w3-round-xlarge w3-bar-item" placeholder="<?php if($_COOKIE['la'] == "ko"){echo "주소를 붙여 넣어 주세요";}else{echo "Paste a long link";}?>" style="width:70%" name="url" id="url" type="url">
                    <div id="blank"></div>
                        <input type="submit" class="w3-button w3-round-xlarge w3-blue w3-bar-item" style="width:30%" value="<?php if($_COOKIE['la'] == "ko"){echo "단축";}else{echo "Shorten";}?>"> 
                    </div>
                    <div class="w3-bar">
                        <br>
                        <input type="checkbox" id="myCheck" style="padding:0px;"class="w3-check w3-bar-item w3-large" onclick="whencheck('myCheck', 'custom', 'url_label')">
                        <p class="w3-bar-item clear_3 w3-large"><?php if($_COOKIE['la'] == "ko"){echo "원하는 주소 쓰기";}else{echo "Use customize link";}?></p> 
                        <label class="w3-bar-item clear_3 w3-large" id="url_label" style="display:none;padding:8px;">page.ml/</label>
                        <input type=text style="margine:0px;border:0px;padding:8px;display:none;" id="custom" name='customurl' class='w3-round-xlarge  w3-bar-item'>
                    </div>
                </form>
                <br>
                
                <br>
                    <p class="w3-center w3-large" id="tips"></p>
                    <br>
                    <br>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-blue w3-round-xlarge">언어 Language</button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                            <a href="/" onclick='document.cookie = "la=en";' class="w3-button w3-bar-item">English</a>
                            <a href="/" onclick='document.cookie = "la=ko";' class=" w3-button w3-bar-item">한국어</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    </div>
  </body>
</html>
