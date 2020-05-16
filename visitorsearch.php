<?php
include 'header.php';
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] != 'admin')
    {
        header('Location: user.php');
    }
}
else{
    header('Location: index.php');
}
?>
<?php
include('db.php');
// include('delete_modal.php');
include('view_modal.html');
// include('check_booking_day.php');
include('dropdown.php');
// include('modal_check_booking_day.php');
?> 
<?php 
    function fetch_data()  
    {  
        $output = '';
        $connection = new PDO("mysql:host=localhost;dbname=baps", "root", "");
        $sql = "SELECT * FROM tab_visitorgroups WHERE Day = '".$_POST["Day"]."'ORDER BY GroupName";
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
        $obj_pdf->SetMargins('4', '5', '4');  
        $obj_pdf->setPrintHeader(false);  
        $obj_pdf->setPrintFooter(false);  
        $obj_pdf->SetAutoPageBreak(TRUE, 10);  
        $obj_pdf->SetFont('helvetica', '', 7);  
        $obj_pdf->AddPage();  
        $content = '';  
        $content .= '  
        <h3 align="center">Group Visits</h3><br /><br />  
        <table border="0.5" cellspacing="0" cellpadding="5" width="250%">  
            <tr>  
                    <th style="width:46px">Date of Visit</th>  
                    <th style="width:46px">Time</th>  
                    <th style="width:43px">Group Name</th>  
                    <th style="width:43px">Contact Name</th>  
                    <th style="width:50px">Group Type</th> 
                    <th style="width:33px">Total Visitors</th> 
                    <th style="width:26px">Male</th> 
                    <th style="width:34px">Female</th> 
                    <th style="width:41px">Museum?</th>  
                    <th style="width:40px">Other Info</th> 
                    <th style="width:39px">Guide Needed?</th> 
                    <th style="width:50px">Guide Name</th> 
                    <th style="width:35px">Status of Visit</th> 
                    <th style="width:50px">Data Input Date</th> 
            </tr>  
        ';  
        $content .= fetch_data();  
        $content .= '</table>';  
        $obj_pdf->writeHTML($content);  
        ob_end_clean();
        $obj_pdf->Output('check-booking-day.pdf', 'I');    
    }  
?>
<html>
    <head>
        <title>Mandir</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></link>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <style>
            body
            {
                margin:0;
                padding:0;
                background-color:#f1f1f1;
            }
            .box
            {
                width:1270px;
                padding:10px;
                background-color:#fff;
                border:1px solid #ccc;
                border-radius:5px;
                margin-top:5px;
            }
        </style>
    </head>
    <body>
        <div class="container box">
        <h3 align="center">Visitor's List</h3>
        <br />
            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" name="add_button" id="add_button" class="btn btn-primary" data-toggle="modal" data-target="#visitoraddmodal">
                            Add new Visitor
                        </button>
                        <!-- <button type="button" name="view_visitor" id="view_visitor" class="btn btn-primary">
                            View All Visitors
                        </button> -->
                        <button type="button" data-toggle="modal" data-target="#guideaddmodal" name="add_new_guide" id="add_new_guide" class="btn btn-primary">
                            Add New Guide
                        </button>
                        <div class="btn-group" role="group">
                            <button id="reports" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reports
                            </button>
                            <form method="POST">
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <input class="dropdown-item check_booking_day" type="button" data-toggle="modal" data-target="#modal_check_booking_day" name="check_booking_day" id="check_booking_day" value="Check Booking Day" />
                                    <input class="dropdown-item" type="submit" name="check_diwali_dates" id="check_diwali_dates" value ="Check Diwali Dates" />
                                    <input class="dropdown-item" type="submit" name="check_booking_dates" id="check_booking_dates" value ="Check Booking Dates" />
                                    <input class="dropdown-item" type="submit" name="custom_search" id="custom_search" value ="Custom Search" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="search_text" id="search_text" placeholder="Search Group Name" class="form-control" style="display:block" />
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- id ="visitor_table" style="display:none;" -->
                        <div>
                            <table id="data_table" class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th width="30%">Group Name</th>
                                        <th width="5%">View</th>
                                        <th width="5%">Edit</th>
                                        <th width="5%">Delete</th>
                                        <th width="5%">Visit Info</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<!-- Add/Edit Modal enctype="multipart/form-data"-->
<div class="modal fade" name="visitoraddmodal" id="visitoraddmodal" tabindex="-1" role="dialog" aria-labelledby="visitoraddmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >
        <form method="POST" id="insert_form" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visitoraddmodalTitle">Add new Visitor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class = "col-md-3">
                                <div class="form-group">
                                    <label>Record Entered on: </label>
                                    <input type="text" class="form-control" id="Datetimestamp" name="Datetimestamp" placeholder="Readonly input here..." readonly>
                                </div>
                            </div>

                            <!-- <div class = "col-md-3">
                                <div class="form-group">
                                    <label>Organizer ID: </label>
                                    <input type="text" class="form-control OrganizerID" id="OrganizerID" name="OrganizerID" placeholder="Readonly input here..." readonly>
                                </div>
                            </div> -->

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Group Name</label> -->
                                    <input type="text" class="form-control" id="GroupName" name="GroupName" placeholder="Enter Group Name">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>How did you hear about us: </label> -->
                                    <select id="HowDidYouHear" name = "HowDidYouHear" class="custom-select">
                                        <option value="" disabled selected style="display: none;">How did you hear about us: </option>
                                        <?php echo $Source; ?>
                                    </select>
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Contact Name</label> -->
                                    <input type="text" class="form-control" id="ContactName" name="ContactName" placeholder="Enter Contact Name">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>House or Apartment #: </label> -->
                                    <input type="text" class="form-control" id="Address1" name="Address1" placeholder="Enter House or Apartment #">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Street Name: </label> -->
                                    <input type="text" class="form-control" id="Address2" name="Address2" placeholder="Enter Street Name">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>City: </label> -->
                                    <input type="text" class="form-control" id="City" name="City" placeholder="Enter City">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Province: </label> -->
                                    <input type="text" class="form-control" id="Province" name="Province" placeholder="Enter Province">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Postal Code: </label> -->
                                    <input type="text" class="form-control" id="PostalCode" name="PostalCode" placeholder="Enter Postal Code">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Country: </label> -->
                                    <input type="text" class="form-control" id="Country" name="Country" placeholder="Enter Country">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Title or Profession: </label> -->
                                    <input type="text" class="form-control" id="Title" name="Title" placeholder="Enter Title or Profession">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Home or Office #: </label> -->
                                    <input type="text" class="form-control" id="Telephone1" name="Telephone1" placeholder="Enter Home or Office #">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Cell Number: </label> -->
                                    <input type="text" class="form-control" id="Telephone2" name="Telephone2" placeholder="Enter Cell Number">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Fax Number: </label> -->
                                    <input type="text" class="form-control" id="FaxNumber" name="FaxNumber" placeholder="Enter Fax Number">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>School Email Address: </label> -->
                                    <input type="text" class="form-control" id="SchoolGeneralEmail" name="SchoolGeneralEmail" placeholder="Enter School Email Address">
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Personal Email Address: </label> -->
                                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter Personal Email Address">
                                </div>
                            </div>
                            
                            <div class = "col-md-3">
                                <div class="form-group">
                                    <!-- <label>Santo's or Karyakar's Comments on this Organizer</label> -->
                                    <textarea class="form-control" id="Comments" name="Comments" rows="3" placeholder="Santo's or Karyakar's Comments on this Organizer"></textarea>
                                </div>
                            </div>

                            <div class = "col-md-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="Diwaliinvites" id="Diwaliinvites" value = 0>
                                    <label class="custom-control-label" for="Diwaliinvites">Diwali Invites to be send?</label>
                                </div>
                            </div>
                            
                            <div class = "col-md-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="SubscribedToMailingList" id="SubscribedToMailingList" value = 0>
                                    <label class="custom-control-label" for="SubscribedToMailingList">Subscribe to BAPS mailing list?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="OrganizerID" id="OrganizerID">
                    <input type="hidden" name="operation" id="operation">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="action" id="action" value="Add" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------ -->
<!-- Visit-Info-Modal -->
<!-- ----------------------------------------------------------------------------------- -->
<div class="modal fade" name="visitinfomodal" id="visitinfomodal" tabindex="-1" role="dialog" aria-labelledby="visitinfomodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="visitinfomodalTitle">Visit Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="insert_visit_form">
                <div class="modal-body">
                    <div class="row">
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Record Entered on: </label>
                                <input class="form-control" type="text" id="Datetimestamp" name="Datetimestamp" placeholder="Readonly input here..." readonly>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Date of visit</label>
                                <input type="text" class="form-control" id="Dateofvisit" name="Dateofvisit" placeholder="Enter Date of visit">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <input type="text" class="form-control" id="Time" name="Time" placeholder="Enter Time">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Group Name</label>
                                <input type="text" class="form-control" id="GroupName" name="GroupName" placeholder="Enter Group Name">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <!-- <label>Group Type</label> -->
                                <select id="GroupType" name = "GroupType" class="custom-select">
                                    <option value="" disabled selected style="display: none;">Group Type</option>
                                    <?php echo $GroupType; ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Total Visitors</label>
                                <input type="text" class="form-control" id="TotalVisitors" name="TotalVisitors" placeholder="Enter Total Visitors">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Male</label>
                                <input type="text" class="form-control" id="Male" name="Male" placeholder="Enter Total # of Men">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Female</label>
                                <input type="text" class="form-control" id="Female" name="Female" placeholder="Enter Total # of Women">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Handicapped</label>
                                <input type="text" class="form-control" id="Handicapped" name="Handicapped" placeholder="Enter Total # of Handicapped">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="GuideRequired" id="GuideRequired">
                                <label class="custom-control-label" for="GuideRequired">Guide Required?</label>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <!-- <label>Guide Name</label> -->
                                <select id="GuideName" name = "GuideName" class="custom-select">
                                    <option value="" disabled selected style="display: none;">Guide Name</option>
                                    <?php echo $GuideName; ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="VisitToMuseum" id="VisitToMuseum">
                                <label class="custom-control-label" for="VisitToMuseum">Visit To Museum?</label>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="PaymentPending" id="PaymentPending">
                                <label class="custom-control-label" for="PaymentPending">Payment Pending?</label>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Exhibition/Photoshoot Seva</label>
                                <input type="text" class="form-control" id="Seva" name="Seva" placeholder="0.00">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Status of Visit</label>
                                <select id="StatusOfVisit" name = "StatusOfVisit" class="custom-select">
                                    <option value="" disabled selected style="display: none;">Status of Visit</option>
                                    <?php echo $Visit_Status; ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Other Information</label>
                                <textarea class="form-control" id="OtherInfo" name="OtherInfo" rows="1" placeholder="Other Information"></textarea>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="OrganizerID" id="OrganizerID">
                            </div>
                        </div>
                        <hr>
                        <h4>Only for Weddings, Baby Showers or PhotoShoot Only</h4>
                        <hr>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>City: </label>
                                <input type="text" class="form-control" id="City" name="City" placeholder="Enter City">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Province: </label>
                                <input type="text" class="form-control" id="Province" name="Province" placeholder="Enter Province">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Postal Code: </label>
                                <input type="text" class="form-control" id="PostalCode" name="PostalCode" placeholder="Enter Postal Code">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Country: </label>
                                <input type="text" class="form-control" id="Country" name="Country" placeholder="Enter Country">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label>Cell Number: </label>
                                <input type="text" class="form-control" id="Telephone2" name="Telephone2" placeholder="Enter Cell Number">
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="form-group">
                                <label> Email Address: </label>
                                <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter Email Address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------------ -->
<!-- Add Guide Modal -->
<div class="modal fade" name="guideaddmodal" id="guideaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
        <form method="POST" id="guide_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add new Guide</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class = "col-md-6">
                                <div class="form-group">
                                    <label>Record Entered on: </label>
                                    <input class="form-control" type="text" id="Datetimestamp" name="Datetimestamp" placeholder="Readonly input here..." readonly>
                                </div>
                            </div>

                            <div class = "col-md-6">
                                <div class="form-group">
                                    <label>Guide ID: </label>
                                    <input type="text" class="form-control" id="GuideID" name="GuideID" placeholder="Readonly input here..." readonly>
                                </div>
                            </div>

                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>Group Name</label> -->
                                    <input type="text" class="form-control" id="GuideName" name="GuideName" placeholder="Enter Guide Name">
                                </div>
                            </div>

                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>House or Apartment #: </label> -->
                                    <input type="text" class="form-control" id="GuideAddress" name="GuideAddress" placeholder="Enter Address">
                                </div>
                            </div>

                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>City: </label> -->
                                    <input type="text" class="form-control" id="GuideCity" name="GuideCity" placeholder="Enter City">
                                </div>
                            </div>
                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>Province: </label> -->
                                    <input type="text" class="form-control" id="GuideProvince" name="GuideProvince" placeholder="Enter Province">
                                </div>
                            </div>
                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>Postal Code: </label> -->
                                    <input type="text" class="form-control" id="GuidePostalCode" name="GuidePostalCode" placeholder="Enter Postal Code">
                                </div>
                            </div>
                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>Country: </label> -->
                                    <input type="text" class="form-control" id="GuideCountry" name="GuideCountry" placeholder="Enter Country">
                                </div>
                            </div>
                            
                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>Cell Number: </label> -->
                                    <input type="text" class="form-control" id="GuideCellNumber" name="GuideCellNumber" placeholder="Enter Cell Number">
                                </div>
                            </div>
                            
                            <div class = "col-md-6">
                                <div class="form-group">
                                    <!-- <label>Personal Email Address: </label> -->
                                    <input type="text" class="form-control" id="GuideEmail" name="GuideEmail" placeholder="Enter Personal Email Address">
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="GuideID" id="GuideID" />
                    <input type="hidden" name="guide_operation" id="guide_operation" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="guide_action" id="guide_action" value="Add" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ------------------------------------------------------------------------- -->
<!-- ----Delete modal---------------------------------------------------------------------- -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deletemodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletemodalTitle" style="color:red">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" name="OrganizerID" id="OrganizerID">
                <h4>Are you sure you want to delete this record?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" name = "delete_record" id="delete_record" class="btn btn-danger">Yes</button>                  </div>
            </div>
        </div>
    </div> 
</div>
<!-- -------------------------------------------------------------------------------- -->
<!-- ---------Check booking day modal----------------------------------------------------------- -->
<div class="modal fade" id="modal_check_booking_day" tabindex="-1" role="dialog" aria-labelledby="modal_check_booking_day_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id = "booking_day_form" target="_blank">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_check_booking_day_label">Check Booking day</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class = "col-md-6">
                        <div class="form-group">
                            <!-- <label>Select Day</label> -->
                            <select id="Day" name = "Day" class="custom-select">
                                <option value="" disabled selected style="display: none;">Select Day</option>
                                <?php echo $GroupDay; ?>
                            </select>
                        </div>
                        <div id="response"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name = "booking_day_pdf" id="booking_day_pdf" class="btn btn-primary">Generate PDF</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- --------------------------------------------------------------------------- -->
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
    var dataTable = $('#data_table').DataTable({
        "scrollY":        "260px",
        "scrollCollapse": true,
        "pagingType":"full_numbers",
        "lengthMenu":[
            [4, 10, 25, 50, -1],
            [4, 10, 25, 50, "All"]
        ],
        "processing" : true,
        "serverSide" : true,
        "order":[],
        "ajax" : {
            url:"search.php",
            type:"POST",
        },
        "columnDefs":[{
            "targets":[0, 3, 4],
            "orderable":false,
            },
        ],
    });

    $('#add_button').click(function(){
        $('#insert_form')[0].reset();
        $('.modal-title').text("Add User");
        $('#action').val("Add");
        $('#operation').val("Add");
    });

    $(document).on('submit', '#insert_form', function(event){
        event.preventDefault();
        var GroupName = $('#GroupName').val();
        if(GroupName != '')
        {
            $.ajax({
            url:"insert.php",
            type:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
                alert(data);
                $('#insert_form')[0].reset();
                $('#visitoraddmodal').modal('hide');
                dataTable.ajax.reload();
                }
            });
        }
        else
        {
            alert("GroupName is required");
        }
    });
    $(document).on('click', '.edit_data', function(){  
        var OrganizerID = $(this).attr("id");
        $.ajax({  
            url:"fetch.php",  
            type:'post',  
            data:{OrganizerID:OrganizerID}, 
            dataType:"json",  
            success:function(data){ 
                console.log(data); 
                $('#Datetimestamp').val(data.Datetimestamp);
                // $('#OrganizerID').val(OrganizerID);
                $('#GroupName').val(data.GroupName);
                $('#ContactName').val(data.ContactName);
                $('#Address1').val(data.Address1);
                $('#Address2').val(data.Address2);
                $('#City').val(data.City);
                $('#Province').val(data.Province);
                $('#PostalCode').val(data.PostalCode);
                $('#Country').val(data.Country);
                $('#Title').val(data.Title);
                $('#Telephone1').val(data.Telephone1);
                $('#Telephone2').val(data.Telephone2);
                $('#FaxNumber').val(data.FaxNumber);
                $('#SchoolGeneralEmail').val(data.SchoolGeneralEmail);
                $('#Email').val(data.Email);
                $('#HowDidYouHear').val(data.HowDidYouHear);
                $('#Comments').val(data.Comments);
                $('#Diwaliinvites').val(data.Diwaliinvites);
                $('#SubscribedToMailingList').val(data.SubscribedToMailingList);
                $('#visitoraddmodal').modal("show"); 
                $('.modal-title').text("Edit User");
                $('#OrganizerID').val(OrganizerID);  
                $('#action').val("Edit");
                $('#operation').val("Edit"); 
                alert(OrganizerID);
            }
        });
    });

    $('#data_table').on('click', '.view_data', function(){
        var OrganizerID = $(this).attr("id");
        $.ajax({  
            url:"select.php",  
            method:"post",  
            data:{OrganizerID:OrganizerID},  
            success:function(data){  
                console.log(data);
                $('#visitor_detail').html(data);  
                $('#view_modal').modal("show");  
            }  
        });  
    });

    $('#data_table').on('click', '.delete', function(){
        var OrganizerID = $(this).attr("id");
        $('#delete_record').click(function(){
            $.ajax({
                type:'post',
                url:'delete.php',
                data:{OrganizerID:OrganizerID},
                success:function(data){
                    $('#deletemodal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        });
    });
    // $(document).on('click', '.delete', function(){
    //     var OrganizerID = $(this).attr("id");
    //     if(confirm("Are you sure you want to delete this?"))
    //     {
    //         $.ajax({
    //         url:"delete.php",
    //         method:"POST",
    //         data:{OrganizerID:OrganizerID},
    //         success:function(data){
    //             alert(data);
    //             dataTable.ajax.reload();
    //             }
    //         });
    //     }
    //     else
    //     {
    //         return false; 
    //     }
    // });
    $('#data_table').on('click', '.visitorinfo_data', function(){
        var OrganizerID = $(this).attr("id");
        $.ajax({
            method:'post',
            url:'visit_info.php',
            data:{OrganizerID:OrganizerID},
            success:function(data){
                $('#visitinfomodal').modal('show');
            }
        });
    });
    // $(document).on('click', '.check_booking_day', function(){
    //     $('#booking_day_pdf').click(function(){
    //         $.ajax({
    //             url : "check_booking_day.php",
    //             type : "POST",
    //             data : {},
    //             success : function(data) {
    //             $("#response").html("Confirmed Sucessfully!");
    //             }
    //         });
    //     });
    // });
});
</script>