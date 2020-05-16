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
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></link>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/datepicker.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
        <script src="../js/datepicker.js"></script>
    </head>
    <body>
        <div class="container box">
            <img src="..\images\BAPS_Aksharderi_Logo.png" style="float: left;" alt = "Logo">
            <h1 class="logoHeader">Guides List</h1>
        <br />
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button id = "Home" name = "Home" class="btn btn-primary" onClick="window.open('../visitor/visitorsearch.php', '_top');">
                    <span class="icon">Home</span>
                </button>
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
                                        <th width="30%">Guide Name</th>
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

<?php include('modals/add_guide_modal.html'); ?>
<?php include('modals/view_modal.html'); ?>
<?php include('modals/delete_modal.html'); ?>
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
            "targets":[0, 1, 2, 3],
            "orderable":false,
            },
        ],
    });
    $('#add_new_guide').click(function(){
        $('#guide_form')[0].reset();
        $('.modal-title').text("Add New Guide");
        $('#guide_action').val("Add");
        $('#guide_operation').val("Add");
    });

    $(document).on('submit', '#guide_form', function(event){
        event.preventDefault();
        var GuideName = $('#GuideName').val();
        alert(GuideName);
        if(GuideName != '')
        {
            $.ajax({
            url:"insert.php",
            type:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
                $('#guide_form')[0].reset();
                $('#guideaddmodal').modal('hide');
                dataTable.ajax.reload();
                console.log(data);
                }
            });
        }
        else
        {
            alert("Guide Name is required");
        }
    });
    $(document).on('click', '.edit_data', function(){  
        var GuideID = $(this).attr("id");
        $.ajax({  
            url:"fetch.php",  
            type:'post',  
            data:{GuideID:GuideID}, 
            dataType:"json",  
            success:function(data){ 
                // console.log(data); 
                $('#Datetimestamp').val(data.Datetimestamp);
                $('#GuideName').val(data.GuideName);
                $('#Address').val(data.Address);
                $('#City').val(data.City);
                $('#Province').val(data.Province);
                $('#PostalCode').val(data.PostalCode);
                $('#Country').val(data.Country);
                $('#CellNumber').val(data.CellNumber);
                $('#Email').val(data.Email);
                $('#guideaddmodal').modal("show"); 
                $('.modal-title').text("Edit Guide");
                $('#GuideID').val(GuideID);  
                $('#guide_action').val("Edit");
                $('#guide_operation').val("Edit");
                alert(GuideID);
            }
        });
    });
    $('#data_table').on('click', '.view_data', function(){
        var GuideID = $(this).attr("id");
        $.ajax({  
            url:"select.php",  
            method:"post",  
            data:{GuideID:GuideID},  
            success:function(data){  
                console.log(data);
                $('#guide_detail').html(data);  
                $('#view_modal').modal("show");  
            }  
        });  
    });
    $('#data_table').on('click', '.delete', function(){
        var GuideID = $(this).attr("id");
        $('#delete_record').click(function(){
            $.ajax({
                type:'post',
                url:'delete.php',
                data:{GuideID:GuideID},
                success:function(data){
                    $('#deletemodal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        });
    });
});
</script>