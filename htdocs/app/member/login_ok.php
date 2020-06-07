<?php
session_start();
$userid = $_POST['userid'];
$userpw = $_POST['userpw'];

$userpw_hash = hash('ripemd160', $userpw);
$conn = new mysqli("sql213.epizy.com", "epiz_25260657", "rp58gBjiXo", "epiz_25260657_w788");


$sql = "SELECT email, password FROM member WHERE email='" . $userid ."'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       if( $row["password"] === $userpw_hash) {
            echo "<script>alert('You are sign in')</script>";
            echo "<meta http-equiv='refresh' content='0;url=/app/'>";   
            $_SESSION['userid'] = $userid;
       }else{
           echo "<script>alert('Wrong password')</script>";
           echo "<meta http-equiv='refresh' content='0;url=/app/'>"; 
       }
    }
} else {
    echo "<script>alert('Wrong email')</script>";
    echo "<meta http-equiv='refresh' content='0;url=/app/'>";
}

$conn->close();
?>