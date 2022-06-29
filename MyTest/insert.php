
<?php
$connection = mysqli_connect("gpa.sci.dusit.ac.th","gpa","12345678"); #อันนี้ลองสร้างมาเทสใน localhost ก่อน
$db = mysqli_select_db($connection,'gpa_mydb');

if(isset($_POST['insert']))
{
    $likeing = $_POST['likeing'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO poll (likeing,comment) VALUES ('$likeing','$comment')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        '<script type="text/javascript">alert("บันทึกข้อมูลสำเร็จ")</script>';
    }
    else
    {
        '<script type="text/javascript">alert("บันทึกข้อมูลไม่สำเร็จ")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลสำเร็จ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        }
</style>
</head>

<body>
<center>
    <div class="vertical-center">
        <button type="button" ><a href="index.php"><h1 style="background-color:black(255, 99, 71, 0.5);">ย้อนกลับ</h1>  </a></button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</center>
</body>
</html>