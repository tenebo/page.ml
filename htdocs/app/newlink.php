<?php 
$url = $_POST['url']; 
$customurl = $_POST['customurl'];
$email = $_POST['email'];
$path = "/home/vol5_5/epizy.com/epiz_25260657/communityga.epizy.com/htdocs/";
if($url !== null && $url !== ""){
if($customurl === "" || $customurl === null){
  $abc = array('q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'); 
  $name = $abc[rand(0,61)] . $abc[rand(0,61)] .$abc[rand(0,61)] .$abc[rand(0,61)]; 
  while (is_file($name)){ $name = $abc[rand(0,61)] . $abc[rand(0,61)] .$abc[rand(0,61)] .$abc[rand(0,61)]; }
  $file = fopen($path . $name, "w"); 
  fwrite( $file, "<head><meta http-equiv='refresh' content='0;url=" . "/save.php?u=" . $name . "&url=" . $url . "'></head>"); fclose($file); 
  $n_file = fopen($path . $name . "+", "w");
  fwrite($n_file, '{"ip":[],"time":[]}'); fclose($n_file);
  $result = true;
}else{
  if(is_file($customurl)){
    $name="";
    $result = false;
  }else{
    $name = $customurl;
    $file = fopen($path . $name, "w"); 
    fwrite($file, "<head><meta http-equiv='refresh' content='0;url=" . "/save.php?u=" . $name . "&url=" . $url . "'></head>"); fclose($file); 
    $n_file = fopen($path . $name . "+", "w");
    fwrite($n_file, '{"ip":[],"time":[]}'); fclose($n_file);
    $result = true;
  }
}
}else{
  $result = false;
}

if($result){
    $conn = new mysqli("sql213.epizy.com", "epiz_25260657", "rp58gBjiXo", "epiz_25260657_w788");

    $sql = "INSERT INTO url (email, aurl, burl)
    VALUES ('" . $email . "', '" . $name . "', '" . $url . "')";
    if ($conn->query($sql) === TRUE) {
        //echo "<script>alert('New record created successfully');</script>";
        echo "<meta http-equiv='refresh' content='0;url=/app/'>";
    } 
    $conn->close();
}
?>