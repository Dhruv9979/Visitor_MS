<?php
session_start();
require_once "db.php";

$message = "";
$role = "";
if (isset($_POST["Login"])){
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $query = "SELECT * FROM tab_users WHERE Username = '$username' AND Password = '$password'";
    // $result = mysqli_query($conn,$query);

    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();  
    if($statement->rowCount() > 0)
    {
        foreach($result as $row)
        {
            if($row['Role'] == "admin"){
                $_SESSION['User'] = $row["Username"];
                $_SESSION['role'] = $row["Role"];
                header('Location: visitor/visitorsearch.php');
            }
            else{
                $_SESSION['User'] = $row["Username"];
                $_SESSION['role'] = $row["Role"];
                header('Location: user.php');
            }
        }
    }
    else{
        header('Location: index.php');
    }
}
?>