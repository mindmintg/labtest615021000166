<?php
    echo $_POST['major_id'].'<br>';
    echo $_POST['major_name'].'<br>';
    echo $_POST['major_day'].'<br>';
    echo $_POST['major_time'].'<br>';

    require_once("condb.php");

    $sql = "INSERT INTO major_day (major_id,major_name,major_day,major_time)
    VALUES ('{$_POST['major_id']}','{$_POST['major_name']}','{$_POST['major_day']}','{$_POST['major_time']}')";
if ($conn->query($sql)===TRUE) {
    echo "New record insert successfully";
  }
  else{
      echo "Error" . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>