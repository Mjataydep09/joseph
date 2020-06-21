<?php
$localhost = "remotemysql.com";
$username="BJtuN3JiM7";
$password="D2MxzKEPWb";
$dbname="BJtuN3JiM7";
$conn = mysqli_connect($localhost,$username, $password, $dbname) or die ("</html>");

if(mysqli_connect_errno($conn))
{
    echo"error".  mysqli_error($conn);
}

?>
