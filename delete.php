<?php

include('db.php');
include("function.php");

if(isset($_POST["OrganizerID"]))
{
 $statement = $connection->prepare(
  "DELETE FROM tab_organizers WHERE OrganizerID = :OrganizerID"
 );
 $result = $statement->execute(
  array(
   ':OrganizerID' => $_POST["OrganizerID"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}