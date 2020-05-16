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
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Record Entered on: </label> -->
                                <input class="form-control" type="text" id="DataInputDate" name="DataInputDate" placeholder="Readonly input here..." readonly>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Date of visit</label> -->
                                <input type="text" class="form-control" data-toggle="datepicker" id="DateVisit" name="DateVisit" placeholder="Enter Date of visit">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Time</label> -->
                                <div class="input-group bootstrap-timepicker timepicker">
                                    <input id="timepicker4" type="text" value="10:35 AM" class="form-control input-small" name="TimeVisit" id="TimeVisit">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Select Day</label> -->
                                <select id="Day" name = "Day" class="custom-select">
                                    <option value="" disabled selected style="display: none;">Select Day</option>
                                    <?php echo $GroupDay; ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Group Name</label> -->
                                <input type="text" class="form-control" id="GroupName" name="GroupName" placeholder="Enter Group Name">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Group Type</label> -->
                                <select id="GroupType" name = "GroupType" class="custom-select">
                                    <option value="" disabled selected style="display: none;">Group Type</option>
                                    <?php echo $GroupType; ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Total Visitors</label> -->
                                <input type="text" class="form-control" id="TotalVisitors" name="TotalVisitors" placeholder="Enter Total Visitors">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Male</label> -->
                                <input type="text" class="form-control" id="Male" name="Male" placeholder="Enter Total # of Men">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Female</label> -->
                                <input type="text" class="form-control" id="Female" name="Female" placeholder="Enter Total # of Women">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>handicaped</label> -->
                                <input type="text" class="form-control" id="Handicaped" name="Handicaped" placeholder="Enter Total # of handicaped">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="GuideRequired" id="GuideRequired">
                                <label class="custom-control-label" for="GuideRequired">Guide Required?</label>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Guide Name</label> -->
                                <select id="GuideName" name = "GuideName" class="custom-select">
                                    <option value="" disabled selected style="display: none;">Guide Name</option>
                                    <?php echo $GuideName; ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="VisitToMuseum" id="VisitToMuseum">
                                <label class="custom-control-label" for="VisitToMuseum">Visit To Museum?</label>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="PaymentPending" id="PaymentPending">
                                <label class="custom-control-label" for="PaymentPending">Payment Pending?</label>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Exhibition/Photoshoot Seva</label> -->
                                <input type="text" class="form-control" id="Exhibition_Seva" name="Exhibition_Seva" placeholder="0.00">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="MealStatus" id="MealStatus">
                                <label class="custom-control-label" for="MealStatus">Do you want Meal?</label>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Status of Visit</label> -->
                                <select id="Status" name = "Status" class="custom-select">
                                    <option value="" disabled selected style="display: none;">Status of Visit</option>
                                    <?php echo $Visit_Status; ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Other Information</label> -->
                                <textarea class="form-control" id="GroupInfo" name="GroupInfo" rows="1" placeholder="Other Information"></textarea>
                            </div>
                        </div>
                            <input type="hidden" class="form-control" name="OrganizerID" id="OrganizerID">
                    </div>
                    <hr>
                    <h6><b>Only for Weddings, Baby Showers or PhotoShoot</b></h6>
                    <hr>
                    <div class="row">
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Address</label> -->
                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Address">
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
                                <input type="text" class="form-control" id="Postalcode" name="Postalcode" placeholder="Enter Postal Code">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label>Cell Number: </label> -->
                                <input type="text" class="form-control" id="Telephone" name="Telephone" placeholder="Enter Cell Number">
                            </div>
                        </div>
                        <div class = "col-md-3">
                            <div class="form-group">
                                <!-- <label> Email Address: </label> -->
                                <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter Email Address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="GroupID" id="GroupID">
                    <input type="hidden" name="visit_operation" id="visit_operation">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="visit_action" id="visit_action" value="Add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });
    $('#timepicker4').timepicker({
        explicitMode: true,
        minuteStep: 15,
        showInputs: false,
        template: 'modal',
        modalBackdrop: true,
        showSeconds: false,
        showMeridian: true,
        icons: { up: 'glyphicon glyphicon-chevron-up', down: 'glyphicon glyphicon-chevron-down' }
    });
</script>