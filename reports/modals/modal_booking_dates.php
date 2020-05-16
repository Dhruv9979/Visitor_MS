<div class="modal fade" id="modal_booking_dates" tabindex="-1" role="dialog" aria-labelledby="modal_booking_dates_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id = "booking_dates_form" target="_blank">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_booking_dates_label">Check Booking dates</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class = "col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" data-toggle="datepicker" id="startDate" name="startDate" placeholder="Enter Start Date">
                        </div>
                    </div>
                    <div class = "col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" data-toggle="datepicker" id="endDate" name="endDate" placeholder="Enter End Date">
                        </div>
                    </div>
                    <div class = "col-md-12">
                        <div class="form-group">
                            <label>Select GroupName (Not Mandatory)</label>
                            <select id="check_GroupName" name = "check_GroupName" class="custom-select">
                                <option value="" disabled selected style="display: none;">All</option>
                                <?php echo $GroupName; ?>
                            </select>
                        </div>
                        <div id="response"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name = "booking_dates_pdf" id="booking_dates_pdf" class="btn btn-primary booking_dates_pdf">Generate PDF</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });
    $('#modal_booking_dates').on('click', '.booking_dates_pdf', function(){
        alert($('#startDate').val());
        alert($('#endDate').val());
        alert($('#check_GroupName').val());
    });
</script>