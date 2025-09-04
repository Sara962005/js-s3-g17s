<?php
session_start();
include "db.php";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
       
        $_SESSION['username'] = $user['username'];
       
        echo "now you login";
    } else {
        echo "username or password is wrong";
    }
}
?>


<html>
    <head>
        <meta charset="UTF_8">
        <link rel="stylesheet" href="style.css">

    </head> 
    <body>
        <div class="div1">
            <p class="login">login</p>
            <form method="post">
                <input type="text" class="int1" name="username"  placeholder="your name" required>
                <br>
                 <input type="password" class="int1" name="password" placeholder="your password" required>
                 <br>
                   <button type="submit" class="btn1">login</button>
             </form>
        </div>

   
    </body> 





</html>