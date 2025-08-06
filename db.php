<?php


$servername = "localhost";
$user = "FRubil";
$password = "frbpass1";
$bd = "db_FRubil";

try {
    $con = new mysqli($servername, $user, $password, $bd);

    if ($con->connect_error) {
        throw new Exception("Error conectándose al servidor: " . $con->connect_error);
    }


} catch (Exception $e) {
    header("Location: error-404.php");
    die("Error: " . $e->getMessage());
    
}

?>

?>