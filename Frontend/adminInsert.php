<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "Vinyl";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}

if(isset($_POST['submit']))
{
    $album = $_POST['album'];
    $artist= $_POST['artist'];
    $price= $_POST['price'];
    $imgRef= $_POST['imgRef'];

    $sql="insert into albums (album, artist, price, imgRef) values ('$album', '$artist', '$price', '$imgRef')";
    $result = $con->query($sql);
    if($result) echo "data added";
    else echo "unsuccessful";

}

?>

<html>
<head>
<title>Vinyl ADMIN INSERT</title>
<form action="" method="POST">
<input type="text" placeholder="Album Name" name="album">&nbsp;
<br>
<input type="text" placeholder="Artist" name="artist">&nbsp;
<br>
<input type="number" placeholder="Price" name="price">&nbsp;
<br>
<input type="text" placeholder="Image Reference" name="imgRef">&nbsp;
<br>

<input type="submit" value="Add Album" name="submit">
</form>

<a href="adminDashboard.php">Admin Dashboard</a> <br>
<br>

<a href="index.php">Homepage</a>

</body>
</html>