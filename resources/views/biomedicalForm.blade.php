@include('theme.header')
@include('theme.sidebar')

  <!-- // Basic multiple Column Form section start -->
  <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Biomedical Observation Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Equipment Status</label>
                                            <div class="form-group">
                                                <select class="choices form-select" required>
                                                    <option value="">Select Status</option>
                                                    <option value="square">Under Warranty</option>
                                                    <option value="rectangle">Non-Hospital Equipment</option>
                                                    <option value="rombo">Non-Medical Device</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-12 mt-3">
                                        <div class="d-flex mt-3">
                                        <input class="form-check-input  me-2" type="checkbox" id="toggle-dark" style="cursor: pointer">
                                        <label class="form-check-label">Maintenance Contract</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-12 mt-3">
                                    <div class="d-flex mt-3">
                                        <input class="form-check-input  me-2" type="checkbox" id="toggle-dark" style="cursor: pointer">
                                        <label class="form-check-label">Incident Report</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-12">
                                        <label class="form-check-label">Observations</label>
                                        <div class="d-flex mt-2">
                                            <input class="form-check-input me-2" type="radio"  id="damaged"  style="cursor: pointer">
                                            <label for="damaged" class="me-2">Damaged</label>
                                            <input class="form-check-input me-2" type="radio"  id="broken" style="cursor: pointer">
                                            <label for="broken">Broken</label>
                                            <input class="form-check-input me-2" type="radio"  id="broken" style="cursor: pointer">
                                            <label for="broken">Mis-placed</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12 mt-3">
                                     <div class="form-group">
                                            <label for="email-id-column">Parts Required If any</label>
                                            <input type="" id="email-id-column" class="form-control"
                                                name="country-floating" placeholder="Parts Required If any">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12 mt-3">
                                     <div class="form-group">
                                            <label for="email-id-column">Action Taken/Remarks</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="country-floating" placeholder="Remarks">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12 mt-3">
                                     <div class="form-group">
                                            <label for="email-id-column">Job Completed by</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="country-floating" placeholder="Ahmed Ali" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12 mt-3">
                                    <label>Equipment Status</label>
                                        <div class="form-group">
                                            <select class="choices form-select" required>
                                                <option value="square">Repaired</option>
                                                <option value="rectangle">Referred</option>
                                                <option value="rombo">Condemned</option>
                                                <option value="rombo">Caliberated</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 col-12 mt-4">
                                     <div class="form-group">
                                     <button type="submit" class="btn btn-primary me-1 mb-1">Submit review</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('theme.footer')