<?php
session_start();
$res=session_destroy();
if($res){
    echo "<meta http-equiv='refresh' content='0;url=/app/'>";
}