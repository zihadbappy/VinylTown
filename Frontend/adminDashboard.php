<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "Vinyl";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM albums";
if( isset($_GET['search']) ){
    $album = mysqli_real_escape_string($con, htmlspecialchars($_GET['album']));
    
    if($album=='')
    $sql = "SELECT * FROM albums";
    else
    $sql = "SELECT * FROM albums WHERE album ='$album'";
}
if (isset($_GET['delete']))
{

$id = $_GET['id'];
$deleteQuery = "DELETE FROM albums WHERE id = $id";

if ($delete= mysqli_query($con, $deleteQuery))
{
echo "data deleted";
}
else
{
echo "ERROR: ";
}
}

$result = $con->query($sql);
?>

<html>
<head>
<title>Vinyl ADMIN</title>
<form action="" method="GET">
<input type="text" placeholder="Search by album" name="album">&nbsp;
<!-- <button name="search">search</button> -->
<input type="submit" value="Search" name="search">
</form>
<h2>List of albums</h2>
<table border=0 cellspacing=20>
    <tr>
        <th>ID</th>
        <th>Album Name</th>
        <th>Artist</th>
        <th>Price</th>
        <th>Time Added</th>
        <th>img ref</th>
    </tr>
    <?php
while($row = $result->fetch_assoc()){
    
    ?>
    <tr>
        <br>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['album']; ?></td>
        <td><?php echo $row['artist']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['added']; ?></td>
    </tr>
    <?php
}
?>
</table>
<form action="" method="GET">
    <input type="number" placeholder="Delete By ID" name="id">&nbsp;
    <!-- <button name="delete">delete</button> -->
    <input type="submit" value="delete" name="delete">
</form>

<a href="adminInsert.php">Insert Data</a>
</body>
</html>