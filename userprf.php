<?php 
  include "property/navbar.php";
  include"database/connection.php";
  if(isset($_SESSION["userid"])){
      $id= $_SESSION["userid"];
  }
  echo $id;
 $sql ="SELECT * from post where userid= '$id'";
 $query = mysqli_query($conn,$sql);

?>
<style type="text/css">
	table, th, td {
  border: 1px solid black;
}
</style>

<table style="widows: 70%; margin-left: auto;margin-right: auto;">
	<tr>
		<th style=" width:20%">author name</th>
		<th  style=" width:20%">Title</th>
		<th  style=" width:20%">Genre</th>
		<th  style=" width:20%">Edit</th>
		<th  style=" width:20%">Delete</th>

	</tr>

	<?php while ($row = mysqli_fetch_assoc($query)) {
	 ?>
	 <tr>
    <td  style=" width:20%"><?php  echo $_SESSION["username"] ; ?></td>
    <td  style=" width:20%"><?php  echo $row['genre']; ?></td>
    <td  style=" width:20%"><?php  echo $row['title']; ?></td>
    <td  style=" width:20%"> <a href="post.php?text=<?php echo $row['postid'] ?>"> Edit</a> </td>

    <td style="color: blue; cursor: pointer ;width:20%"> Delete </td></tr>
<?php } ?>

    
</table>
