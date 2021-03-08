<?php
    require_once("condb.php");
    if(isset($_GET['delete'])){
        echo $_GET['id']; //show id 
        $sql = "DELETE FROM major_day WHERE major_id = '{$_GET['id']}'";
        if (mysqli_query($conn, $sql)) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . mysqli_error($conn);
        }
      }


    $sql = "SELECT * FROM major_day";
    if(isset($_GET['search_click'])) {
      $sql = "SELECT * FROM major_day WHERE major_id LIKE '%{$_GET['search']}%'";
      echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
    }
    $result = $conn->query($sql);
?>
<a href="insert_from.php">เพิ่มภาพยนต์</a>
<form action="" method="get">
  <label for="search">ช่องค้นหา</label>
  <input type ="text" name = "search" id = "search">
  <button type="submit" name = "search_click">ค้นหา</button>
</form>
<form action="." method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form>

<table style="width:100%;" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>วันที่ฉาย</th>
    <th>เวลาที่ฉาย</th>    
    <th>tools</th>
  </tr>


  <?php
  if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $row['major_id'];?></td>
    <td><?php echo $row['major_name'];?></td>
    <td align = "center"><?php echo $row['major_day'];?></td>
    <td align = "center"><?php echo $row['major_time'];?></td>
    <td align = "center">
        <a href ="update_from.php?id=<?php echo $row['major_id']; ?>">แก้ไข</a>
      <a href ="?delete=1&id=<?php echo $row['major_id']; ?>">ลบ</a>
    </td>
  </tr>

  <?php 
  }
} else {
  echo "0 results";
  }
$conn->close();
?>
</table>
