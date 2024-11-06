@include('theme.header')
@include('theme.sidebar')

<style>


</style>

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Placement Setup</h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" id="placementForm">
                         
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
                                    <label>Placement</label>
                                    <input type="text" id="placement" name="placement"
                                        class="form-control custom-input" placeholder="Enter Placement" required>
                                </div>

                                <div class="col-md-4 col-12">
                                    <label>Extension No.</label>
                                    <input type="number" id="extentionNO" name="extensionNo"
                                        class="form-control custom-input" placeholder="Enter Extension No." required>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- // Table is inserted here -->
        <div class="card">
            {{-- <div class="card-header">
                        <h4 class="card-title">Department Wise Placement</h4>
                    </div> --}}
            <div class="card-content" style="padding-top:10px;">
                <div class="card-body">
                    <form class="form" id="placementSearch">
                   
                        <div class="row">
                            <div class="col-md-3 col-12 ">
                                <div class="form-group">
                                    <label for="departmentDropdown">Search Placement</label>
                                    <select class="choices form-select custom-input" name="departmentId" id="departmentDropdown"
                                        required>
                                        <option value="" selected disabled>Select Department</option>
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

            {{-- loader --}}
            <div id="loader" style="display: none;">
                <div class="spinner"></div>
            </div>
            <!-- table bordered -->
            <div class="table-responsive placementTable">
                <table class="table table-striped mb-0" >
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Department</th>
                            <th>Placement</th>
                            <th>Extension No.</th>
                           <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody  >
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


<script src="/assets/static/js/placementSetup.js"></script>

    

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
