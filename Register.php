<?php
    $con = mysqli_connect("singlaarushisingla.000webhostapp.com", "id1613008_aa", "123456", "id1613008_attendenceplease");
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (FTname,LTname,Department.E-mail Id,Password) VALUES (?, ?, ?, ?,?)");
    mysqli_stmt_bind_param($statement, "siss", $FTname,$LTname, $Department, $E-mail Id, $Password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
