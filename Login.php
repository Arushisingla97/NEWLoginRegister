<?php
    $con = mysqli_connect("singlaarushisingla.000webhostapp.com", "id1613008_aa", "123456", "id1613008_attendenceplease");
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $name, $age, $username, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["FTname"] = $FTname;
        $response["LTname"] = $LTname;
        $response["Department"] = $Department;
        $response["E-mail Id"] = $E-mail ID;
        $response["Password"] = $Password;
    }
    
    echo json_encode($response);
?>
