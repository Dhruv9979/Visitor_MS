<?php

include('../db.php');
include("function.php");

if(isset($_POST["GroupID"]))
{
 $statement = $connection->prepare(
  "DELETE FROM tab_visitorgroups WHERE GroupID = :GroupID"
 );
 $result = $statement->execute(
  array(
   ':GroupID' => $_POST["GroupID"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}