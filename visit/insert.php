<?php
    include('../db.php');
    include('function.php');
    if(isset($_POST["visit_operation"]))
    {
      $GuideRequired = -1;
      $VisitToMuseum = -1;
      $MealStatus = 0;
        if($_POST["visit_operation"] == "Add")
        {
            $DateVisit = date("Y-m-d H-i-s",strtotime($_POST['DateVisit']));
            $TimeVisit = date("Y-m-d H-i-s",strtotime($_POST['TimeVisit']));
            if(isset($_POST['GuideRequired']))
            {
                $GuideRequired = 1;
                // echo $GuideRequired;
            }
            if(isset($_POST['VisitToMuseum']))
            {
                $VisitToMuseum = 1;
                // echo $VisitToMuseum;
            }
            if(isset($_POST['MealStatus']))
            {
                $MealStatus = 1;
                // echo $VisitToMuseum;
            }
//             $TotalVisitors = !empty($_POST['TotalVisitors']) ? "'".$_POST['TotalVisitors']."'" : NULL;
//             $Male = !empty($_POST['Male']) ? "'".$_POST['Male']."'" : NULL;
//             $Female = !empty($_POST['Female']) ? "'".$_POST['Female']."'" : NULL;
//             $Handicaped = !empty($_POST['Handicaped']) ? "'".$_POST['Handicaped']."'" : NULL;
//             $Exhibition_Seva = !empty($_POST['Exhibition_Seva']) ? "'".$_POST['Exhibition_Seva']."'" : NULL;
            // $DateVisit = $_POST["Datevisit"];
            $DateVisit = date("Y-m-d",strtotime($_POST['DateVisit']));
            $TimeVisit = date("Y-m-d H:i:s",strtotime($_POST['TimeVisit']));
            $DataInputDate = date('Y-m-d');
            try {
                $statement = $connection->prepare("
                INSERT INTO tab_visitorgroups (OrganizerID, DateVisit, TimeVisit, Day, GroupName, GroupType, TotalVisitors, Male, 
                Female, Handicaped, GuideRequired, GuideName, VisitToMuseum, Exhibition_Seva, MealStatus, Status, GroupInfo, 
                Address, City, Province, Postalcode, Telephone, Email, DataInputDate)
                VALUES 
                (:OrganizerID, :DateVisit, :TimeVisit, :Day, :GroupName, :GroupType, :TotalVisitors, :Male, :Female, :Handicaped, 
                :GuideRequired, :GuideName, :VisitToMuseum, :Exhibition_Seva, :MealStatus, :Status, :GroupInfo, 
                :Address, :City, :Province, :Postalcode, :Telephone, :Email,  :DataInputDate)
                ");
                $result = $statement->execute(
                    array(
                        ':OrganizerID' => $_POST["OrganizerID"],
                        ':DateVisit' => $DateVisit,
                        ':TimeVisit' => $TimeVisit,
                        ':Day' => $_POST["Day"],
                        ':GroupName' => $_POST["GroupName"],
                        ':GroupType' => $_POST["GroupType"],
                        ':TotalVisitors' => $_POST['TotalVisitors'],
                        ':Male' => $_POST['Male'],
                        ':Female' => $_POST['Female'],
                        ':Handicaped' => $_POST['Handicaped'],
                        ':GuideRequired' => $GuideRequired,
                        ':GuideName' => $_POST["GuideName"],
                        ':VisitToMuseum' => $VisitToMuseum,
                        ':Exhibition_Seva' => $_POST['Exhibition_Seva'],
                        ':MealStatus' => $MealStatus,
                        ':Status' => $_POST["Status"],
                        ':GroupInfo' => $_POST["GroupInfo"],
                        ':Address' => $_POST["Address"],
                        ':City' => $_POST["City"],
                        ':Province' => $_POST["Province"],
                        ':Postalcode' => $_POST["Postalcode"],
                        ':Telephone' => $_POST["Telephone"],
                        ':Email' => $_POST["Email"],
                        ':DataInputDate'  => $DataInputDate
                    )
                );
            }
            catch(PDOException $e) {
                console.log($e->getMessage(), $e->getCode(), array('exception' => $e));
            }
            if(!empty($result))
                {
                    // echo print_r($_POST["GroupID"]);
                    echo "\r\n";
                    echo 'Data Inserted';
                    echo "\r\n";
                    // echo $done;
                    echo 'Error Code: '.$statement->errorCode();
                    echo "\r\n";
                    // echo PDO::errorInfo();
                    echo 'Error occurred: '.implode(":",$connection->errorInfo());
                }
                else{
                    echo "\r\n";
                    echo 'Data Not Inserted';
                    echo "\r\n";
                    // echo $done;
                    echo 'Error Code: '.$statement->errorCode();
                    echo "\r\n";
                    // echo PDO::errorInfo();
                    echo 'Error occurred: '.implode(":",$connection->errorInfo());
                }
        }
        if($_POST["visit_operation"] == "Edit")
        { 
            $DateVisit = date("Y-m-d H-i-s",strtotime($_POST['DateVisit']));
            $TimeVisit = date("Y-m-d H-i-s",strtotime($_POST['TimeVisit']));
            // echo ('GroupID: '.$_POST["GroupID"]); 
            if(isset($_POST['GuideRequired']))
            {
                $GuideRequired = 1;
            }
            if(isset($_POST['VisitToMuseum']))
            {
                $VisitToMuseum = 1;
            }
            if(isset($_POST['MealStatus']))
            {
                $MealStatus = 1;
            }
//             $TotalVisitors = !empty($_POST['TotalVisitors']) ? "'".$_POST['TotalVisitors']."'" : NULL;
//             $Male = !empty($_POST['Male']) ? "'".$_POST['Male']."'" : NULL;
//             $Female = !empty($_POST['Female']) ? "'".$_POST['Female']."'" : NULL;
//             $Handicaped = !empty($_POST['Handicaped']) ? "'".$_POST['Handicaped']."'" : NULL;
//             $Exhibition_Seva = !empty($_POST['Exhibition_Seva']) ? "'".$_POST['Exhibition_Seva']."'" : NULL;
            $Datetimestamp = date('Y-m-d H:i:s');
            try {
                
                $statement = $connection->prepare(
                "UPDATE tab_visitorgroups SET 
                OrganizerID= :OrganizerID,
                DateVisit= :DateVisit,
                TimeVisit= :TimeVisit,
                Day= :Day,
                GroupName= :GroupName,
                GroupType= :GroupType,
                TotalVisitors= :TotalVisitors,
                Male= :Male,
                Female= :Female,
                Handicaped= :Handicaped,
                GuideRequired= :GuideRequired,
                GuideName= :GuideName,
                VisitToMuseum= :VisitToMuseum,
                Exhibition_Seva= :Exhibition_Seva,
                MealStatus= :MealStatus,
                Status= :Status,
                GroupInfo= :GroupInfo,
                Address= :Address,
                City= :City,
                Province= :Province,
                Postalcode= :Postalcode,
                Telephone= :Telephone,
                Email= :Email,
                DataInputDate= :DataInputDate
                WHERE GroupID = '".$_POST["GroupID"]."'
                ");
                
                $result = $statement->execute(
                    array(
                        ':OrganizerID' => $_POST["OrganizerID"],
                        ':DateVisit' => $DateVisit,
                        ':TimeVisit' => $TimeVisit,
                        ':Day' => $_POST["Day"],
                        ':GroupName' => $_POST["GroupName"],
                        ':GroupType' => $_POST["GroupType"],
                        ':TotalVisitors' => $_POST['TotalVisitors'],
                        ':Male' => $_POST['Male'],
                        ':Female' => $_POST['Female'],
                        ':Handicaped' => $_POST['Handicaped'],
                        ':GuideRequired' => $GuideRequired,
                        ':GuideName' => $_POST["GuideName"],
                        ':VisitToMuseum' => $VisitToMuseum,
                        ':Exhibition_Seva' => $_POST["Exhibition_Seva"],
                        ':MealStatus' => $MealStatus,
                        ':Status' => $_POST["Status"],
                        ':GroupInfo' => $_POST["GroupInfo"],
                        ':Address' => $_POST["Address"],
                        ':City' => $_POST["City"],
                        ':Province' => $_POST["Province"],
                        ':Postalcode' => $_POST["Postalcode"],
                        ':Telephone' => $_POST["Telephone"],
                        ':Email' => $_POST["Email"],
                        ':DataInputDate'  => $DataInputDate
                    )
                );
                $statement->closeCursor();
                $number_filter_row = $statement->rowCount();
                $done = $statement !== 0 ? 1 : 0;
            }
            catch(PDOException $e) {
                console.log($e->getMessage(), $e->getCode(), array('exception' => $e));
            }
            if(!empty($result))
            {
                // echo print_r($_POST["GroupID"]);
                echo "\r\n";
                echo 'Data Updated';
                echo "\r\n";
                echo 'Row Affected: '.$number_filter_row;
                echo "\r\n";
                // echo $done;
                echo 'Error Code: '.$statement->errorCode();
                echo "\r\n";
                // echo PDO::errorInfo();
                echo 'Error occurred: '.implode(":",$connection->errorInfo());
            }
            else{
                echo "\r\n";
                echo 'Data Not Updated';
                echo "\r\n";
                echo 'Row Affected: '.$number_filter_row;
                echo "\r\n";
                // echo $done;
                echo 'Error Code: '.$statement->errorCode();
                echo "\r\n";
                // echo PDO::errorInfo();
                echo 'Error occurred: '.implode(":",$connection->errorInfo());
            }
        }
    }
?>