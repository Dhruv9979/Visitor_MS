<?php  
include('../db.php');
 if(isset($_POST["GuideID"]))  
 {  
    $output = '';  
    $query = "SELECT * FROM tab_guides WHERE GuideID = '".$_POST["GuideID"]."'";  
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $output .= '  
    <div class="table-responsive">  
        <table class="table table-hover table-dark" id="data_table">';  
    foreach($result as $row)  
    {  
        $output .='
        <thead>
            <tr>
                <td><label>Record Entered on: </label></td>
                <td>'.$row["Datetimestamp"].'</td>
            </tr>
            <tr>
                <td><label>Guide ID: </label></td>
                <td>'.$row["GuideID"].'</td>
            </tr>
            <tr>
                <td><label>Guide Name</label></td>
                <td>'.$row["GuideName"].'</td>
            </tr>
            <tr>
                <td><label>House or Apartment #: </label></td>
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
                <td>'.$row["PostalCode"].'</td>
            </tr>
            <tr>
                <td><label>Country: </label></td>
                <td>'.$row["Country"].'</td>
            </tr>
            <tr>
                <td><label>Cell #: </label></td>
                <td>'.$row["CellNumber"].'</td>
            </tr>
                <td><label>Email Address: </label></td>
                <td>'.$row["Email"].'</td>
            </tr>
        </thead>
        '; 
    }
    $output .= "</table></div>";  
    echo $output;
}
?>