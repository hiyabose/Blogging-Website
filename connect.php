<?
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


   //database connection
   $server = "sql112.epizy.com";
   $username = "epiz_25921818";
   $password = "NtgPl83H8H6z";
   $dbname = "epiz_25921818_mydata";

   $conn = mysqli_connect($server , $username , $password , $dbname);

  if(!$conn) {
    disc("Connection Faliled: ".mysqli_connect_error());
 }

?>