<?php
$localhost = "localhost";
$username="root";
$password="";
$dbname="navillarosa";
$conn = mysqli_connect($localhost,$username, $password, $dbname) or die ("</html>");

if(mysqli_connect_errno($conn))
{   
    echo"error".  mysqli_error($conn);
}

?>