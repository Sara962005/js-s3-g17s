
<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    die("login first");
}

$id = $_SESSION['user_id'];


$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user['password'];

    $sql = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "your data is update";
    } else {
        echo "wrong " . mysqli_error($conn);
    }
}
?>




<html>
    <head>
        <meta charset="UTF_8">
        <link rel="stylesheet" href="styleupdate.css">

    </head> 
    <body>
        <div class="div1">
            <p class="update">update</p>
            <form method="post">
                <input type="text" class="int1" name="username" placeholder="write username" value="<?= $user['username'] ?>" required>
                <br>
                <p> *if you dont to change the password, dont write any thing</p>
                 <input type="password" class="int1" name="password" placeholder="write password">
                 <br>
                   <button type="submit" class="btn1">update</button>
             </form>
        </div>

   
    </body> 





</html>