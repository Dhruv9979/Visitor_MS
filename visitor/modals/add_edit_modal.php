<div class="modal fade" name="visitoraddmodal" id="visitoraddmodal" tabindex="-1" role="dialog" aria-labelledby="visitoraddmodal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" >
        <form method="POST" id="insert_form" class="needs-validation" novalidate>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visitoraddmodalTitle">Add new Visitor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                            <div class = "form-row">
                                <div class="form-group col-md-3">
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

                            <div class = "form-row">
                                <div class="form-group col-md-3">
                                    <!-- <label>Group Name</label> -->
                                    <input type="text" class="form-control" pattern="[a-zA-Z _-.]+" id="GroupName" name="GroupName" placeholder="Group Name" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter Group Name</div>
                                </div>
                            
                                <div class="form-group col-md-3">
                                    <!-- <label>Contact Name</label> -->
                                    <input type="text" class="form-control" pattern="[a-zA-Z _-.]+" id="ContactName" name="ContactName" placeholder="Contact Name" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter alphabets only</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <!-- <label>Title or Profession: </label> -->
                                    <input type="text" class="form-control" id="Title" pattern="[a-zA-Z _-.]+" name="Title" placeholder="Title or Profession" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter alphabets only</div>
                                </div>
                            </div>
                            <div class = "form-row">
                                <div class="form-group col-md-2">
                                    <!-- <label>House or Apartment #: </label> -->
                                    <input type="text" class="form-control" pattern= "[a-zA-Z0-9 _-.]+" id="Address1" name="Address1" placeholder="House or Apt. #" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter Numbers only</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <!-- <label>Street Name: </label> -->
                                    <input type="text" class="form-control" id="Address2" pattern="[a-zA-Z _-.]+" name="Address2" placeholder="Street Name" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter alphabets only</div>
                                </div>
                                <div class="form-group col-md-2">
                                    <!-- <label>City: </label> -->
                                    <input type="text" class="form-control" pattern="[a-zA-Z]+" id="City" name="City" placeholder="City" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter alphabets only</div>
                                </div>
                                <div class="form-group col-md-2">
                                    <!-- <label>Province: </label> -->
                                    <input type="text" class="form-control" id="Province" pattern="[a-zA-Z]+" name="Province" placeholder="Province" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter alphabets only</div>
                                </div>
                                <div class="form-group col-md-1">
                                    <!-- <label>Postal Code: </label> -->
                                    <input type="text" class="form-control" id="PostalCode" pattern="[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][\-]?\d[ABCEGHJ-NPRSTV-Z]\d" name="PostalCode" placeholder="Zip Code" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Format: A1B-2C3</div>
                                </div>
                                <div class="form-group col-md-2">
                                    <!-- <label>Country: </label> -->
                                    <input type="text" class="form-control" id="Country"  pattern="[a-zA-Z]+" name="Country" placeholder="Country" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Enter alphabets only</div>
                                </div>
                            </div>
                            <div class = "form-row">
                                <div class="form-group col-md-2">
                                    <!-- <label>Home or Office #: </label> -->
                                    <input type="text" class="form-control" pattern="\d{3}[\-]\d{3}[\-]\d{4}" id="Telephone1" name="Telephone1" placeholder="Home or Office #" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Home or Cell Number is required. Format: 123-456-7890</div>
                                </div>
                                <div class="form-group col-md-2">
                                    <!-- <label>Cell Number: </label> -->
                                    <input type="text" class="form-control" pattern="\d{3}[\-]\d{3}[\-]\d{4}" id="Telephone2" name="Telephone2" placeholder="Cell Number" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback"> Home or Cell Number is required. Format: 123-456-7890</div>
                                </div>
                                <div class="form-group col-md-2">
                                    <!-- <label>Fax Number: </label> -->
                                    <input type="text" class="form-control"  pattern="\d{3}[\-]\d{3}[\-]\d{4}" id="FaxNumber" name="FaxNumber" placeholder="Fax Number">
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">Format: 123-456-7890</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <!-- <label>School Email Address: </label> -->
                                    <input type="text" class="form-control" id="SchoolGeneralEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="SchoolGeneralEmail" placeholder="School Email Address" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">School or Personal Email is Required. Format: At least 1 @ and 1 dot</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <!-- <label>Personal Email Address: </label> -->
                                    <input type="text" class="form-control" id="Email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Personal Email Address" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="invalid-feedback">School or Personal Email is Required. Format: At least 1 @ and 1 dot</div>
                                </div>
                            </div>
                            <div class="form-row align-items-center">
                                <div class="form-group col-md-3">
                                    <!-- <label>Santo's or Karyakar's Comments on this Organizer</label> -->
                                    <textarea class="form-control" id="Comments" name="Comments" rows="3" placeholder="Santo's or Karyakar's Comments on this Organizer"></textarea>
                                </div>
                                <div class="col-auto my-1">
                                    <!-- <label>How did you hear about us: </label> -->
                                    <select id="HowDidYouHear" name = "HowDidYouHear" class="custom-select mr-sm-2" required>
                                        <option value="" disabled selected style="display: none;">How did you hear about us: </option>
                                        <?php echo $Source; ?>
                                    </select>
                                  <div class="invalid-feedback">Please choose one</div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" name="Diwaliinvites" id="Diwaliinvites" value = 0>
                                        <label class="custom-control-label" for="Diwaliinvites">Diwali Invites to be send?</label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" name="SubscribedToMailingList" id="SubscribedToMailingList" value = 0>
                                        <label class="custom-control-label" for="SubscribedToMailingList">Subscribe to BAPS mailing list?</label>
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
<script>
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
  jQuery(function ($) {
    var $inputs = $('input[name=Telephone1],input[name=Telephone2]');
    $inputs.on('input', function () {
        // Set the required property of the other input to false if this input is not empty.
        $inputs.not(this).prop('required', !$(this).val().length);
    });
});
  jQuery(function ($) {
    var $inputs = $('input[name=SchoolGeneralEmail],input[name=Email]');
    $inputs.on('input', function () {
        // Set the required property of the other input to false if this input is not empty.
        $inputs.not(this).prop('required', !$(this).val().length);
    });
});
new Cleave('#Telephone1', {
    phone: true,
    delimiter: '-',
    phoneRegionCode: 'CA'
});
new Cleave('#Telephone2', {
    phone: true,
    delimiter: '-',
    phoneRegionCode: 'CA'
});
new Cleave('#FaxNumber', {
    phone: true,
    delimiter: '-',
    phoneRegionCode: 'CA'
});
new Cleave('#PostalCode', {
    delimiter: '-',
    blocks: [3, 3],
    uppercase: true
});
</script>