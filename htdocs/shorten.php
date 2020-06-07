<?php 
$url = $_POST['url']; 
$customurl = $_POST['customurl'];

if($url !== "" && $url !== null){
if($customurl === "" || $customurl === null){
  $abc = array('q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'); 
  $name = $abc[rand(0,61)] . $abc[rand(0,61)] .$abc[rand(0,61)] .$abc[rand(0,61)]; 
  while (is_file($name)){ $name = $abc[rand(0,61)] . $abc[rand(0,61)] .$abc[rand(0,61)] .$abc[rand(0,61)]; }
  $file = fopen($name, "w"); 
  fwrite($file, "<head><meta http-equiv='refresh' content='0;url=" . "/save.php?u=" . $name . "&url=" . $url . "'></head>"); fclose($file); 
  $n_file = fopen($name . "+", "w");
  fwrite($n_file, '{"ip":[],"time":[]}'); fclose($n_file);
}else{
  if(is_file($customurl)){
    echo "<script>alert('Custom url was taken')</script>";
    echo "<head><meta http-equiv='refresh' content='0;url=/'></head>";
  }else{
    $name = $customurl;
    $file = fopen($name, "w"); 
    fwrite($file, "<head><meta http-equiv='refresh' content='0;url=" . "/save.php?u=" . $name . "&url=" . $url . "'></head>"); fclose($file); 
    $n_file = fopen($name . "+", "w");
    fwrite($n_file, '{"ip":[],"time":[]}'); fclose($n_file);
  }
}
}else{
  echo "<script>alert('Please type url')</script>";
  echo "<head><meta http-equiv='refresh' content='0;url=/'></head>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Global site tag (gtag.js) - Google Analytics 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162436993-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162436993-1');
</script>
-->
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
        function showqr(url){
          openSidebar("modal");
          document.getElementById('qrurl').src= 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&choe=UTF-8&chl=' + url;
        }
    </script>
    <script>
closeSidebar("modal");

function openSidebar(id) {
  document.getElementById(id).style.display = "block";
}

function closeSidebar(id) {
  document.getElementById(id).style.display = "none";
}
function copytext(id) {
  var copyText = document.getElementById(id);
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
</head>
  <body onkeydown="clickEvent(event)" class="bgcolor">
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-blue" >
      <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top">URL was shorten</h1>
        <div class="w3-bar">
          <div class="fa fa-link w3-bar-item" style="font-size:36px;"></div>
          <input class="w3-input w3-round-xlarge w3-bar-item" style="width:70%" name="url" id="url" type="url" value="https://page.ml/<?php echo $name; ?>">
          <button class="w3-button w3-round-xlarge w3-blue w3-bar-item" onclick="copytext('url')">Copy</button>
        </div>
        <button class="w3-button w3-round-xlarge w3-blue" onclick="showqr('https://page.ml/<?php echo $name; ?>')">QR code for this link</button>
        <a class="w3-button w3-round-xlarge w3-blue" href="/">Go Back</a>
      </div>
    </div>
    <div class="w3-modal" id="modal" style="display:none;">
    <div class="w3-modal-content w3-animate-zoom">
      <span onclick="closeSidebar('modal')" class="w3-button w3-display-topright">&times;</span>
      <img src="" id="qrurl">
    </div>
</div>
  </body>
</html>