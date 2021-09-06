<?php

$db_username = 'root'; 
$db_password = ''; 
$db_name = 'Vinyl';
$db_host = 'localhost';
  
$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or
 die('Error: Could not connect to MySQL database.');

$sql= "select * from albums limit 5";
$result = mysqli_query($conDB, $sql);
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="index.css">
  <title>Vinyl Town</title>
</head>

<body>

  <table style="width: 98%; cellspacing="5">
    <tr>
      <td>

        <a href="index.html">
          <img src="logo2.png" width="300" height="175" />
        </a>
      </td>


    


<td>
  <input id="searchbar" 
  type="text" name="search" 
  placeholder="Enter Album Name..."
  id="searchbar"
  size="100"
  style="font-family:cursive; height: 60px;" />
  <ul id="autocomplete-results">
    
  </ul>
  <td>

    <button type="button" class="btn btn-info s_btn"
    style=" border: blueviolet; width: 80px;  color: rgb(255, 255, 255); background-color:rgba(33, 115, 221, 0.726);">
    <span class="glyphicon glyphicon-search"></span> Search
  </button>
</td>
</td>
<td>
  <select class="select"
  style="padding-left: 10px; font-size: 18px; border: blueviolet 2x solid;  color:rgba(133, 5, 133, 0.726); background-color: rgb(255, 255, 255);"
</select>
<option value="Song">Songs</option>
<option value="Artist">Artists</option>
<option value="Album">Albums</option>
<option value="Genre">Genres</option>
<option value="Playlist">Playlists</option>
</select>
</td>

<td>

  <button type="button" class="btn btn-info s_btn"
  style="margin: 0px 0px 0px 100px; 
 border: blueviolet; width: 80px; color: white; background-color:rgba(33, 115, 221, 0.726);">
<span class="glyphicon glyphicon-search"></span><a style="text-decoration:none; color: inherit;" href="login.php">Login</a> 
</button>
</td>
<td>
<button type="button" class="btn btn-info s_btn"
style=" border: blueviolet;  color: white; width: 80px; background-color:rgba(33, 115, 221, 0.726);">
<span class="glyphicon glyphicon-search"></span> <a style="text-decoration:none; color: inherit;" href="reg.php">Sign up</a>
</button>


</td>
</tr>

</table>

<table class="menu" style="font-size:1.5rem;
width: 100%; color: rgb(44, 202, 230);
border: 1px solid rgb(0, 0, 0); 
background-color: white;" border="1" width="250" height="75" cellspacing="0" ;>
    <tr>
      
      <th><a style="text-decoration:none; color: inherit; " href="index.html">Songs</a></th>
      <th><a style="text-decoration:none; color: inherit;" href="index.html">Genres</a></th>
      <th><a style="text-decoration:none; color: inherit;" href="index.html">Artists</a></th>
      <th><a style="text-decoration:none; color: inherit;" href="index.html">Playlists</a></th>
      <th><a style="text-decoration:none; color: inherit;" href="index.html">On Sale</a></th>
    </tr>
  </table>

  <table >

    <tr>
      
      <div class="container" style="margin-top: 1rem;">
        <ul class="=slider-container simple-list" id="slider">
          <li class="slide">
            <a style="text-decoration:none; color: inherit;" href="#">  
              <img src="call.jpg" style="width: 75%;" alt="" >
              <h2 >Call Me by Your Name</h2>
            </a>
          </li>
          <li class="slide">
            <a style="text-decoration:none; color: inherit;" href="#">
              <img src="ocean1.png" style="width: 75%;"  >
              <h2>Ocean - Anuv Jain</h2>
            </a>
          </li>
          <li class="slide">
            <a style="text-decoration:none; color: inherit;" href="#">
              <img src="ram.webp"  alt="">
              <h2>Random Access Memories - Daft Punk</h2>
            </a>
          </li>
          <li class="slide">
            <a style="text-decoration:none; color: inherit;" href="#">
              <img src="AfterHours.webp" >
              <h2 >After Hours - The Weeknd</h2>
            </a>
          </li>
          <li class="slide">
            <a style="text-decoration:none; color: inherit;" href="#">
              <img src="blonde.webp" >
              <h2 >Blond - Frank Ocean</h2>
            </a>
          </li>
          
        </ul>
        <a href="#" id="prev"></a>
        <a href="#" id="next"></a>      
      </div>
    </tr>
  </table>
    
    <!-- <marquee loop="1" behavior="slide" direction="left" scrollamount="30" onmouseout='this.start()'
    onmouseover='this.stop()'>
    
    <img src="ram.webp" alt="" style="max-height: 380px; max-width: 380px">
    <img src="souvlaki.jpg" alt="" style="max-height: 380px; max-width: 380px">
    <img src="AfterHours.webp" alt="" style="max-height: 380px; max-width: 380px">
    <img src="blonde.webp" alt="" style="max-height: 380px; max-width: 380px;">
  </marquee> -->

  <h1 style="font-family: Amaranth; margin: 2rem 0 0 0;  font-weight: 400; color: rgb(95, 1, 104);">
    Recently Added</h1>
  <table style="margin: 1rem 0 0 0; width: 100%;">
    <tr style="width: 100%; background-color: rgba(226, 208, 226, 0.726); ">
    <?php
    while($row = $result->fetch_assoc()){
      $image = $row['imgRef'];
      ?>
      
      <td>
        <img src='<?php echo $image;?>' style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">
        <?php  echo $row['album']; ?> - <br><?php  echo $row['artist']; ?></a><br> $<?php  echo $row['price']; ?>
        
    </td> <br>
   
      <?php
    }
      ?>

    </tr>

  </table>



  <h1 style="font-family: Amaranth; margin: 2rem 0 0 0;  font-weight: 400; color: rgb(95, 1, 104);">
    Hot Picks for your Collection</h1>
  <table style="margin: 1rem 0 0 0; width: 100%;">
    <tr style="width: 100%; background-color: rgba(226, 208, 226, 0.726); ">
      <td colspan="2">

        <video autoplay muted style=" max-width: 600px; max-height: 600px;" controls>
          <source src="Kid.mp4" type="video/mp4"> -->
      </td>
      <td><img src="Dua.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Future Nostalgia - Dua Lipa</a><br> $10
      </td>
      <td><img src="Bo2.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Inside - Bo Burnham</a><br> $10
      </td>
      <td><img src="Phoebe.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Punisher - Phobe Bridgers</a><br> $15
      </td>
    </tr>


    <tr style="width: 100%; background-color: rgba(226, 208, 226, 0.726); ">

      <td><img src="Delan.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">What Do You Know About Cars - Declan</a><br> $5
      </td>

      <td><img src="her.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Her - Arcade Fire</a><br> $5
      </td>
      <td><img src="illinois.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">illinois - Sufjan Stevens</a><br> $15
      </td>
      <td><img src="AM.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">AM- Arctic Monkeys</a><br> $10
      </td>
      <td><img src="bends.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">The Bends - Radiohead</a><br> $10
      </td>

    </tr>

  </table>

  <h1 style="font-family: Amaranth; margin: 5rem 0 0 0;  font-weight: 400; color: rgb(95, 1, 104);">
    Rock n Roll
  </h1>

  <table style="margin: 1rem 0 0 0; width: 100%;">

    <tr style="width: 100%; background-color: rgba(226, 208, 226, 0.726); ">

      <td><img src="met2.jpg" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Hardwired - Metallica</a><br> $15
      </td>
      <td><img src="floyd.jpg" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Animals - Pink Floyd</a><br> $5
      </td>
      <td><img src="beatles.jpg" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">A Day to Remember - The Beatles</a><br> $5
      </td>
      <td><img src="queen.jpg" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Queen - Queen</a><br> $10
      </td>
      <td><img src="colma.webp" style=" max-width: 300px; max-height: 300px;">
        <br><a href="#" style="text-decoration:none; color: inherit; ">Colma - Buckethead</a><br> $5
      </td>

  </table>


  <table style="width: 100%; margin-top: 10rem; background-color: rgba(226, 208, 226, 0.726);" width="100" height="50"
    cellspacing="0">
    <th><a href="#">Home</a></th>
    <th><a href="#">Best selling</a></th>
    <th><a href="#">Top Trending</a></th>
    <th><a href="#">Cart</a></th>
    </ul>
  </table>
 </head>

  <body>

    <footer>
      <p style="color: black;">Author: Zihad<br>
        <a href="18102008@gmail.com">18102008@ciu.edu.bd</a>
      </p>
    </footer>
    
  </body>
  <script src="index.js"></script>
</html>