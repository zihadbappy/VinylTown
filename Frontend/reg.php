
<?php
session_start();
 
$db_username = 'root'; 
$db_password = ''; 
$db_name = 'Vinyl';
$db_host = 'localhost';
  
$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or
 die('Error: Could not connect to MySQL database.');

 if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Welcome to Vinyl Town`, $username";
    
    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

    $result= mysqli_query( $conDB, $sql);

 }
 else{
?>
    

   <!DOCTYPE html>
   <html lang="en">
   
   <head>
       <meta charset="UTF-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <link rel="stylesheet" href="signup.css">
       <title>Vinyl Town</title>
               <style>
                   label {
                       font-size: 1.5rem;
                   }
               
                   input {
                       margin-bottom: 15px;
                       margin-top: 7px;
               
                   }
               
                   form {
                       text-align: center;
                   }
               </style>
   </head>
   
   
   <body>
       <table style="width: 100%" width="100" height="100" cellspacing="5">
           <tr>
               <td>
   
                   <a href="index.php">
                       <img src="logo2.png" width="300" height="175" />
                   </a>
               </td>
   
               <style>
                   input {
                       padding: 12px 20px;
                       box-sizing: border-box;
                       border: 2px solid rgba(133, 5, 133, 0.726);
                   }
               </style>
   
               <style>
                   body {
                       font-family: amaranth;
                       margin: 1rem 13rem;
                   }
               </style>
   
   
   
               <td>
   
                   <button type="button" class="btn btn-info s_btn"
                       style="margin: 0px 0px 0px 135px; font-family: cursive; border: blueviolet; height: 48px; width: 80px; color: white; background-color:rgba(133, 5, 133, 0.726);">
                       <span class="glyphicon glyphicon-search"></span> Home
                   </button>
   
                   <input id="searchbar" type="text" name="search" placeholder="Whate are you looking for?" size="80"
                       style="font-family:cursive;" />
                   <button type="button" class="btn btn-info s_btn"
                       style="font-family: cursive; border: blueviolet; height: 48px; color: white; background-color:rgba(133, 5, 133, 0.726);">
                       <span class="glyphicon glyphicon-search"></span> Search
                   </button>
   
   
   
   
   
               </td>
           </tr>
   
       </table>
   
       <table
           style="width: 100%; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
           <form method="POST" onsubmit="return handleSignUp()" action="../Php/reg.php" style="border:1px solid #ccc">
               
               <th style="align-items: center ; font-size: 3rem; 
           font-family:'Trebuchet MS', 'Lucida Sans Unicode', 
           'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                   Sign Up
               </th>
               <tr>
                   <td style="text-align: right;">Please fill in this form to create an account</td>
               </tr>
               <tr>
                   <td>
                       <hr>
                   </td>
               </tr>
   
               <tr>
                   <td style="text-align: center;">
                       <label for="username"><b>Username</b></label>
                       <br>
                       <input id="username" type="text" size="50" placeholder="Username" name="username" required>
                   </td>
   
               </tr>
               <tr>
                   <td style="text-align: center; ">
                       <label for="email"><b>Email</b></label> <br>
                       <input id="email" size="50" type="text" placeholder="Enter Email" name="email" required>
                   </td>
               </tr>
   
               <tr>
                   <td style="text-align: center;">
                       <label for="psw"><b>Password</b></label><br>
                       <input id="password" size="50" type="password" placeholder="Enter Password" name="password" required>
                   </td>
               </tr>
   
               <tr>
                   <td style="text-align: center;">
                       <label>
                           <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                       </label>
                   </td>
               </tr>
               <tr>
                   <td style="text-align: center;">
                       <button class="btn" name="submit"
                           style="font-family: cursive; border: blueviolet; height: 48px; color: white; width: 80px; background-color:rgba(133, 5, 133, 0.726);">
                           <span class="glyphicon glyphicon-search"></span> <a
                               style="text-decoration:none; color: inherit;" type="submit"
                               class="signupbtn">Sign Up
                       </button>
                   </td>
               </tr>
   
               <tr>
                   <td>
                       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                       &nbsp; &nbsp;&nbsp;
                       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                       Already Have an account? <a href="login.php">Log In</a>
                   </td>
               </tr>
       </table>
   
       </table>
       </form>
       <script>
   
           function handleSignUp() {
               var username = document.getElementById('username').value
               var email = document.getElementById('email').value
               var password = document.getElementById('password').value
       
               if (!(/^[a-zA-Z\d]+$/.test(username)))
               {
                   alert('Username is invalid')
                   return false
               }
               
               if (!(/^([a-zA-Z\d\.-]+)@([a-zA-Z\d-]+)\.([a-zA-Z]{2,8})$/.test(email)))
               {
                   alert('Please enter a valid email')
                   return false
                   console.log(username);
               }
               
               if (password.length < 6)
               {
                   alert('The password must be longer')
                   return false
               }
   
               return true   
           }
       </script>
       
   
       <!-- <script src="signup.js"></script> -->
   </body>

   <?php
}
?>