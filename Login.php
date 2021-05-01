<?php
$Email =  filter_input(INPUT_POST, "Email");
$Kodeord =  filter_input(INPUT_POST, "Kodeord");
$Tlf =  filter_input(INPUT_POST, "Tlf");
$By =  filter_input(INPUT_POST, "By");

if (!empty($Email)){
if (!empty($Kodeord)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "info_mc";

$conn = new mysql($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'
    .mysqli_connct_error());
}
else{
    $sql = "INSERT INTO account (Email, Kodeord, Tlf, By)
    values ('$Email','$Kodeord','$Tlf','$By')";
    if($conn->query($sql)){
        echo "New record is inserted sucessfully";
    }
}

}
else{
    echo "Password is empty";
    die();
}
    }
    else{
        echo "Username is empty";
        die();
    }
?>