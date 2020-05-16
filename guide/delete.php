<?php

include('../db.php');
include("function.php");

if(isset($_POST["GuideID"]))
{
 $statement = $connection->prepare(
  "DELETE FROM tab_guides WHERE GuideID = :GuideID"
 );
 $result = $statement->execute(
  array(
   ':GuideID' => $_POST["GuideID"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}