<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Dashboard | page.ml</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://briancaffey.github.io/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
function copytext(id) {
  var copyText = document.getElementById(id);
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function opennewtab(){
document.getElementById('modal').style.display = 'block';
}
function closetab(){
document.getElementById('modal').style.display = 'none';
}

closeSidebar();

function clickEvent(event) {
    var x = event.key;
    if (x=="Enter" || document.getElementById("document.form.submit();") != ""){
    document.getElementById('blank').innerHTML = "<script>document.form.submit();</ script>"
    }
}
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
<script>
function loadDoc(id,pin) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(id).innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "get-total.php?q="+pin, true);
  xhttp.send();
}
function loadRecentClick(id,pin) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(id).innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "get-recent-time.php?q="+pin, true);
  xhttp.send();
}

function realtimeClock() {
  loadRecentClick('recent-click', "<?php echo $_GET['q']; ?>");
  loadDoc('total-clicks', "<?php echo $_GET['q']; ?>");
  setTimeout("realtimeClock()", 5000);
}
</script>
</head>
<?php
//session_start();
if(!isset($_SESSION['userid'])){
    echo '<body style="background-color:rgb(230, 230, 255);">    <div class="page-content">
      <div class="wrapper">
        <div class="home">
        <h1 class="w3-jumbo w3-animate-top w3-text-blue">Log In to page.ml</h1>
        <form method="post" action="/app/member/login_ok.php">
            <div class="fa fa-user w3-bar-item" style="font-size:36px;color:#2196F3"></div>
            <label class="w3-text-blue">Email</label>
            <input class="w3-input w3-round-xlarge w3-bar-item"   name="userid" type="email">
            <div class="fa fa-key"style="font-size:36px;color:#2196F3"></div>
            <label class="w3-text-blue">Password</label>
            <input type="password" name="userpw" class="w3-input w3-round-xlarge">
            <input type="submit" class="w3-button w3-round-xlarge w3-blue w3-bar-item" value="Log In">
            <a href="/app/member/member.php">Sign Up</a>
        </form>
        </div>
      </div>
    </div>
    </body>';
}else{
$conn = new mysqli("sql213.epizy.com", "epiz_25260657", "rp58gBjiXo", "epiz_25260657_w788");
$sql = "SELECT * FROM url WHERE email='" . $_SESSION['userid'] . "' ORDER BY burl";
$result = $conn->query($sql);
$main = "";
$c=0;
$dot = "'";
$time_title = "";
$location_title ="";
$c1 = 0;
$time_line = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $main =  '<tr><th><a href="?q=' . $row['aurl'] . '"><b>' . $row['burl']. '</b></a><br>https://page.ml/' . $row['aurl'] .'</th></tr>'. $main;
        $c++;
    }
} else {
    $main =  "0 results";
}
$conn->close();
if(isset($_GET['q']) && is_file("/home/vol5_5/epizy.com/epiz_25260657/communityga.epizy.com/htdocs/" . $_GET['q'] . "+")){
    $reloadButton = '<button class="w3-button w3-blue w3-tiny w3-round-xlarge" onclick="document.getElementById(' . $dot . 'geo' . $dot .').contentWindow.location.reload()">Reload</button>';
    $time_line = '<input readonly id="copylink" value="https://page.ml/' . $_GET['q'] . '"><button class="w3-button w3-blue w3-round-xlarge w3-tiny" onclick="copytext(' . $dot . 'copylink'. $dot . ')">Copy Link</button>';
    $time_title = '<h2>Recent 10 click time(UTC)</h2>';
    $location_title = '<h2>Location</h2>';
}
$lines = '<iframe id="geo" src="get-geo-map.php?q=' .  $_GET['q'] . '" width="100%" height="400px" style="border:none;">
</iframe>';
    echo '<body onload="realtimeClock()">
    <div class="w3-container">
        <header>
            <a href="/app/" class="w3-button w3-round-large  w3-large w3-white w3-bar-item"><img src="/css/img/page-ml-logo.png" style="height:30px;"></a>
            <button onclick="opennewtab()" class="w3-button w3-round-large  w3-large w3-white w3-bar-item w3-text-blue"><b>Create New link</b></button>
            <a href="/app/member/logout.php" class="w3-button w3-round-large  w3-large w3-white w3-bar-item w3-text-blue"><b>Log Out</b></a>
        </header>
        <div class="w3-third">
          <table class="w3-table w3-striped w3-bordered"><tr><td> ' . $c . ' links </td></tr>' . $main .
                                     
          '</table>
          </div>
        <div class="w3-twothird">
            <h1 id="total-clicks"> </h1> 
            '. $time_line . '
            <hr>
            <div class="w3-half">
                ' .$location_title . '
                ' . $lines . $reloadButton . '
            </div>
            <div class="w3-half">
                ' . $time_title . '
                <p id="recent-click"></p>
            </div>
        </div>
    </div>
<div class="w3-modal" id="modal" style="display:none;">
    <div class="w3-modal-content w3-animate-zoom">
        <header class="w3-container w3-blue"> 
            <br>
            <br>
            <span onclick="closetab()" 
        class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container">
          <form action="newlink.php" method="post" >
            <input name="url" type="url" placeholder="Put a long URL in here">
            <input name="customurl" type="text" placeholder="Custom URL">
            <input type="hidden" name="email" value="' . $_SESSION["userid"] . '">
            <input type="submit" value="Shorten">
          </form>
        </div>
        <footer class="w3-container">
            <br>
            <br>
        </footer>
    </div>
</div>
</body>';
}
?>
</html>