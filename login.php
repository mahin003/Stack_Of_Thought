<?php 
    include ("property/navbar.php");
    include ("database/connection.php");
    
    if(isset($_POST["submit"])){
    	$email= $_POST["email"];
    	$pwd= $_POST["pwd"];

    	$sql= "SELECT * FROM userlist where email= '$email'";

    	
   $res=mysqli_query($conn, $sql);
   $array=mysqli_fetch_array($res);
   
   if($_POST["pwd"]==$array["password"]){
   	 $_SESSION["userid"]=$array["id"];
   	 $_SESSION["username"]= $array["name"];
     echo "<h1> logged in". $_SESSION["username"] ;

   }

    } 
   
 ?>
 <form method="post" action="login.php">
  email : <input type="email" name="email">
  pass: <input type="password" name="pwd">
  <button type="submit" name="submit">LOGIN</button>
</form>
</body>
</html>