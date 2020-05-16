<?php
$GroupName = '';
$GroupType = '';
$GuideName = '';
$Source = '';
$Visit_Status = '';
$GroupDay = '';

$query_GroupName= "SELECT GroupName FROM tab_organizers ORDER BY GroupName";
$statement_GroupName = $connection->prepare($query_GroupName);
$statement_GroupName->execute();
$resultSet_GroupName = $statement_GroupName->fetchAll();
foreach($resultSet_GroupName as $row)
{
    $GroupName .= '<option value="'.$row['GroupName'].'">'.$row['GroupName'].'</option>';
}

$query_GroupType= "SELECT GroupType FROM tab_grouptype";
$statement_GroupType = $connection->prepare($query_GroupType);
$statement_GroupType->execute();
$resultSet_GroupType = $statement_GroupType->fetchAll();
foreach($resultSet_GroupType as $row)
{
    $GroupType .= '<option value="'.$row['GroupType'].'">'.$row['GroupType'].'</option>';
}
$query_GuideName= "SELECT GuideName FROM tab_guides";
$statement_GuideName = $connection->prepare($query_GuideName);
$statement_GuideName->execute();
$resultSet_Guide = $statement_GuideName->fetchAll();
foreach($resultSet_Guide as $row)
{
    $GuideName .= '<option value="'.$row['GuideName'].'">'.$row['GuideName'].'</option>';
}
$query_Source= "SELECT Source FROM tab_source";
$statement_Source = $connection->prepare($query_Source);
$statement_Source->execute();
$resultSet_Source = $statement_Source->fetchAll();
foreach($resultSet_Source as $row)
{
    $Source .= '<option value="'.$row['Source'].'">'.$row['Source'].'</option>';
}
$query_VisitStatus= "SELECT Visit_Status FROM tab_status";
$statement_VisitStatus = $connection->prepare($query_VisitStatus);
$statement_VisitStatus->execute();
$resultSet_Status = $statement_VisitStatus->fetchAll();
foreach($resultSet_Status as $row)
{
    $Visit_Status .= '<option value="'.$row['Visit_Status'].'">'.$row['Visit_Status'].'</option>';
}
$query_Day= "SELECT * FROM day";
$statement_Day = $connection->prepare($query_Day);
$statement_Day->execute();
$resultSet_Day = $statement_Day->fetchAll();
foreach($resultSet_Day as $row)
{
    $GroupDay .= '<option value="'.$row['Day'].'">'.$row['Day'].'</option>';
}
?>