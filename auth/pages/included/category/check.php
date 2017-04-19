      <?php


        include("connection.php");
       if (isset($_GET['id'])){
       $id = $_GET['id'];

     $fetch_pro=$conn->prepare("select * from addc where id = '$id'");
     $fetch_pro->setFetchMode(PDO:: FETCH_ASSOC);
     $fetch_pro->execute();
     $row=$fetch_pro->fetch();
     $imgq=$row['image'];
  

       echo "
<form action='' method = 'post' enctype='multipart/form-data'>

<table>
<tr>
<td><b>ENTER New Product NAME </b></td>
<td>&nbsp;<input type = 'text' name = 'name'
    value='".$row['name']."'/>
 </td>
</tr>
<tr>
<td><b>SELECT New IMAGE </b></td>
<td><input type = 'file' name = 'img' >
    <img src = 'brandpic/".$row['image']."' width='70px' height='60px';/>
    
</td>
</tr>




</table>
<button name = 'upd_product'>Update Product </button>
</form>";


if (isset($_POST['upd_product'])){
if($imgq == $_FILES['img']['name'])
{
  $img=$imgq;
  
}
else if( $_FILES['img']['name']==true)
{
  $img=$_FILES['img']['name'];
         $img_tmp=$_FILES['img']['tmp_name'];
         move_uploaded_file($img_tmp,"brandpic/$img");
}
else
{
  $img=$imgq;
}
         $name = $_POST['name'];
        

       $up_pro=$conn->prepare("update addc set image='$img',name='$name' where id='$id'");

       if($up_pro->execute()){
        
         echo"<script>window.open('../vpages/brand.php','_self');</script>";
}
}
} 
?>