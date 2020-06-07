<?php
$email = $_POST['email'];
$pw = $_POST['pw'];
$hash_pw = hash('ripemd160', $pw);
$conn = new mysqli("sql213.epizy.com", "epiz_25260657", "rp58gBjiXo", "epiz_25260657_w788");
$sql = "SELECT email FROM member";
$result = $conn->query($sql);

$ok = true;
while($row = $result->fetch_assoc()) {
    if( $email === $row["email"]) {
        $ok = false;
    }
}
if ($ok){
    $sql = "INSERT INTO member (email, password)
    VALUES ('" . $email . "', '" . $hash_pw . "')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
        echo "<meta http-equiv='refresh' content='0;url=/app/'>";
    } 
}else {
    echo "<script>alert('aready have email');</script>";
    echo "<meta http-equiv='refresh' content='0;url=/app/'>";
}

$conn->close();

?>