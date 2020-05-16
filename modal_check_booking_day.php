<div class="modal fade" id="modal_check_booking_day" tabindex="-1" role="dialog" aria-labelledby="modal_check_booking_day_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id = "booking_day_form"></form>
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