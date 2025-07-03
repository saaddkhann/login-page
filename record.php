<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>
<H2>
    
<H2>welcome/H2>

<form method="POST">
Name:<input type="text" name="nm"><br>
Email:<input type="text" name="em"><br>
password:<input type="text" name="pass"><br>
<input type="submit" name="sb">
</form>
<?php   
$con=mysqli_connect('localhost','root','','record');
if(isset($_POST['sb']))
{
   $name=$_POST['nm'];
    $email=$_POST['em'];
   $pass=$_POST['pass'];
$query="INSERT INTO welcome (name,Email,PASSWORD)VALUES('$name','$email','$pass')";
$run=mysqli_query($con,$query);
}

?>
</body>
</html>
