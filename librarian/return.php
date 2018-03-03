<?php

include "connection.php";
$id=$_GET["id"];
$d=date("d-m-Y");
$sql= mysqli_query($db,"UPDATE issuse_book SET books_return_date='$d' WHERE id=$id ");

$booksname="";
$sql=mysqli_query($db," SELECT * FROM issuse_book WHERE id=$id");
while($row= mysqli_fetch_array($sql)){

$booksname=$row["books_name"];
}
  mysqli_query($db,"UPDATE addbooks SET avail_qty= avail_qty+1 WHERE books_name='$booksname'  ");
header('Location: return_book.php');

?>
