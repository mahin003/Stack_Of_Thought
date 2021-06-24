<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
    
    if(isset($_GET['submit'])){
    	echo "kashdkasdhasd";
         $file = $_FILES['image']['name'];
         echo $file;

    }
 ?>

   <form method="GET" action="#" enctype="multipart/form-data">
   	
   	<input type="file" name="image">
   	<input type="submit" name="submit">
   </form>
</body>
</html>