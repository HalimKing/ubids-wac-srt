<?php  

include("../db_connection.php");


// creating the programme file
function createProgrammeFile($conn,$name,$content){
    $programmeLength = strlen($name);
    $fileName = "";
    for ($i=0; $i < $programmeLength; $i++) { 
        if($name[$i] != " "){
            $fileName .= $name[$i];
        }
    }
    $fileName =  strtolower($fileName . ".html") ;
    $file = fopen('../../programmes/' . $fileName,"w");
    fwrite($file,$content);
    fclose($file);
    // exit();
    
    
    addProggramme($conn, $name, $fileName);
}

// setting the post method
if(isset($_POST["addProgramme"])){ 
    $sql = mysqli_query($conn, "SELECT * FROM programmestbl WHERE programmeName='$_POST[name]'");
    if(mysqli_num_rows($sql) > 0){
        echo "
        <script>
            alert('Programme Already Exist!');
            window.location='../manageProgrammes.php'
        </script>
        ";
        return false;
    }
    createProgrammeFile($conn,$_POST["name"],$_POST["content"]);
}

// adding the data to the programme table
function addProggramme($conn, $programmeName,$filename){
    $date = date("m-d-y");
 
    $sql = mysqli_query($conn, "INSERT INTO programmestbl(programmeName,fileName,dateCreated) VALUES('$programmeName','$filename','$date')");
    if($sql == true){
        echo "
        <script>
            alert('Programme Added successful!');
            window.location='../manageProgrammes.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Error Occured!');
            
        </script>
        ";
        // window.location='../manageProgrammes.php'
        echo mysqli_error($conn);
    }
}









// ******************* Select programme ******************************
if(isset($_GET["programmeId"])){
    $id = $_GET["programmeId"];
    $sql = mysqli_query($conn, "SELECT * FROM programmestbl WHERE id='$id'");
    if($sql == true){
        $data = mysqli_fetch_array($sql);
        $filePath = "../../programmes/" . $data["fileName"];
        if(file_exists($filePath)){
            $cont = file_get_contents($filePath);
            $res = [
                'status' => 200,
                'message'=> "Programme Found!",
                'data'=> $data,
                'fileCont'=> $cont,
            ];
            echo json_encode($res);
            return false;
        }
       
       
    }else{
        $data = mysqli_fetch_array($sql);
        $res = [
            'status' => 404,
            'message'=> "Not Found!" . mysqli_error($conn),
            'data'=> $data
        ];
        echo json_encode($res);
        return false;
    }
}















// /*********************Update Programme */
if(isset($_POST["updateProgramme"])){
    $programmeId = $_POST["programmeId"];
    $content = $_POST["content"];
    $programmeName = strtolower($_POST["programmeName"]);
    $sql = mysqli_query($conn, "SELECT fileName FROM programmestbl WHERE id='$programmeId'");
    if($sql == true){
        $row = mysqli_fetch_assoc($sql);
        unlink('../../programmes/' . $row["fileName"]);
    }
 
    

    $programmeLength = strlen($programmeName);
    $fileName = "";
    for ($i=0; $i < $programmeLength; $i++) { 
        if($programmeName[$i] != " "){
            $fileName .= $programmeName[$i];
        }
    }
    $fileName =  strtolower($fileName . ".html") ;
    $file = fopen('../../programmes/' . $fileName,"w");
    fwrite($file,$content);
    fclose($file);

    $sql = "UPDATE programmestbl SET programmeName='$programmeName',fileName='$fileName' WHERE id='$programmeId'";
    if(mysqli_query($conn, $sql)){
        echo "
        <script>
            alert('Programme Updated successful!');
            window.location='../manageProgrammes.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Sorry Something Went wWrong!');
            window.location='../manageProgrammes.php'
        </script>
        ";
    }

}







// ****************************************** Delete programme **************************!SECTION

if(isset($_GET["delteProgrammeId"])){
    $programmeId = $_GET["delteProgrammeId"];
    
    $query = mysqli_query($conn, "SELECT * FROM programmestbl WHERE id='$programmeId'");

    if($query == true){
        $row = mysqli_fetch_assoc($query);
        // unlink('../../programmes/mphilprogramme.html');
        unlink('../../programmes/' . $row["fileName"]);
        $sql = mysqli_query($conn, "DELETE FROM programmestbl WHERE id='$programmeId'");
        echo "
        <script>
            alert('Programme Deleted successful!');
            window.location='../manageProgrammes.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Sorry Something Went Wrong!');
            window.location='../manageProgrammes.php'
        </script>
        ";
    }
}



























?>

































