?php
    $con = mysqli_connect("localhost", "id1613008_aa", "123456", "id1613008_attendenceplease");
    
    $FTname = $_POST["FTname"];
    $LTname = $_POST["LTname"];
    $Email = $_POST["Email"];
    $Department = $_POST["Department"];
    $Password = $_POST["Password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (FTname,LTname,Department,Email,Password) VALUES (?, ?, ?, ?,?)");
    mysqli_stmt_bind_param($statement, "sssss", $FTname,$LTname, $Department, $Email, $Password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
