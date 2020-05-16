<?php
    include('../db.php');
    include('function.php');
    if(isset($_POST["guide_operation"]))
    {
        if($_POST["guide_operation"] == "Add")
        {
            $Datetimestamp = date('Y-m-d H:i:s');
            $statement = $connection->prepare("
            INSERT INTO tab_guides (GuideName, Address, City, 
            Province, PostalCode, Country, CellNumber, Email, 
            Datetimestamp)
            VALUES 
            (:GuideName, :Address, :City, :Province, :PostalCode, 
            :Country, :CellNumber, :Email, 
            :Datetimestamp)
            ");
            $result = $statement->execute(
                array(
                    ':GuideName' => $_POST["GuideName"],
                    ':Address' => $_POST["Address"],
                    ':City' => $_POST["City"],
                    ':Province' => $_POST["Province"],
                    ':PostalCode' => $_POST["PostalCode"],
                    ':Country' => $_POST["Country"],
                    ':CellNumber' => $_POST["CellNumber"],
                    ':Email' => $_POST["Email"],
                    ':Datetimestamp'  => $Datetimestamp
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
        if($_POST["guide_operation"] == "Edit")
        { 
            echo ('GuideID: '.$_POST["GuideID"]); 
            $Datetimestamp = date('Y-m-d H:i:s');
            try {
                
                    $statement = $connection->prepare(
                    "UPDATE tab_guides SET 
                    GuideName= :GuideName,
                    Address= :Address,
                    City= :City,
                    Province= :Province,
                    PostalCode= :PostalCode,
                    Country= :Country,
                    CellNumber= :CellNumber,
                    Email= :Email,
                    Datetimestamp= :Datetimestamp
                    WHERE GuideID = '".$_POST["GuideID"]."'
                    ");
                    
                    $result = $statement->execute(
                    array(
                        ':GuideName' => $_POST["GuideName"],
                        ':Address' => $_POST["Address"],
                        ':City' => $_POST["City"],
                        ':Province' => $_POST["Province"],
                        ':PostalCode' => $_POST["PostalCode"],
                        ':Country' => $_POST["Country"],
                        ':CellNumber' => $_POST["CellNumber"],
                        ':Email' => $_POST["Email"],
                        ':Datetimestamp'  => $Datetimestamp
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
                // echo print_r($_POST["GuideID"]);
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