<?php
    include('db.php');
    include('function.php');
    if(isset($_POST["operation"]))
    {
        if($_POST["operation"] == "Add")
        {
            $Diwaliinvites = false;
            $SubscribedToMailingList = false;
            if(isset($_POST['Diwaliinvites']))
            {
                $Diwaliinvites = true;
                // echo $Diwaliinvites;
            }
            else
            {
                $Diwaliinvites = false;
                // echo $Diwaliinvites;
            }
            if(isset($_POST['SubscribedToMailingList']))
            {
                $SubscribedToMailingList = true;
                // echo $SubscribedToMailingList;
            }
            else
            {
                $SubscribedToMailingList = false;
                // echo $SubscribedToMailingList;
            }
            $Datetimestamp = date('Y-m-d H:i:s');
            $statement = $connection->prepare("
            INSERT INTO tab_organizers (GroupName, ContactName, Address1, Address2, City, 
            Province, PostalCode, Country, Title, Telephone1, Telephone2, FaxNumber, SchoolGeneralEmail, Email, 
            SubscribedToMailingList, HowDidYouHear, Comments, Datetimestamp, Diwaliinvites)
            VALUES 
            (:GroupName, :ContactName, :Address1, :Address2, :City, :Province, :PostalCode, 
            :Country, :Title, :Telephone1, :Telephone2, :FaxNumber, :SchoolGeneralEmail, :Email, 
            :SubscribedToMailingList, :HowDidYouHear, :Comments, :Datetimestamp, :Diwaliinvites)
            ");
            // echo $statement;
            // echo $SubscribedToMailingList;
            // echo $Diwaliinvites;
            // $statement -> bindparam(':GroupName', $GroupName);
            // $statement -> bindparam(':ContactName', $ContactName);
            // $statement -> bindparam(':Address1', $Address1);
            // $statement -> bindparam(':Address2', $Address2);
            // $statement -> bindparam(':City', $City);
            // $statement -> bindparam(':Province', $Province);
            // $statement -> bindparam(':PostalCode', $PostalCode);
            // $statement -> bindparam(':Country', $Country);
            // $statement -> bindparam(':Title', $Title);
            // $statement -> bindparam(':Telephone1', $Telephone1);
            // $statement -> bindparam(':Telephone2', $Telephone2);
            // $statement -> bindparam(':FaxNumber', $FaxNumber);
            // $statement -> bindparam(':SchoolGeneralEmail', $SchoolGeneralEmail);
            // $statement -> bindparam(':Email', $Email);
            // $statement -> bindparam(':HowDidYouHear', $HowDidYouHear);
            // $statement -> bindparam(':Comments', $Comments);
            // $statement -> bindparam(':Datetimestamp', $Datetimestamp);
            // $statement -> bindparam(':SubscribedToMailingList', $SubscribedToMailingList);
            // $statement -> bindparam(':Diwaliinvites', $Diwaliinvites);
            $result = $statement->execute(
                array(
                    ':GroupName' => $_POST["GroupName"],
                    ':ContactName' => $_POST["ContactName"],
                    ':Address1' => $_POST["Address1"],
                    ':Address2' => $_POST["Address2"],
                    ':City' => $_POST["City"],
                    ':Province' => $_POST["Province"],
                    ':PostalCode' => $_POST["PostalCode"],
                    ':Country' => $_POST["Country"],
                    ':Title' => $_POST["Title"],
                    ':Telephone1' => $_POST["Telephone1"],
                    ':Telephone2' => $_POST["Telephone2"],
                    ':FaxNumber' => $_POST["FaxNumber"],
                    ':SchoolGeneralEmail' => $_POST["SchoolGeneralEmail"],
                    ':Email' => $_POST["Email"],
                    ':SubscribedToMailingList' => $SubscribedToMailingList,
                    ':HowDidYouHear' => $_POST["HowDidYouHear"],
                    ':Comments' => $_POST["Comments"],
                    ':Datetimestamp'  => $Datetimestamp,
                    ':Diwaliinvites' => $Diwaliinvites
                )
            );
            
            if(!empty($result))
            {
                echo 'Data Inserted';
            }
            else{
                echo 'Data Not Inserted';
            }
        }
        if($_POST["operation"] == "Edit")
        { 
            echo print_r('OrganizerID: '.$_POST["OrganizerID"]); 
            $Datetimestamp = date('Y-m-d H:i:s');
            $Diwaliinvites = false;
            $SubscribedToMailingList = false;
            if(isset($_POST['Diwaliinvites']))
            {
                $Diwaliinvites = true;
                // echo $Diwaliinvites;
            }
            if(isset($_POST['SubscribedToMailingList']))
            {
                $SubscribedToMailingList = true;
                // echo $SubscribedToMailingList;
            }
            try {
                    $statement = $connection->prepare(
                    "UPDATE tab_organizers SET 
                    GroupName= :GroupName,
                    ContactName= :ContactName,
                    Address1= :Address1,
                    Address2= :Address2,
                    City= :City,
                    Province= :Province,
                    PostalCode= :PostalCode,
                    Country= :Country,
                    Title= :Title,
                    Telephone1= :Telephone1,
                    Telephone2= :Telephone2,
                    FaxNumber= :FaxNumber,
                    SchoolGeneralEmail= :SchoolGeneralEmail,
                    Email= :Email,
                    SubscribedToMailingList= :SubscribedToMailingList,
                    HowDidYouHear= :HowDidYouHear,
                    Comments= :Comments,
                    Datetimestamp= :Datetimestamp,
                    Diwaliinvites= :Diwaliinvites
                    WHERE OrganizerID = '".$_POST["OrganizerID"]."'
                    ");
                    
                    $result = $statement->execute(
                    array(
                        ':GroupName' => $_POST["GroupName"],
                        ':ContactName' => $_POST["ContactName"],
                        ':Address1' => $_POST["Address1"],
                        ':Address2' => $_POST["Address2"],
                        ':City' => $_POST["City"],
                        ':Province' => $_POST["Province"],
                        ':PostalCode' => $_POST["PostalCode"],
                        ':Country' => $_POST["Country"],
                        ':Title' => $_POST["Title"],
                        ':Telephone1' => $_POST["Telephone1"],
                        ':Telephone2' => $_POST["Telephone2"],
                        ':FaxNumber' => $_POST["FaxNumber"],
                        ':SchoolGeneralEmail' => $_POST["SchoolGeneralEmail"],
                        ':Email' => $_POST["Email"],
                        ':SubscribedToMailingList' => $SubscribedToMailingList,
                        ':HowDidYouHear' => $_POST["HowDidYouHear"],
                        ':Comments' => $_POST["Comments"],
                        ':Datetimestamp'  => $Datetimestamp,
                        ':Diwaliinvites' => $Diwaliinvites
                    )
                );
                $statement->closeCursor();
                $number_filter_row = $statement->rowCount();
                $done = $statement !== false ? true : false;
            }
            catch(PDOException $e) {
                console.log($e->getMessage(), $e->getCode(), array('exception' => $e));
            }
            if(!empty($result))
            {
                // echo print_r($_POST["OrganizerID"]);
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