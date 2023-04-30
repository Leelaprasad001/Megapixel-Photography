<?php 
session_start();
$name = "";
$email = "";
$message = "";
// DBconn= mysqli_connect('server_name','username','password','dbname');
$db = mysqli_connect('localhost','root','','megapixel');

  if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);


      $sql = "INSERT INTO contact(name, email, message) VALUES ('$name','$email','$message')";
      mysqli_query($db,$sql);
    
echo "<script type='text/javascript'>alert('Your Message Submitted!');</script>";
    $name = "";
    $email = "";
    $message ="";
}
    ?>