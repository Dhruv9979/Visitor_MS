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
include('../db.php');
include('../dropdown.php');
include('../reports/check_booking_day.php');
include('../reports/check_booking_dates.php');
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/cleave.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/cleave-esm.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/addons/cleave-phone.ca.js"></script>
<!--         <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> -->
        <script src="../js/datepicker.js"></script>
    </head>
    <body>
        <div class="container box">
            <img src="..\images\BAPS_Aksharderi_Logo.png" style="float: left;" alt = "Logo">
            <h1 class="logoHeader">Visits List</h1>
        <br />
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button id = "Home" name = "Home" class="btn btn-primary" onClick="window.open('../visitor/visitorsearch.php', '_top');">
                    <span class="icon">Home</span>
                </button>
                <button type="button" data-toggle="modal" data-target="#visitinfomodal" name="add_new_visit" id="add_new_visit" class="btn btn-primary">
                    Add New Visit
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
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <table id="data_table" class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th width="30%">Group Name</th>
                                        <th width="5%">View</th>
                                        <th width="5%">Edit</th>
                                        <th width="5%">Delete</th>
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
<?php include('modals/view_modal.html'); ?>
<?php include('modals/delete_modal.html'); ?>
<?php include('../reports/modals/modal_check_booking_day.php'); ?>
<?php include('../reports/modals/modal_booking_dates.php'); ?>

<script type="text/javascript" language="javascript" >
    $(document).ready(function(){
        var OrganizerID = <?php echo $_GET["OrganizerID"];?>;
        alert(OrganizerID);
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
                data:{OrganizerID:OrganizerID},
            },
            "columnDefs":[{
                "targets":[0, 1, 2, 3],
                "orderable":false,
                },
            ],
        });
        $('#add_new_visit').click(function(){
            $('#insert_visit_form')[0].reset();
            $('.modal-title').text("Add new Visit");
            $('#visit_action').val("Add");
            $('#visit_operation').val("Add");
        });

        $(document).on('submit', '#insert_visit_form', function(event){
            event.preventDefault();
            var formData = new FormData(this);
            formData.append("OrganizerID", OrganizerID);
            var GroupName = $('#GroupName').val();
            if(GroupName != '')
            {
                $.ajax({
                url:"insert.php",
                type:'POST',
                data: formData,
                contentType:false,
                processData:false,
                success:function(data){
                    console.log(data);
                    // $('#GroupName').val(GroupName);
                    $('#insert_visit_form')[0].reset();
                    $('#visitinfomodal').modal('hide');
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
            var GroupID = $(this).attr("id");
            $.ajax({  
                url:"fetch.php",  
                type:'post',  
                data:{GroupID:GroupID}, 
                dataType:"json",  
                success:function(data){ 
                    // console.log(data); 
                    $('#DataInputDate').val(data.DataInputDate);
                    $('#DateVisit').val(data.DateVisit);
                    $('#TimeVisit').val(data.TimeVisit);
                    $('#GroupName').val(data.GroupName);
                    $('#GroupType').val(data.GroupType);
                    $('#TotalVisitors').val(data.TotalVisitors);
                    $('#Male').val(data.Male);
                    $('#Female').val(data.Female);
                    $('#Handicaped').val(data.Handicaped);
                    // $('#GuideRequired').val(data.GuideRequired);
                    $('#GuideRequired').prop('checked', data.GuideRequired);
                    $('#GuideName').val(data.GuideName);
                    // $('#VisitToMuseum').val(data.VisitToMuseum);
                    $('#VisitToMuseum').prop('checked', data.VisitToMuseum);
                    $('#PaymentPending').val(data.PaymentPending);
                    $('#Exhibition_Seva').val(data.Exhibition_Seva);
                    // $('#MealStatus').val(data.MealStatus);
                    $('#MealStatus').prop('checked', data.MealStatus);
                    $('#Status').val(data.Status);
                    $('#GroupInfo').val(data.GroupInfo);
                    $('#Address').val(data.Address);
                    $('#City').val(data.City);
                    $('#Province').val(data.Province);
                    $('#Postalcode').val(data.Postalcode);
                    $('#Telephone').val(data.Telephone);
                    $('#Email').val(data.Email);
                    $('#visitinfomodal').modal("show"); 
                    $('.modal-title').text("Edit Visit");
                    $('#GroupID').val(GroupID);  
                    $('#visit_action').val("Edit");
                    $('#visit_operation').val("Edit");
                    alert(GroupID);
                }
            });
        });
        $('#data_table').on('click', '.view_data', function(){
            var GroupID = $(this).attr("id");
            $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{GroupID:GroupID},  
                success:function(data){  
                    console.log(data);
                    $('#visitor_detail').html(data);  
                    $('#view_modal').modal("show");  
                }  
            });  
        });
        $('#data_table').on('click', '.delete', function(){
            var GroupID = $(this).attr("id");
            $('#delete_record').click(function(){
                $.ajax({
                    type:'post',
                    url:'delete.php',
                    data:{GroupID:GroupID},
                    success:function(data){
                        $('#deletemodal').modal('hide');
                        dataTable.ajax.reload();
                    }
                });
            });
        });
    });
</script>