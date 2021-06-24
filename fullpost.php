<?php 
   include ("property/navbar.php");
   include "database/connection.php";
   $id= $_GET['postId'];
   $sql = "SELECT * from post where postid= '$id'";
   $details= mysqli_query($conn, $sql);
   $res= mysqli_fetch_assoc($details);

   $user= $res['userid'];
   echo $user;
   $sql1 = "SELECT * from userlist where id= '$user'";
   $user= mysqli_query($conn,$sql1);
   
   $userinfo=mysqli_fetch_assoc($user);
   ?>
   <style type="text/css">
   	
    #img{
    	width: 100%;
    	display: block;
    }
    img{
    	margin-left: auto;
    	margin-right: auto;
    	width: 300px;
    	height: 200px;
    }
    #author{
    	height: 60px;
    	border:1px solid black;
    }

   </style>

   <div style=" width:90%">
   	<h2><?php echo $res['title'] ?></h2>
   	  <div id="img" style="text-align: center;">
   	  	  <img style="margin-left: auto;margin-left: auto" src="<?php echo $res['image'] ?> ">
   	  </div>
   	  <div id="post">
   	  	
        <?php echo $res['post'] ?> 
   	  </div>
   	  <div id="author">
   	  	<label style="float: left"> Author: </label><b style="float: left"><?php echo $userinfo['name']; ?></b>
   	  	<b style="float: right"> <?php echo $userinfo['email']; ?></b>
   	  	<label style="float: right">EMail: </label>
   	  </div>

   </div>
   
   </body>
   </html>