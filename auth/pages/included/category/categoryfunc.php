<?php
include 'connection.php';


	if(isset($_POST['addcategory']))
	{

	
		$name1 = $_POST['add'];



		$sql ="insert into category (name)values('$name1')";

		$conn->prepare($sql);
		if($conn->exec($sql))
		{
			echo "<script>alert('Category Has been Added')
		window.location.href='../../vpages/category.php';

		</script>";
		}

		//echo $name;

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