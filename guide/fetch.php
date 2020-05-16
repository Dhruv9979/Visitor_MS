<?php
    include('../db.php');
    include('function.php');
    if(isset($_POST["GuideID"]))
    {
        ob_start();
        $output = array();
        $query = "SELECT * FROM tab_guides WHERE GuideID = '".$_POST["GuideID"]."'LIMIT 1";
        $statement = $connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            $output["GuideName"] = $row["GuideName"]; 
            $output["GuideID"] = $row["GuideID"];
            $output["Address"] = $row["Address"];
            $output["City"] = $row["City"];
            $output["Province"] = $row["Province"];
            $output["PostalCode"] = $row["PostalCode"];
            $output["Country"] = $row["Country"];
            $output["CellNumber"] = $row["CellNumber"];
            $output["Email"] = $row["Email"];
            $output["Datetimestamp"] = $row["Datetimestamp"];
        }
        ob_end_clean();
        echo json_encode($output);
    }
?>