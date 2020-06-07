<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
if(isset($_GET['q']) && is_file("/home/vol5_5/epizy.com/epiz_25260657/communityga.epizy.com/htdocs/" . $_GET['q'] . "+")){
    $read_file = fopen("/home/vol5_5/epizy.com/epiz_25260657/communityga.epizy.com/htdocs/" . $_GET['q'] . "+" , "r");
    while(! feof($read_file)) {
        $line = fgets($read_file) . $line ;
    }
    fclose($read_file);
    $line = json_decode($line, true)["ip"];
    $lines = '<script type="text/javascript">
      google.charts.load("current", {"packages":["geochart"], "mapsApiKey": "AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY"});
      google.charts.setOnLoadCallback(drawRegionsMap);
      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ["Country", "Popularity"],';
    $country = array();
    $users = array();
    foreach($line as $f){
        $ip_arr = json_decode(file_get_contents("http://ip-api.com/json/" . $f ), true);
        if($country[$ip_arr['country']] === null){
            $country[$ip_arr['country']] = 1;
        } else{
            $country[$ip_arr['country']]++;
        }
    }
    foreach(array_keys($country) as $f){
        $lines = $lines . '["' . $f . '", ' . $country[$f] .'],';
    }
    $lines = $lines . ']);
        var options = {colorAxis: {colors: ["#ccffff", "#4374e0"]}};
        var chart = new google.visualization.GeoChart(document.getElementById("regions_div"));
        chart.draw(data, options);
      }
    </script>';
    echo $lines;
}
?>
</head>
<body>
<div id="regions_div" width="100%"></div>
</body>