<?php  
include('../db.php');
 if(isset($_POST["GroupID"]))  
 {  
    $output = '';  
    $query = "SELECT * FROM tab_visitorgroups WHERE GroupID = '".$_POST["GroupID"]."'";  
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $output .= '  
    <div class="table-responsive">  
        <table class="table table-hover table-dark" id="data_table">';  
    foreach($result as $row)  
    {  
        $GuideRequired = "";
        $VisitToMuseum = "";
        $MealStatus = "";
        if($row["GuideRequired"] == -1){
            $GuideRequired = "no";
        }
        else{
            $GuideRequired = "yes";
        }
        if($row["VisitToMuseum"] == -1){
            $VisitToMuseum = "no";
        }
        else{
            $VisitToMuseum = "yes";
        }
        if($row["MealStatus"] == 0){
            $MealStatus = "no";
        }
        else{
            $MealStatus = "yes";
        }
        $output .='
        <thead>
            <tr>
                <td><label>Organizer ID: </label></td>
                <td>'.$row["OrganizerID"].'</td>
            </tr>
            <tr>
                <td><label>Group ID: </label></td>
                <td>'.$row["GroupID"].'</td>
            </tr>
            <tr>
                <td><label>Date of Visit: </label></td>
                <td>'. date("d-m-Y",strtotime($row['DateVisit'])).'</td>
            </tr>
            <tr>
                <td><label>Time of Visit: </label></td>
                <td>'. date("h:i",strtotime($row['TimeVisit'])).'</td>
            </tr>
            <tr>
                <td><label>Day of Visit: </label></td>
                <td>'.$row["Day"].'</td>
            </tr>
            <tr>
                <td><label>Group Name: </label></td>
                <td>'.$row["GroupName"].'</td>
            </tr>
            <tr>
                <td><label>Address: </label></td>
                <td>'.$row["Address"].'</td>
            </tr>
            <tr>
                <td><label>City: </label></td>
                <td>'.$row["City"].'</td>
            </tr>
            <tr>
                <td><label>Province: </label></td>
                <td>'.$row["Province"].'</td>
            </tr>
            <tr>
                <td><label>Postal Code: </label></td>
                <td>'.$row["Postalcode"].'</td>
            </tr>
            <tr>
                <td><label>Telephone #: </label></td>
                <td>'.$row["Telephone"].'</td>
            </tr>
                <td><label>Email Address: </label></td>
                <td>'.$row["Email"].'</td>
            </tr>
            <tr>
                <td><label>Group Type: </label></td>
                <td>'.$row["GroupType"].'</td>
            </tr>
            <tr>
                <td><label>Male #: </label></td>
                <td>'.$row["Male"].'</td>
            </tr>
            <tr>
                <td><label>Female #: </label></td>
                <td>'.$row["Female"].'</td>
            </tr>
            <tr>
                <td><label>Handicaped #: </label></td>
                <td>'.$row["Handicaped"].'</td>
            </tr>
            <tr>
                <td><label>Total Visitors : </label></td>
                <td>'.$row["TotalVisitors"].'</td>
            </tr>
            <tr>
                <td><label>Guide Required: </label></td>
                <td>'.$GuideRequired.'</td>
            </tr>
            <tr>
                <td><label>Guide Name: </label></td>
                <td>'.$row["GuideName"].'</td>
            </tr>
            <tr>
                <td><label>Visit To Museum: </label></td>
                <td>'.$VisitToMuseum.'</td>
            </tr>
            <tr>
                <td><label>Group Info: </label></td>
                <td>'.$row["GroupInfo"].'</td>
            </tr>
            <tr>
                <td><label>Status: </label></td>
                <td>'.$row["Status"].'</td>
            </tr>
            <tr>
                <td><label>Record Entered On: </label></td>
                <td>'.$row["DataInputDate"].'</td>
            </tr>
            <tr>
                <td><label>Meal Status: </label></td>
                <td>'.$MealStatus.'</td>
            </tr>
            <tr>
                <td><label>Exhibition Seva: </label></td>
                <td>'.$row["Exhibition_Seva"].'</td>
            </tr>
        </thead>
        '; 
    }
    $output .= "</table></div>";  
    echo $output;
}
?>