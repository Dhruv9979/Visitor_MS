<?php
    include('db.php');
    include('function.php');
    if(isset($_POST["OrganizerID"]))
    {
        ob_start();
        $output = array();
        $query = "SELECT * FROM tab_organizers WHERE OrganizerID = '".$_POST["OrganizerID"]."'LIMIT 1";
        $statement = $connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            $output["GroupName"] = $row["GroupName"];
            // $output["OrganizerID"] = $row["OrganizerID"];
            $output["ContactName"] = $row["ContactName"];
            $output["Address1"] = $row["Address1"];
            $output["Address2"] = $row["Address2"];
            $output["City"] = $row["City"];
            $output["Province"] = $row["Province"];
            $output["PostalCode"] = $row["PostalCode"];
            $output["Country"] = $row["Country"];
            $output["Title"] = $row["Title"];
            $output["Telephone1"] = $row["Telephone1"];
            $output["Telephone2"] = $row["Telephone2"];
            $output["FaxNumber"] = $row["FaxNumber"];
            $output["SchoolGeneralEmail"] = $row["SchoolGeneralEmail"];
            $output["Email"] = $row["Email"];
            $output["SubscribedToMailingList"] = $row["SubscribedToMailingList"];
            $output["HowDidYouHear"] = $row["HowDidYouHear"];
            $output["Comments"] = $row["Comments"];
            $output["Diwaliinvites"] = $row["Diwaliinvites"];
            $output["Datetimestamp"] = $row["Datetimestamp"];
        }
        ob_end_clean();
        echo json_encode($output);
    }
?>