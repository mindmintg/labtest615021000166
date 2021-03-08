<?php 
    echo "กำลังค้นหา : ";
    echo $_GET['id'];
    require_once("condb.php");
    $sql = "SELECT * FROM major_day WHERE major_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
        if($result->num_rows > 0 ) {
            $row = $result->fetch_assoc();
    }
?>

<h3>แก้ไขภาพยนต์
<br>
<a href=".">ย้อนกลับ</a></h3>
 
<form action="update.php" method="post">
    
    <label for="major_id">รหัสภาพยนต์ :</label>
    <input type="hidden" name="major_id" id="major_id" value = "<?php echo $row['major_id'];?>">
    <?php echo $row['major_id'];?>
    
    <br><br>
    
    <label for="major_name">ชื่อภาพยนต์ :</label>
    <input type="text" name="major_name" id="major_name" value = "<?php echo $row['major_name'];?>">
    
    <br><br>

    <label for="major_day">วันที่ฉายภาพยนต์ :</label>
    <input type="date" name="major_day" id="major_day" value = "<?php echo $row['major_day'];?>">
    
    <br><br>

    <label for="major_time">เวลาที่ฉายภาพยนต์ :</label>
    <input type="time" name="major_time" id="major_time" value = "<?php echo $row['major_time'];?>">

    <br><br>

    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
    </form>
