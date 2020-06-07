<?php 
$u = $_GET["u"];
$url = $_GET['url'];
$referer = $_GET['referer'];
$f1 = fopen($u . '+' , 'r');
$IP_ARRAY = '';
while(!feof($f1)) {
  $IP_ARRAY = $IP_ARRAY . fgets($f1);
}
$IP_JSON = json_decode($IP_ARRAY, true); 
array_push($IP_JSON["ip"], $_SERVER['HTTP_X_FORWARDED_FOR']);
array_push($IP_JSON["time"], date("Y m d H i"));
fclose($f1);
$w_file = fopen($u . '+', 'w');
fwrite($w_file, json_encode($IP_JSON));
fclose($w_file);
echo "<head><meta http-equiv='refresh' content='0;url=" . $url . "'></head>"
?>