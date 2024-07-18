<?php
$conn =mysqli_connect("localhost","root"," ","signup_form");
if(!$conn){
    echo "not connected";
}
else{
    echo "connected";
}

?>