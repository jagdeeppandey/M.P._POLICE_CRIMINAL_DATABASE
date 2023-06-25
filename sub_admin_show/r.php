<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

$host='localhost';
$user ='root';
$pass ='';
$dbname='cdb';
$conn = mysqli_connect($host,$user,$pass,$dbname);
$sql="INSERT INTO ctable(name,email,mobile,password) values('$name','$email','$mobile','$password')";
mysqli_query($conn,$sql);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP POLICE </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
    <form>
<!-- <div class="col-md-7 py-3 py-md-0" id="side2"> -->
    Name:<input type="text" name="name" ><br>
    Mobile:<input type="number" name="mobile" ><br>
    Email:<input type="email" name="email" ><br>
    Password:<input type="password" name="password" ><br>
    <input type="submit" name="submit" value="Send data" >
    </form>
</body>
</html>
