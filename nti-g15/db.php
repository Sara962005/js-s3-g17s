 <?php
$serverName ='localhost';
$username ='root';
$pass = '';
$dbName = 'school_db';

$conn = mysqli_connect($serverName, $username,$pass, $dbName);
 if ($conn) {
   //  echo "succes";
 }else{
    echo "no";
 }
?>






 <!-- <html >
<head>
    <meta charset="UTF-8">
    <title>task</title>
</head>
<body>
     <form action="list.php" method="POST">
        
        <input type="text" placeholder="write name" name="uname" >
        <input type="text" placeholder="write age" name="uage" >
       
        <button type="submit">Submit</button>
    </form>
</body>
</html>   

 -->
