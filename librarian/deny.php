<?php
 include "connection.php";
 $id=$_GET["id"];
 $sql=mysqli_query($db, "UPDATE student_reg SET status='no' Where id=$id ");

header('Location: display_student_info.php');
?>
