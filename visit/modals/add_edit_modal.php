<div class="modal fade" name="visitinfomodal" id="visitinfomodal" tabindex="-1" role="dialog" aria-labelledby="visitinfomodal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="visitinfomodalTitle">Visit Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="insert_visit_form" class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="form-row">
                        <div class=" form-group col-md-3">
                            <!-- <label>Record Entered on: </label> -->
                            <input class="form-control" type="text" id="DataInputDate" name="DataInputDate" placeholder="Readonly input here..." readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class=" form-group col-md-3">
                            <!-- <label>Date of visit</label> -->
                            <input type="text" class="form-control" data-toggle="datepicker" id="DateVisit" name="DateVisit" placeholder="Enter Date of visit" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Select Date after today</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>Time</label> -->
<!--                                 <div class="input-group bootstrap-timepicker timepicker"> -->
                            <input id="TimeVisit" type="time" class="form-control input-small" name="TimeVisit" step="300" min="7:00" max= "18:00" required>
<!--                                     <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> -->
<!--                                 </div> -->
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Select Time between 7AM to 8PM</div>
                        </div>
                        <div class=" form-group col-md-2">
                            <!-- <label>Select Day</label> -->
                            <select id="Day" name = "Day" class="custom-select" required>
                                <option value="" disabled selected style="display: none;">Select Day</option>
                                <?php echo $GroupDay; ?>
                            </select>
                            <div class="invalid-feedback">Please choose one</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class=" form-group col-md-3">
                            <!-- <label>Group Name</label> -->
                            <input type="text" class="form-control" pattern="[a-zA-Z _-.]+" id="GroupName" name="GroupName" placeholder="Enter Group Name" required>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>Group Type</label> -->
                            <select id="GroupType" name = "GroupType" class="custom-select" required>
                                <option value="" disabled selected style="display: none;">Group Type</option>
                                <?php echo $GroupType; ?>
                            </select>
                            <div class="invalid-feedback">Please choose one</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class=" form-group col-md-3">
                            <!-- <label>Total Visitors</label> -->
                            <input type="number" class="form-control" id="TotalVisitors" name="TotalVisitors" placeholder="Enter Total Visitors" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Enter Numbers only</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>Male</label> -->
                            <input type="number" class="form-control" id="Male" name="Male" placeholder="Enter Total # of Men" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Enter Numbers only</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>Female</label> -->
                            <input type="number" class="form-control" id="Female" name="Female" placeholder="Enter Total # of Women" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Enter Numbers only</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>handicaped</label> -->
                            <input type="number" class="form-control" id="Handicaped" name="Handicaped" placeholder="Enter Total # of handicaped" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Enter Numbers only</div>
                        </div>
                    </div>
                    <div class="form-row align-items-center">
                        <fieldset id="Guide">
                            <div class = "form-row align-items-center">
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" name="GuideRequired" id="GuideRequired">
                                        <label class="custom-control-label" for="GuideRequired">Guide Required?</label>
                                      <!-- <label>Guide Name</label> -->
                                    </div>
                                </div>
                                <div class="col-auto my-4">
                                    <select id="GuideName" name = "GuideName" class="custom-select mr-md-4" disabled>
                                        <option value="" disabled selected style="display: none;">Guide Name</option>
                                        <?php echo $GuideName; ?>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                            <div class="col-auto my-1">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="PaymentPending" id="PaymentPending">
                                    <label class="custom-control-label" for="PaymentPending">Payment Pending?</label>
                                </div>
                            </div>
                            <div class="col-auto my-4">
                                <!-- <label>Exhibition/Photoshoot Seva</label> -->
                                <input type="number" class="form-control" id="Exhibition_Seva" name="Exhibition_Seva" placeholder="Exhibition Seva($0.00)">
                            </div>
                        <div class="col-auto my-4">
                            <!-- <label>Status of Visit</label> -->
                            <select id="Status" name = "Status" class="custom-select" required>
                                <option value="" disabled selected style="display: none;">Status of Visit</option>
                                <?php echo $Visit_Status; ?>
                            </select>
                            <div class="invalid-feedback">Please choose one</div>
                        </div>
                    </div>
                    <div class="form-row align-items-center">
                        <div class=" form-group col-md-3">
                            <!-- <label>Other Information</label> -->
                            <textarea class="form-control" id="GroupInfo" name="GroupInfo" rows="1" placeholder="Other Information"></textarea>
                        </div>
                        <div class="col-auto my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name="MealStatus" id="MealStatus">
                                <label class="custom-control-label" for="MealStatus">Do you want Meal?</label>
                            </div>
                        </div>
                        <div class="col-auto my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name="VisitToMuseum" id="VisitToMuseum">
                                <label class="custom-control-label" for="VisitToMuseum">Visit To Museum?</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="OrganizerID" id="OrganizerID">
                    <hr>
                    <h6><b>Only for Weddings, Baby Showers or PhotoShoot</b></h6>
                    <hr>
                    <div class="form-row">
                        <div class=" form-group col-md-3">
                            <!-- <label>Address</label> -->
                            <input type="text" class="form-control" pattern="[a-zA-Z0-9 _-.]+" id="Address" name="Address" placeholder="Enter Address">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Enter alphabets and numbers only</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>City: </label> -->
                            <input type="text" class="form-control" pattern="[a-zA-Z]+" id="City" name="City" placeholder="Enter City">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Enter alphabets only</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>Province: </label> -->
                            <input type="text" class="form-control" pattern="[a-zA-Z]+" id="Province" name="Province" placeholder="Enter Province">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Enter alphabets only</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label>Postal Code: </label> -->
                            <input type="text" class="form-control" pattern="[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][\-]?\d[ABCEGHJ-NPRSTV-Z]\d" id="Postalcode" name="Postalcode" placeholder="Enter Postal Code">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Format: A1B-2C3</div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class=" form-group col-md-3">
                            <!-- <label>Cell Number: </label> -->
                            <input type="text" class="form-control" pattern="\d{3}[\-]\d{3}[\-]\d{4}" id="Telephone" name="Telephone" placeholder="Enter Cell Number">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">Format: 123-456-7890</div>
                        </div>
                        <div class=" form-group col-md-3">
                            <!-- <label> Email Address: </label> -->
                            <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="Email" name="Email" placeholder="Enter Email Address">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">At least 1 @ and 1 dot</div>
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
//     $('#TimeVisit').timepicker({
//         explicitMode: true,
//         template: 'modal',
//         modalBackdrop: true,
//         showSeconds: false,
//         showMeridian: true,
//         disableMousewheel: false
//     });
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    new Cleave('#Telephone', {
      phone: true,
      delimiter: '-',
      phoneRegionCode: 'CA'
    });
    new Cleave('#Exhibition_Seva', {
      numeral: true,
      numeralThousandsGroupStyle: 'thousand'
    });
    new Cleave('#Postalcode', {
      delimiter: '-',
      blocks: [3, 3],
      uppercase: true
    });
  // Wait for the page to finish loading
  document.addEventListener('DOMContentLoaded', function () {
    // Attach `change` event listener to checkbox
    document.getElementById('GuideRequired').onchange = toggleGuide;
  }, false);

  function toggleGuide() {
    // Select the billing text fields
    var GuideName = document.querySelector('#Guide select');
      GuideName.disabled = !GuideName.disabled;
  }
</script>