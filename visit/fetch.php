<?php
    include('../db.php');
    include('function.php');
    if(isset($_POST["GroupID"]))
    {
        ob_start();
        $output = array();
        $query = "SELECT * FROM tab_visitorgroups WHERE GroupID = '".$_POST["GroupID"]."'LIMIT 1";
        $statement = $connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            $output["DataInputDate"] = $row["DataInputDate"]; 
            $output["DateVisit"] = date("d-m-Y",strtotime($row['DateVisit']));
            $output["TimeVisit"] = date("h:i",strtotime($row['TimeVisit']));
            $output["GroupName"] = $row["GroupName"];
            $output["GroupType"] = $row["GroupType"];
            $output["TotalVisitors"] = $row["TotalVisitors"];
            $output["Male"] = $row["Male"];
            $output["Female"] = $row["Female"];
            $output["handicaped"] = $row["handicaped"];
            $output["GuideRequired"] = $row["GuideRequired"];
            $output["GuideName"] = $row["GuideName"];
            $output["VisitToMuseum"] = $row["VisitToMuseum"];
            $output["Exhibition_Seva"] = $row["Exhibition_Seva"];
            $output["MealStatus"] = $row["MealStatus"];
            $output["Status"] = $row["Status"]; 
            $output["GroupInfo"] = $row["GroupInfo"];
        }
        ob_end_clean();
        echo json_encode($output);
    }
?>