<?php  
include('../db.php');
 if(isset($_POST["OrganizerID"]))  
 {  
    $output = '';  
    $query = "SELECT * FROM tab_organizers WHERE OrganizerID = '".$_POST["OrganizerID"]."'";  
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $output .= '  
    <div class="table-responsive">  
        <table class="table table-hover table-dark" id="data_table">';  
    foreach($result as $row)  
    {  
        $Diwaliinvites = "";
        $SubscribedToMailingList = "";
        if($row["Diwaliinvites"] == 0){
            $Diwaliinvites = "no";
        }
        else{
            $Diwaliinvites = "yes";
        }
        if($row["SubscribedToMailingList"] == 0){
            $SubscribedToMailingList = "no";
        }
        else{
            $SubscribedToMailingList = "yes";
        }
        $output .='
        <thead>
            <tr>
                <td><label>Record Entered on: </label></td>
                <td>'.$row["Datetimestamp"].'</td>
            </tr>
            <tr>
                <td><label>Organizer ID: </label></td>
                <td>'.$row["OrganizerID"].'</td>
            </tr>
            <tr>
                <td><label>Group Name</label></td>
                <td>'.$row["GroupName"].'</td>
            </tr>
            <tr>
                <td><label>Contact Name</label></td>
                <td>'.$row["ContactName"].'</td>
            </tr>
            <tr>
                <td><label>House or Apartment #: </label></td>
                <td>'.$row["Address1"].'</td>
            </tr>
            <tr>
                <td><label>Street Name: </label></td>
                <td>'.$row["Address2"].'</td>
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
                <td>'.$row["PostalCode"].'</td>
            </tr>
            <tr>
                <td><label>Country: </label></td>
                <td>'.$row["Country"].'</td>
            </tr>
            <tr>
                <td><label>Title or Profession: </label></td>
                <td>'.$row["Title"].'</td>
            </tr>
            <tr>
                <td><label>Home or Office #: </label></td>
                <td>'.$row["Telephone1"].'</td>
            </tr>
            <tr>
                <td><label>Cell Number: </label></td>
                <td>'.$row["Telephone2"].'</td>
            </tr>
            <tr>
                <td><label>Fax Number: </label></td>
                <td>'.$row["FaxNumber"].'</td>
            </tr>
            <tr>
                <td><label>School Email Address: </label></td>
                <td>'.$row["SchoolGeneralEmail"].'</td>
            </tr>
            <tr>
                <td><label>Personal Email Address: </label></td>
                <td>'.$row["Email"].'</td>
            </tr>
            <tr>
                <td><label>How did you hear about us: </label></td>
                <td>'.$row["HowDidYouHear"].'</td>
            </tr>
            <tr>
                <td><label>Santo`s or Karyakar`s Comments on this Organizer</label></td>
                <td>'.$row["Comments"].'</td>
            </tr>
            <tr>
                <td><label>Diwali Invites to be send?</label></td>
                <td>'.$Diwaliinvites.'</td>
            </tr>
            <tr>
                <td><label>Subscribe to BAPS mailing list?</label></td>
                <td>'.$SubscribedToMailingList.'</td>
            </tr>
        </thead>
        '; 
    }
    $output .= "</table></div>";  
    echo $output;
}
?>