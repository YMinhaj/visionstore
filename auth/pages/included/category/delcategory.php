<?php
include 'connection.php';
$delete_id=$_GET['id'];
$delete_query="delete  from category_brand WHERE cat_id='$delete_id'";//delete query


if($conn->exec($delete_query))
{
//javascript function to open in the same window
   // echo "<script>window.open('../../vpages/category.php?deleted=user has been deleted','_self')</script>";
	echo "<script>alert('category has Been Deleted')
		window.location.href='../../vpages/category.php';

		</script>";
}







?>