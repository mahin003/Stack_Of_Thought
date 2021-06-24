<script type="text/javascript" src="checkform.js"></script>

<?php 
  include "property/navbar.php";
  include"database/connection.php";
   
 if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'userlist'"))) {
  echo "DB EXIST";
} else {
   $sql = "CREATE TABLE userlist(
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(50) NOT NULL,
  email VARCHAR(80),
 password VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table userlist created successfully";
} else {
    echo "Error creating table: " . $conn->error;
   } 
}


 
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    ?> <p style="color: red"><?php  echo $name,$email,$password; ?> </p>
   <?php   
    $val="INSERT INTO userlist(name,email,password) VALUES ('$name', '$email', '$password')";
    if(mysqli_query($conn, $val)){
      echo "<h1 style='background-color:black;'>added</h1>";
    }
    else{
      echo $conn->error ;
    }
    
 }
 




?>


<form action="signup.php" method=post >
     name: <input type="text" name="name" id="name" placeholder="name">
     email: <input type="email" name="email" id="email">
     password: <input type="password" name="pwd" id="pwd">
     <input type="submit" name="submit" id="submit">

</form>
   
  
</body>
</html>