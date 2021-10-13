<?php
$conn = new mysqli("localhost",'root','',"togglebyte");

$mysql_main_cat = mysqli_query($conn,"SELECT * FROM main_category");
while($row=mysqli_fetch_assoc($mysql_main_cat)){
		 
	}

$mysql_sub_cat = mysqli_query($conn,"SELECT * FROM sub_category");

$mysql_sub_sub_cat = mysqli_query($conn,"SELECT * FROM sub_sub_cat");
echo $row;
?>