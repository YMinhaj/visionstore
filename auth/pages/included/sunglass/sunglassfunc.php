<?php
include 'connection.php';


	if(isset($_POST['submit']))
	{
	
	$price = $_POST['amount'];
	$discount = $_POST['discount'];
	$description = $_POST['description'];
	$brand = $_POST['brand'];
	$category = $_POST['cat'];



$img=$_FILES['sunglass']['name'];
         $pro_img_tmp=$_FILES['sunglass']['tmp_name'];
         move_uploaded_file($pro_img_tmp,"sunglass/$img");
$sql ="insert into sunglass (price,discount,description,brand_id,cat_id,image)values('$price','$discount','$description','$brand','$category','$img')";

		$conn->prepare($sql);
		if($conn->exec($sql))
		{
			echo "<script>alert('$brand Has been Added')
		window.location.href='../../vpages/sunglass.php';

		</script>";
		}

		//echo $name;

	}

if(isset($_POST['a']))
{
	echo "ok";
	echo $_POST['brand'];
}

if(isset($_POST['addbran']))
	{
if(isset($_POST['m']))
	{
		if ($_POST['m'] == '1')
		{
			$checkm = "1";
		}
	}

		else
		{
			$checkm = "0";
		}
		if(isset($_POST['f']))
	{
		if ($_POST['f'] == '1')
		{
			$checkf = "1";
		}
	}

		else
		{
			$checkf = "0";
		}
		if(isset($_POST['l']))
	{
		if ($_POST['l'] == '1')
		{
			$checkl = "1";
		}
	}

		else
		{
			$checkl = "0";
		}
	
	
	
		$name1 = $_POST['add'];
		
$img=$_FILES['brandpic']['name'];
         $pro_img_tmp=$_FILES['brandpic']['tmp_name'];
         move_uploaded_file($pro_img_tmp,"brandpic/$img");



		$sql ="insert into brand (name,image,men,women,lense)values('$name1','$img','$checkm','$checkf','$checkl')";

		$conn->prepare($sql);
		if($conn->exec($sql))
		{
			echo "<script>alert('Brand Has been Added')
		window.location.href='../../vpages/brand.php';

		</script>";
		}

		//echo $name;



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