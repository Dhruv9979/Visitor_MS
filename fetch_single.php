<?php
include('db.php');
include('function.php');
if(isset($_POST["OrganizerID"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM tab_organizers 
  WHERE OrganizerID = '".$_POST["OrganizerID"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["GroupName"] = $row["GroupName"];
  $output["ContactName"] = $row["ContactName"];
 }
 echo json_encode($output);
}
?>