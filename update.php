<h1>update</h1>
<?php
    require_once("condb.php");
    $sql = "UPDATE major_day SET
    major_name = '{$_POST['major_name']}',
    major_day = '{$_POST['major_day']}',
    major_time = '{$_POST['major_time']}'
    WHERE major_id = '{$_POST['major_id']}'";

if ($conn->query($sql)===TRUE) {
    echo "New record created successfully";
  }
  else{
      echo "Error" . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>