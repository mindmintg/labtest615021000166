<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลภาพยนต์</title>
</head>
<body>
<?php
    require_once("condb.php");
    session_start(); //โหลดข้อมูล session มาเก็บไว้ที่หน่วยความจำ สำหรับ Web Page 
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM major_movie WHERE major_member='{$_POST['major_member']}'AND major_pin='{$_POST['major_pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) { //check login
            $row = $result->fetch_assoc();
            $_SESSION["major_member"] = $row['major_member'];
        } else {
            echo "<p>รหัสผิด</p>";
            //รหัสผิด
        }
    }
    if(isset($_POST['logout'])){
        session_unset();
    }
    if(isset($_SESSION['major_member'])){
        require_once("table1.php");
    }
    else{
        require_once("login.php");
    }
    ?>
</body>
</html>