<?php  

include("../db_connection.php");

if(isset($_POST["addPerson"])){
    echo "222";
    $fullName = mysqli_real_escape_string($conn, $_POST["fullName"]);
    $role = mysqli_real_escape_string($conn, $_POST["role"]);
    $qualification = mysqli_real_escape_string($conn, $_POST["qualification"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $imageFile = $_FILES["imageFile"];
    $fileName = $imageFile["name"];
    $fileExtension = explode(".",$fileName);
    $extension = strtolower($fileExtension[1]);
    $extenstionArray = ["jpg","jpeg","png"];
    if(in_array($extension,$extenstionArray)){
        $uniqueId = uniqid('',true);
        $fileNameUn = $fileExtension[0] . $uniqueId . "." . $extension;
        $filePath = "../assets/uploaded_images/" . $fileNameUn;
        move_uploaded_file($imageFile["tmp_name"], $filePath);
        $sql = mysqli_query($conn, "INSERT INTO peopletbl (fullName,imageFile,role,qualification,email) VALUES('$fullName','$fileNameUn','$role','$qualification','$email')");
        if($sql == true){
            echo "
            <script>
                alert('Added successful!');
                window.location='../managePeople.php'
            </script>
        ";
        }else{
            echo "
            <script>
                alert('Sorry something went wrong!');
                window.location='../managePeople.php'
            </script>
        ";
        }
    }else{
        echo "Not found";
    }
}

















?>