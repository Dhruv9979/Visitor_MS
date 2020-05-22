<?php
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] != 'admin')
    {
        header('Location: ../user.php');
    }
}
else{
    header('Location: ../index.php');
}
?>
<?php
include('../db.php');
include('../reports/check_booking_day.php');
include('../reports/check_booking_dates.php');
include('../dropdown.php');
?> 

<html>
    <head>
        <title>Mandir</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></link>
<!--         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"> -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/datepicker.css">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<!--         <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/cleave.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/cleave-esm.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/addons/cleave-phone.ca.js"></script>
        <script src="../js/datepicker.js"></script>
    </head>
    <body>
        <div class="container box">
            <img src="../images/BAPS_Aksharderi_Logo.png" style="float: left;" alt = "Logo">
            <!-- <img src="images\BAPS_Aksharderi_Logo.png" style="float: right;" alt="Logo" /> -->
            <h1 class="logoHeader">Visitors List</h1>
        <br />
            <!-- <div class="card">
                <div class="card-body"> -->
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button id = "Home" name = "Home" class="btn btn-primary" onClick="window.open('visitorsearch.php', '_top');">
                            <span class="icon">Home</span>
                        </button>
                    
                        <button type="button" name="add_button" id="add_button" class="btn btn-primary" data-toggle="modal" data-target="#visitoraddmodal">
                            Add new Visitor
                        </button>
                        <!-- <button type="button" name="view_visitor" id="view_visitor" class="btn btn-primary">
                            View All Visitors
                        </button> -->
                        <!-- <button type="button" data-toggle="modal" data-target="#guideaddmodal" name="add_new_guide" id="add_new_guide" class="btn btn-primary">
                            Add New Guide
                        </button> -->
                        <button id = "Guide" name = "Guide" class="btn btn-primary" onClick="window.open('../guide/guide_search.php', '_top');">
                            <span class="icon">Guide</span>
                        </button>
                        <div class="btn-group" role="group">
                            <button id="reports" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reports
                            </button>
                            <form method="POST">
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <input class="dropdown-item check_booking_day" type="button" data-toggle="modal" data-target="#modal_check_booking_day" name="check_booking_day" id="check_booking_day" value="Check Booking Day" />
                                    <input class="dropdown-item" type="submit" name="check_diwali_dates" id="check_diwali_dates" value ="Check Diwali Dates" />
                                    <input class="dropdown-item check_booking_dates" type="button" data-toggle="modal" data-target="#modal_booking_dates"name="check_booking_dates" id="check_booking_dates" value ="Check Booking Dates" />
                                    <input class="dropdown-item" type="submit" name="custom_search" id="custom_search" value ="Custom Search" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <a style="float: right;" class="btn btn-primary" href="../logout.php" role="button">Logout</a>
                    <br />
                    <br />
                <!-- </div>
            </div> -->
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

<?php include('modals/add_edit_modal.php'); ?>
<?php include('modals/delete_modal.html'); ?>
<?php include('modals/view_modal.html'); ?>
<?php include('../reports/modals/modal_check_booking_day.php'); ?>
<?php include('../reports/modals/modal_booking_dates.php'); ?>

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
            "targets":[0, 1, 2, 3, 4],
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
                $('#Diwaliinvites').prop('checked', data.Diwaliinvites);
                $('#SubscribedToMailingList').prop('checked', data.SubscribedToMailingList);
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
    
    $('#data_table').on('click', '.visitorinfo_data', function(){
        var OrganizerID = $(this).attr("id");
        $.ajax({
            method:'post',
            data:{OrganizerID:OrganizerID},
            success:function(data){
                window.location.assign("../visit/visit_search.php?OrganizerID=" + OrganizerID);
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