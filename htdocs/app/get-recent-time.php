<ul>
<?php
$pin = $_GET['q'];
$c1 = 0;
$line = "";
if(isset($_GET['q']) && is_file("/home/vol5_5/epizy.com/epiz_25260657/communityga.epizy.com/htdocs/" . $_GET['q'] . "+")){
    $read_file = fopen("/home/vol5_5/epizy.com/epiz_25260657/communityga.epizy.com/htdocs/" . $_GET['q'] . "+" , "r");
    while(! feof($read_file)) {
        $line = fgets($read_file) . $line ;
    }
    fclose($read_file);
    $line = json_decode($line, true)["time"];
    if ((int)sizeof($line)< 9){
        $len = (int)sizeof($line);
    }else{
        $len = 9;
    }
    for($i=0;$i<$len;$i++){
        echo "<li>" .  strval($line[(int)sizeof($line)-$i-1]) . "</li>\n";
    }
}
?>
</ul>