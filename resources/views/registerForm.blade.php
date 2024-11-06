
@include('theme.header')
@include('theme.sidebar')
  

    <!-- // Basic multiple Column Form section start -->
     <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
             <div class="card" >
                <div class="card-header">
                    <h6 class="card-title">Complaint Setup</h6>
                </div>
                <div class="card-content"  >
                    <div class="card-body">
                        <form class="form" id="ComplainForm">
                        
                            <input type="hidden" id="Id" name="Id">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Department</label>
                                        <div class="form-group">
                                            <select class="choices form-select custom-input" name="departmentId" required>
                                                <option value="">Select Department</option>
                                                <option value="127">Radiology</option>
                                                <option value="128">Pathology</option>
                                                <option value="129">OPD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Item</label>
                                        <div class="form-group">
                                            <select class="choices form-select custom-input" name="itemId" required>
                                                <option value="">Select Item</option>
                                                <option value="127">Radiology</option>
                                                <option value="128">Pathology</option>
                                                <option value="129">OPD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Department</label>
                                        <div class="form-group">
                                            <select class="choices form-select custom-input" name="departmentId" required>
                                                <option value="">Select Department</option>
                                                <option value="127">Radiology</option>
                                                <option value="128">Pathology</option>
                                                <option value="129">OPD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Life</label>
                                        <input type="text" id="life" name="life" class="form-control custom-input"
                                            name="country-floating" placeholder="Life" disabled>
                                    </div>
                                </div>

                               <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Purchase Date</label>
                                        <input type="date" id="life" name="life" class="form-control custom-input"
                                            name="country-floating" placeholder="Purchase Date" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Insured</label>
                                        <input type="text" id="life" name="life" class="form-control custom-input"
                                            name="country-floating" placeholder="Life" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">PPM</label>
                                        <input type="text" id="life" name="life" class="form-control custom-input"
                                            name="country-floating" placeholder="Life" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">last PPM</label>
                                        <input type="text" id="life" name="life" class="form-control custom-input"
                                            name="country-floating" placeholder="Life" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Next PPM</label>
                                        <input type="text" id="life" name="life" class="form-control custom-input"
                                            name="country-floating" placeholder="Life" disabled>
                                    </div>
                                </div>

                                 <div class="col-md-6 col-12">
                                    <label for="city-column">Nature of Complain</label>
                                        <div class="form-group">
                                        <select class="choices form-select custom-input"name="nature" required>
                                            <option value="square">Select nature of complain</option>
                                            <option value="square">Not Working</option>
                                            <option value="square">Out Of Order</option>
                                            <option value="square">Damage</option>
                                        </select>
                                        </div>
                                    </div>

                                      <div class="col-md-6 col-12">
                                            <label for="country-floating">Job order type</label>
                                            <div class="form-group">
                                            <select class="choices form-select custom-input" name="orderType" required>
                                            <option value="square">Select order type</option>
                                            <option value="square">Urgent</option>
                                            <option value="square">Routine Repair</option>
                                            <option value="square">PPM</option>
                                            <option value="square">Equipment Removal</option>
                                            <option value="square">Shifting/Re-installation</option>
                                        </select>
                                        </div>
                                    </div>

                                     <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Complain</label>
                                            <input type="complain" id="email-id-column" class="form-control custom-input"
                                                name="country-floating" placeholder="Complain" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                     <div class="form-group">
                                            <label for="email-id-column">Remarks</label>
                                            <input type="" id="email-id-column" class="form-control custom-input"
                                                name="country-floating" placeholder="Remarks" required>
                                        </div>
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

          <div class="card" style="height:50px">
            <div class="footer-buttons" style="margin-top:10px">
              <button type="submit" style= "width:120px"class="btn btn-primary rounded-pill me-1 mb-1 custom-save-button" id="saveButton">
    Save Complain

</button>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
$('select[name="departmentId"], select[name="itemId"], select[name="orderType"], select[name="nature"]').select2({
    placeholder: "Select Department",
    allowClear: true
});
});
</script>


    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>