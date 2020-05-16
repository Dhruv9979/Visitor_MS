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