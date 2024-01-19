<?php 
include("../db_connection.php");

if(isset($_GET["menuid"])){
    $menuId = mysqli_real_escape_string($conn, $_GET["menuid"]);
    $sql = mysqli_query($conn, "SELECT * FROM menutbl WHERE id='$menuId'");
    if($sql == true){
        $data = mysqli_fetch_array($sql);
        $res = [
            'status' => 200,
            'message'=> "Menu Found!",
            'data'=> $data
        ];
        echo json_encode($res);
        return false;
    }else{
        $res = [
            'status' => 404,
            'message'=> "Menu NOT Found!"
        ];
        echo json_encode($res);
        return false;
    }
   
}


?>