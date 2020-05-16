<?php 
    function fetch_data()  
    {  
        $output = '';
        $connection = new PDO("mysql:host=localhost;dbname=baps", "root", "");
        $sql = "SELECT * FROM tab_visitorgroups ORDER BY GroupName";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();  
        foreach($result as $row)
        {       
        $output .= '<tr>  
                        <td>'.$row["DateVisit"].'</td>  
                        <td>'.$row["TimeVisit"].'</td>  
                        <td>'.$row["GroupName"].'</td>  
                        <td>'.$row["GroupName"].'</td>  
                        <td>'.$row["GroupType"].'</td>  
                        <td>'.$row["TotalVisitors"].'</td>
                        <td>'.$row["Male"].'</td>
                        <td>'.$row["Female"].'</td>
                        <td>'.$row["VisitToMuseum"].'</td>
                        <td>'.$row["GroupInfo"].'</td>
                        <td>'.$row["GuideRequired"].'</td>
                        <td>'.$row["GuideName"].'</td>
                        <td>'.$row["Status"].'</td>
                        <td>'.$row["DataInputDate"].'</td>
                    </tr>  
                ';  
        }  
        return $output;  
    } 
    if(isset($_POST["booking_day_pdf"]))  
    {  
        require_once('tcpdf/tcpdf.php');  
        $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
        $obj_pdf->SetCreator(PDF_CREATOR);  
        $obj_pdf->SetTitle("Group Visits");  
        $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
        $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
        $obj_pdf->SetDefaultMonospacedFont('helvetica');  
        $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
        $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
        $obj_pdf->setPrintHeader(false);  
        $obj_pdf->setPrintFooter(false);  
        $obj_pdf->SetAutoPageBreak(TRUE, 10);  
        $obj_pdf->SetFont('helvetica', '', 8);  
        $obj_pdf->AddPage();  
        $content = '';  
        $content .= '  
        <h3 align="center">Group Visits</h3><br /><br />  
        <table border="1" cellspacing="0" cellpadding="5">  
            <tr>  
                    <th>Date of Visit</th>  
                    <th>Time</th>  
                    <th>Group Name</th>  
                    <th>Contact Name</th>  
                    <th>Group Type</th> 
                    <th>Total Visitors</th> 
                    <th>Male</th> 
                    <th>Female</th> 
                    <th>Museum?</th>  
                    <th>Other Info</th> 
                    <th>Guide Needed</th> 
                    <th>Guide Name</th> 
                    <th>Status of Visit</th> 
                    <th>Data Input Date</th> 
            </tr>  
        ';  
        $content .= fetch_data();  
        $content .= '</table>';  
        $obj_pdf->writeHTML($content);  
        ob_end_clean();
        $obj_pdf->Output('check-booking-day.pdf', 'I');    
    }  
?>