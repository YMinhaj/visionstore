<?php
include 'connection.php';


	if(isset($_POST['addbrand']))
	{
	
	
		$name1 = $_POST['add'];
		
$img=$_FILES['brandpic']['name'];
         $pro_img_tmp=$_FILES['brandpic']['tmp_name'];
         move_uploaded_file($pro_img_tmp,"brandpic/$img");



		$sql ="insert into brand (name,image,date)values('$name1','$img',NOW())";

		$conn->prepare($sql);
		if($conn->exec($sql))
		{
			echo "<script>alert('Brand Has been Added')
		window.location.href='../../vpages/brand.php';

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
		$sql ="insert into brand (name)values('$name1')";

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
	$query = "delete from brand where id=1";
	$q = $conn->exec($query);
}


?>