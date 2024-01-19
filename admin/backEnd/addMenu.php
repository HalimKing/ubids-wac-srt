<?php  

include("../db_connection.php");

if(isset($_POST["addMenu"])){
    $menuName = strtolower($_POST["menuName"]);

    $description = $_POST["description"];
    $sql = mysqli_query($conn, "SELECT * FROM menutbl WHERE menuName='$menuName'");
    if(mysqli_num_rows($sql) > 0){
        echo "<script>alert('Menu Already Exist!')
        window.location='../menu.php'</script>";
        return true;
    }
    $sql = mysqli_query($conn, "INSERT INTO menutbl(menuName,description) VALUES('$menuName','$description')");
    if($sql == true){
        echo "<script>alert('Successful Added!')
        window.location='../menu.php'</script>";
        return true;
    }else{
        echo "<script>alert('Sorry something went wrong!')
        window.location='../menu.php'</script>";
        return true;
    }
}


if(isset($_POST["updateMenu"])){
    $menuId = $_POST["menuId"];
    $menuName = $_POST["menuName"];
    $menuDescription = $_POST["description"];

    $sql = mysqli_query($conn, "UPDATE menutbl SET menuName='$menuName', description='$menuDescription' WHERE id='$menuId'");
    if($sql == true){
        echo "
            <script>
                alert('Update successful!');
                window.location='../menu.php'
            </script>
        ";
    }else{
        echo "
        <script>
            alert('Error occured!');
            window.location='../menu.php'
        </script>
        ";
    }


    
}

echo "gool";



if(isset($_GET["updateMenuId"])){
    $menuId = $_GET["updateMenuId"];
    $sql = mysqli_query($conn, "DELETE FROM menutbl WHERE id='$menuId'");
    if($sql == true){
        echo "
        <script>
            alert('Deleted successful!');
            window.location='../menu.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Error occured!');
            window.location='../menu.php'
        </script>
        ";
    }
    
}



?>