<?php  

    $conn = mysqli_connect("localhost","root","","wac_srt");
    if(!$conn){
        die("Connection to the server failed : " . mysqli_connect_error());
    }


?>