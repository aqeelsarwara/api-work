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
                                <div class="col-md-3 col-12">
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

                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Complain</label>
                                        <input type="text" id="description" name="description" class="form-control custom-input"
                                            name="country-floating" placeholder="Complain">
                                    </div>
                                </div>

                                <div class="col-md-1 col-12">
                                
                                    <label>Status</label>
                                    <select class="choices form-select custom-input" name="active">
                                        <option value="Y">Y</option>
                                        <option value="N">N</option>
                                    </select>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- // Table is inserted here -->
            <div class="card">
                {{-- <div class="card-header">
                        <h4 class="card-title">Department Wise Complain</h4>
                    </div> --}}
                <!-- Remove the Search Button -->
                <div class="card-content" style="padding-top:10px;">
                    <div class="card-body">
                        <form class="form" id="complainSearch" >
                        
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                     <label for="departmentDropdown">Search Complain</label>
                                        <select class="choices form-select custom-input" name="departmentId" id="departmentDropdown"
                                            required>
                                            <option value="">Select Department</option>
                                            <option value="127">Radiology</option>
                                            <option value="128">Pathology</option>
                                            <option value="129">OPD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Loader HTML -->
                <div id="loader" style="display: none;">
                    <div class="spinner"></div>
                </div>
                <!-- table bordered -->
                <div class="table-responsive complainTable" id="scroll">
                    <table class="table table-striped mb-0 ">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Complain Description</th>
                                <th>Department</th>
                                <th>Username</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@include('theme.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="/assets/static/js/complainSetup.js"></script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
