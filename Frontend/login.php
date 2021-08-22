<?php

$db_username = 'root'; 
$db_password = ''; 
$db_name = 'Vinyl';
$db_host = 'localhost';
  
$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or
 die('Error: Could not connect to MySQL database.');

if(isset($_POST['login_submit']))
{
    $username = $_POST['username'];
    $password =$_POST['password'];
    $sql="SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $auth_user = mysqli_query($conDB,$sql);
    if(mysqli_num_rows($auth_user)==1)
    echo "Logged in";
    else echo "wrong user info";
    
}

else{
?>


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login.css">
    <title>Vinyl Town</title>
</head>

<!-- <script>

    function handleLogIn() {
        var username = document.getElementById('username').value
        var password = document.getElementById('password').value
        var error_msg = document.getElementById('error_msg')
        var flag = 0;

        for (var i = 0; i < users.length; i++) {
            if (username == users[i][0] && password == users[i][1])
                flag = 1;
        }

        if (!flag)
            localStorage.setItem("er", "1")

        else {
            localStorage.setItem("er", "0")
            window.location.href = 'index.html'

        }



    }
</script> -->

<body>
    <table style="width: 100%" width="100" height="100" cellspacing="5">
        <tr>
            <td>

                <a href="index.html">
                    <img src="logo2.png" width="300" height="175" />
                </a>
            </td>


            <td>

                <button type="button" class="btn btn-info s_btn"
                    style="margin: 0px 0px 0px 135px; font-family: cursive; border: blueviolet; height: 48px; width: 80px; color: white; background-color:rgba(133, 5, 133, 0.726);">
                    <span class="glyphicon glyphicon-search"></span> Home
                </button>

                <input id="searchbar" type="text" name="search" placeholder="Whate are you looking for?" size="80"
                    style="font-family:cursive;" />
                <button type="button"
                class="btn btn-info s_btn"
                    style="font-family: cursive; border: blueviolet; height: 48px; color: white; background-color:rgba(133, 5, 133, 0.726);">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>





            </td>
        </tr>

    </table>

    <!-- action="C:\Users\Zihad\Desktop\Summer 2021\Web\signup.html"  -->
    <table
        style="width: 100%; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <form method="POST" action="" style="border:1px solid #ccc">

            <th style="align-items: center ; font-size: 3rem; 
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 
        'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                Log in
            </th>

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
                <td style="text-align: center;">
                    <label for="psw"><b>Password</b></label><br>
                    <input id="password" size="50" type="password" placeholder="Enter Password" name="password" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label>
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                        Remember me
                    </label>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <button class="btn"
                name="login_submit"

                        style="margin-top: 10px; font-family: cursive; border: blueviolet; height: 48px; color: white; width: 80px; background-color:rgba(133, 5, 133, 0.726);">
                        <span class="glyphicon glyphicon-search"></span> <a
                            style="text-decoration:none; color: inherit;" type="submit">Login
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
                    Have not registered yet? <a href="signup.html">Sign up</a>

                </td>
            </tr>
    </table>
    </form>

    <!-- <script>
        var users = [
            ['user1', '121212'],
            ['user2', '111111'],
            ['user3', '121212'],
            ['user4', '111111'],
        ]
        // var error_msg= document.getElementById('error_msg')
        // error_msg.innerHTML="hi"
        console.log(users[0][0])
        if (localStorage.getItem("er") == "1")
            error_msg.innerHTML = "Error! wrong username or password"
        else
            error_msg.innerHTML = ""
    </script> -->

    <!-- <script src="signup.js"></script> -->
</body>
<?php

}
?>