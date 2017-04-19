<?php
include 'connection.php';


	if(isset($_POST['addcatbrand']))
	{

	$cat = $_POST['cat'];
	$brand = $_POST['brand'];	
		
	$sql ="insert into category_brand(cat_id,brand_id)Values('$cat','$brand')";
	$conn ->prepare($sql);
	if($conn->exec($sql))
{
	echo "<script>alert('Category And brand has been set')
		window.location.href='../../vpages/category.php';

		</script>";
}


	}



if(isset($_POST['addbran']))
	{

		echo "<script>alert(' dusra')
		window.location.href='../vpages/brand.php';

		//</script>";
		$name1 = $_POST['add'];
		$sql ="insert into addc (name)values('$name1')";

		$conn->prepare($sql);
		if($conn->exec($sql))
		{
			echo"Executed";
		}

		//echo $name;

	}




//header('Location: ../vpages/brand.php');

function delete($id)
{
	include 'connection.php';
	$query = "delete from addc where id=1";
	$q = $conn->exec($query);
}


?>