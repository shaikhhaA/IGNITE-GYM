
<?php

// phpinfo();
// die();

    $host='localhost';
    $username='root';
    $password='';
    $dbname = "costumer";
    $con=mysqli_connect($host,$username,$password,$dbname);
    if
    ($con){

     // echo("ok");
    } else {
      die('Could not Connect MySql Server:' .mysql_error());
    }
        
?>




