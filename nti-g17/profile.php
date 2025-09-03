

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']); 
    $email    = htmlspecialchars($_POST['email']);
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Email: " . $email . "<br>";
} else {
    echo "write the correct data";
} 
?>








