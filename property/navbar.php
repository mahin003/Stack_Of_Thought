<?php 
   session_start(); 

   
   include "database/connection.php";
   $sql = "SELECT genre from post";
   $genre = mysqli_query($conn,$sql);
  
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HojoboroloBlog</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	 <nav class="navbar navbar-inverse">
	 	<div class="container-fluid">
	 		<div class="navbar-header">
	 			<a class="navbar-brand" href="index.php">HojoboroLoBlog</a>
	 		</div>
	 		<ul class="nav navbar-nav">
      <li class=""><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Catagory<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?cat=all">ALL</a></li>
           
           <?php while ( $res=  mysqli_fetch_assoc($genre)) {
              # code...
           ?>

          <li><a href="index.php?cat= <?php echo $res['genre'] ?>"><?php echo $res['genre'] ?></a></li> <?php } ?>
          
        </ul>
      </li>
      <li><a href="post.php">Post</a></li>
    </ul>
   
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
     <ul class="nav navbar-nav navbar-right">
      <li id="signup"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     
      <li id="login"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
     
       

      
      
      


    </ul>
	 	</div>



	 </nav>