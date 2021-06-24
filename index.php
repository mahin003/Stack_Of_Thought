<?php 
  include "property/navbar.php";
  include"database/connection.php";
  if(isset($_GET['cat'])){
      $cat= $_GET['cat'];
  }else{
  	$cat='all';
  }

?>

<style type="text/css">
#blogHeader{
	width: 70%;
    height: 230px;
    border:2px solid red;
    display: block;
}	
#img{
  width: 20%;
  display: inline-block;
}
img{
	width: 150px;
	height: 200px;
}
#post{
	width: 70%;
	display: inline-block;
}
</style>

<?php 
  $sql='';
  if($cat=='all'){
    $sql= "SELECT * from post";
   }
  else{
  	$sql= "SELECT * from post where genre='$cat' ";
   }  
   $blogpost = mysqli_query($conn, $sql);

?>

 

<?php while($row= mysqli_fetch_assoc($blogpost)){

 ?>

<div id="blogHeader">
	


	<div id="img"> <img src="<?php echo $row['image'] ?> "> </div>
	<div id="post">
		<h3><?php echo $row['title'] ?></h3>
		<?php  
		  echo substr($row['post'],0,100);
		 ?> ..... <a href="fullpost.php?postId=<?php echo $row['postid'] ?> ">READ MORE</a> <?php ?> 
	</div>
</div>
  
  <?php } ?>

</body>
</html>