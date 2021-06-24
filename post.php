<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" type="text/css" href="textEditorStyling.css">
<?php 
   include ("property/navbar.php");
   include "database/connection.php";
    $pid =$text=$Title=$Genre=$pic='';
    if(isset($_GET['text'])){
       $txt=$_GET['text'];
       echo $txt;
       $ck= "SELECT * from post where postid= '$txt' ";
       $query= mysqli_query($conn, $ck);
       $res= mysqli_fetch_assoc($query);
       $text=$res['post'];
       $Title=$res['title'];
       $Genre=$res['genre'];
       $pic = $res['image'];
    }

  if(mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE 'post'"))){
  	echo "DB post exits";
  }
  else{
  	$sql = "CREATE TABLE post(
  postid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  userid INT(6) NOT NULL,
  genre VARCHAR(50),
  title VARCHAR(100),
  post LONGTEXT,

  image BLOB NOT NULL,
  dt date ,
  tm time 
  
)";

if ($conn->query($sql) === TRUE) {
    echo "Table userlist created successfully";
} else {
    echo "Error creating table: " . $conn->error;
   } 
  }
  $fileName=$fileTmp=$post="";


?>
<?php    
  if(isset($_POST["submit"])){
  	 echo "<h2>PROBLEM </h2>";
  	 $userid= $_SESSION["userid"];
  	 echo $userid;
  	 $post = $_POST["content"];
      
  
  	 $genre=$_POST["genre"];
  	 $title =$_POST["title"];

  	 
     $fileName= $_FILES['image']['name'];
     $fileNameTmp= $_FILES['image']['tmp_name'];


  	 $folder='blogimg/' ;
     $fileName=$folder.$fileName;
  	 move_uploaded_file($fileNameTmp, $fileName);
  	 
  	 echo "<h1> $fileName </h1>";
     $date=  date("Y-m-d") ;
     $time = date("h:i:sa");
  	 $sql= "INSERT INTO post (userid, genre,title,post, image,dt, tm) VALUES ('$userid', '$genre' , '$title', '$post', '$fileName' ,'$date', '$time')";
       
     if (mysqli_query($conn, $sql)) {
    echo "New record created successfully".$userid. $genre. $title.$post.$fileName." post is ".$post;
 } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
   
  }

?>

<?php 
    if(isset($_POST["update"])){
    
     $post = $_POST["content"];
      
  
     $genre=$_POST["genre"];
     $title =$_POST["title"];

     echo $genre." ".$title;


     $sql="UPDATE post SET genre='$genre',title='$title',post='$post' WHERE postid='$pid' ";

     
       
     if (mysqli_query($conn, $sql)) {
    echo "updated successfully". $genre. $title." post is ".$post;
 } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }

  echo "<script> 
    location.href='userprf.php' ;
 </script>";
   
  }
?>


<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

 <form method="post" action="post.php" enctype="multipart/form-data"> 


    <input type="file" name="image" value=<?php echo $pic  ?> />
    genre: <input type="text" name="genre" value= <?php echo $Genre  ?>>
    title: <input type="text" name="title" value= <?php echo $Title  ?> >


  
    <textarea name="content" > <?php echo $text  ?> </textarea>  
                <script>
                        CKEDITOR.replace( "content" );
                </script>
 	
   <?php if($text==''){ ?> 
    <button type="submit" name="submit">POST</button>  
    
    
    <?php  

    }
    else{
      
      ?>
     <button type="submit" name="update">UPDATE</button> 
      <?php 
    }

?>
 </form>


</body>
</html>