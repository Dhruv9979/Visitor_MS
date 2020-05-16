<?php 
    function fetch_data()  
    {  
        $output = '';
        $connection = new PDO("mysql:host=localhost;dbname=baps", "root", "");
        // $sql = "SELECT * FROM tab_visitorgroups WHERE Day = '".$_POST["Day"]."'ORDER BY GroupName";
        $sql = "SELECT tab_visitorgroups.*, tab_organizers.ContactName FROM tab_visitorgroups 
        LEFT JOIN tab_organizers ON tab_visitorgroups.OrganizerID = tab_organizers.OrganizerID 
        WHERE Day = '".$_POST["Day"]."'ORDER BY GroupName";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();  
        foreach($result as $row)
        {       
        $output .= '<tr>  
                        <td>'. date("d-m-Y",strtotime($row['DateVisit'])).'</td>  
                        <td>'. date("h:i",strtotime($row['TimeVisit'])).'</td>  
                        <td>'.$row["GroupName"].'</td>  
                        <td>'.$row["ContactName"].'</td>  
                        <td>'.$row["GroupType"].'</td>  
                        <td>'.$row["TotalVisitors"].'</td>
                        <td>'.$row["Male"].'</td>
                        <td>'.$row["Female"].'</td>
                        <td>'.$row["VisitToMuseum"].'</td>
                        <td>'.$row["GroupInfo"].'</td>
                        <td>'.$row["GuideRequired"].'</td>
                        <td>'.$row["GuideName"].'</td>
                        <td>'.$row["Status"].'</td>
                        <td>'. date("d-m-Y",strtotime($row['DataInputDate'])).'</td>
                    </tr>  
                ';  
        }  
        return $output;  
    } 
    if(isset($_POST["booking_day_pdf"]))  
    {  
        require_once('../tcpdf/tcpdf.php');  
        $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
        $obj_pdf->SetCreator(PDF_CREATOR);  
        $obj_pdf->SetTitle("Group Visits");  
        $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
        $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
        $obj_pdf->SetDefaultMonospacedFont('helvetica');  
        $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
        $obj_pdf->SetMargins(12, 12, 12, true);  
        $obj_pdf->setPrintHeader(false);  
        $obj_pdf->setPrintFooter(false);  
        $obj_pdf->SetAutoPageBreak(TRUE, 10);  
        $obj_pdf->SetFont('helvetica', '', 8);  
        $obj_pdf->AddPage();  
        $content = '';
        $content .= '  
        <h1 align="center">Group Visits</h1><br><br><br> 
        <table border="0.5" cellspacing="0" cellpadding="5" width="290%"> 
            <tr>  
                    <th style="width:2.3%"><b>Visit Date</b></th>  
                    <th style="width:1.5%"><b>Time</b></th>  
                    <th style="width:3.7%"><b>Group Name</b></th>  
                    <th style="width:2.55%"><b>Contact Name</b></th>  
                    <th style="width:3.35%"><b>Group Type</b></th> 
                    <th style="width:1.8%"><b>Total Visitors</b></th> 
                    <th style="width:1.25%"><b>Male</b></th> 
                    <th style="width:1.7%"><b>Female</b></th> 
                    <th style="width:2.13%"><b>Museum?</b></th>  
                    <th style="width:3%"><b>Other Info</b></th> 
                    <th style="width:1.7%"><b>Guide?</b></th> 
                    <th style="width:3.1%"><b>Guide Name</b></th> 
                    <th style="width:1.68%"><b>Status</b></th> 
                    <th style="width:2.3%"><b>Input Date</b></th> 
            </tr>  
        ';  
        $content .= fetch_data();  
        $content .= '</table>';  
        $obj_pdf->writeHTML($content);  
        ob_end_clean();
        $obj_pdf->Output('check-booking-day.pdf', 'I');    
    }  
?>