{{-- <!DOCTYPE html> --}}
@extends('layouts.theme')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
<style>
    .d-flex {
        display: flex;
        align-items: center;
    }

    .form-control,
    .form-select {
        border-radius: 10px !important;
        border: 1px solid #c6c6c6 !important;
    }

    label {
        font-weight: bold !important;
        color: black;
        font-size: 12px;
        white-space: nowrap;
    }

    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        border-radius: 1rem;
    }

    .form-group label {
        margin-right: 10px;
    }

    .me-2 {
        margin-right: 0.5rem;
    }

    .label {
        border-radius: 0px !important;
        color: rgb(38, 38, 38) !important;
        font-weight: bold !important;
        font-size: 12px !important;
    }

    .form-select {
        background-image: none;
    }

    .form-select:focus,
    .form-control:focus {
        box-shadow: none;
        border-color: #666;
    }

    .custom-select-small {
        width: auto !important;
    }

    .form-group input,
    .form-group select {
        flex: 1;
    }

    @media (max-width: 768px) {
        .form-group label {
            font-size: 10px;
        }

        .form-group input,
        .form-group select {
            font-size: 10px;
            padding: 3px;
        }
    }

    .table thead th {
        font-size: 12px !important;
        padding: 2px !important;
        background-color: rgb(98, 151, 182) !important;
        color: white !important;
        position: sticky !important;
        top: 0 !important;
        z-index: 1 !important;
    }

    .table tbody td {
        font-size: 10px;
        padding: 2px;
    }

    .table tbody tr {
        height: 20px;
    }

    .table tbody tr td {
        padding: 0.1rem 0.3rem;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }

    .btn {
        margin: 0.25rem;
    }

    .flex-grow-1 {
        flex-grow: 1;
    }

    .custom-border {
        border: 1px solid #ced4da;
        padding: 4px;
    }

    .selected-row {
        color: blue;
        font-size: 14px;
    }

    .small-font {
        font-size: 10px;
    }

    .custom-modal-dialog {
        max-width: 1900px;
    }

    .textarea-like {
        border: 1px solid #ced4da;
        padding: 6px 12px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #495057;
        background-color: #fff;
        border-radius: 0.25rem;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        min-height: 30px;
    }

    .text-left {
        text-align: left;
    }

    .position-cell {
        width: 80px;
    }

    input,
    textarea {
        font-size: 12px;
        border-radius: 0.25rem;
    }

    .form-control {
        display: inline-block;
        width: 100%;
        /* Ensure the form-control takes the full width of its container */
        vertical-align: middle;
    }

    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        border-radius: 1rem;
    }

    .form-group label {
        margin-right: 10px;
    }

    .selected {
        background-color: #d3d3d3;
    }

    @media (max-width: 768px) {
        .form-group label {
            font-size: 10px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 10px;
            padding: 3px;
        }

        .table thead th,
        .table tbody td {
            font-size: 8px;
            padding: 1px;
        }
    }

    .form-check-input {
        margin-right: 10px;
    }

    .modal-dialog-centered {
            display: flex;
            left:120px;
           
            min-height: calc(100% - 1rem);
        }
        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 1rem);
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            content: "";
        }
        .modal-content {
            width: 50%;
        }

 
    
</style>
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <section id="basic-horizontal-layouts" style="margin-bottom: 10px;">

        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <!-- <form id="" class="form form-horizontal needs-validation" novalidate> -->
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label for="patientId">Patient Id:</label>
                                                    <input type="text" id="patientId" class="form-control form-control-sm" name="patientId" placeholder="">
                                                </div>





                                                <div class="col-md-4 form-group">
                                                <input type="text" id="patientName"
                                                    class="form-control form-control-sm" name="patientName"
                                                    placeholder="" disabled
                                                    style="color: rgb(191, 42, 42) !important; font-weight: bold !important; font-size: 12px !important;"
                                                    autofocus>
                                                </div>

                                                <div class="col-md-1 form-group">
                                                    <input type="text" id="patientAgeGender" class="form-control form-control-sm" name="patientAgeGender"
                                                        placeholder="" disabled
                                                        style="color: rgb(191, 42, 42) !important; font-weight: bold !important; font-size: 12px !important;">
                                                </div>
                                                
                                                  <div class="col-md-3 form-group">
                                                  <label for="status">Status:</label>
                                                <select class="form-select form-select-sm" id="statusId">
                                                    <option value="ALL"selected>ALL</option>
                                                      <option value="pending">Pending</option>
                                                      <option value="reported">Reported</option>
                                                      <option value="todayReportingCase">Today Cases</option>
                                                </select>
                                            </div>
                                                {{-- 1110120241043
                                                13816411 --}}
                                                <hr>
                                             
                                       <div class="col-md-4 form-group">
                                                <label for="location">Location:</label>
                                                <select class="select2 form-select" id="pacslocationId" multiple name="pacslocationId">
                                                    <option value="ALL" selected>All</option>
                                                    @if (isset($LOVS))
                                                        @foreach ($LOVS as $Lov)
                                                            <option value="{{ $Lov['pacsLocationId'] }}">
                                                                {{ $Lov['location'] }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                                <div class="col-md-2 form-group">
                                                <select class="form-select form-select-sm" id="sectionId">
                                                    <option value="ALL"selected>ALL</option>
                                                    <option value="CT">CT</option>
                                                    <option value="MR">MR</option>
                                                    <option value="CR">CR</option>
                                                    <option value="DX">DX</option>
                                                    <option value="XA">XA</option>
                                                    <option value="FL">FL</option>
                                                    <option value="RF">RF</option>
                                                    <option value="MG">MG</option>
                                                    <option value="XC">XC</option>
                                                    <option value="XE">XE</option>
                                                    <option value="US">US</option>
                                                    <option value="PX">PX</option>
                                                    <option value="RVW">RVW</option>
                                                    <option value="MISC">MISC</option>
                                                    <option value="ECHO">ECHO</option>
                                                </select>
                                            </div>
                                              <div class="col-md-3 form-group">
                                              <label for="fDate">From Date:</label>
                                                    <input type="date" id="from_date"
                                                        class="form-control form-control-sm" name="service" placeholder=""
                                                        style="color: rgb(38, 38, 38) !important; font-weight: bold !important; font-size: 12px !important;">   
                                                </div>

                                            <div class="col-md-3 form-group">
                                            <label for="tDate">To Date:</label>
                                                    <input type="date" id="to_date"
                                                        class="form-control form-control-sm" name="service" placeholder=""
                                                        style="color: rgb(38, 38, 38) !important; font-weight: bold !important; font-size: 12px !important;">   
                                                </div>
                                                
                                                



                                            </div>
                                        </div>

                                       <hr>

                                        <div class="col-lg-12 col-12">
                                            <label>Services Order Information</label>
                                            <div style="height: 320px; overflow-y: scroll;">
                                                <div class="card-body" id="spinnerLoader"
                                                    style="display: none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(255, 255, 255, 0.5);">
                                                    <img src="/adminpanel/assets/images/svg-loaders/puff.svg" class="me-4"
                                                        style="width: 6rem; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"
                                                        alt="loading">
                                                </div>
                                                <table class="table table-bordered table-striped mb-0">
                                                    <thead>
                                                        <tr
                                                            style="position: sticky; top: 0; color: white; background-color: rgb(98, 151, 182); z-index: 1;">
                                                           <th class="text-center">Sr.</th>
                                                           <th class="text-center">Patient Id</th>
                                                           <th class="text-center">Patient Name</th>
                                                           <th class="text-center">Service Name</th>
                                                           <th class="text-center">Order Status</th>
                                                           <th class="text-center">Delivery Time</th>
                                                           <th class="text-center">Action Date</th>
                                                           
                                                        </tr>
                                                    </thead>

                                                    <tbody id="casetbodyTable" class="rowClick">

                                                    </tbody>

                                                </table>

                                  
   </section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="height: 70vh;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Patient Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="overflow-y: auto;">
            <table class="table table-bordered table-striped mb-0">
              <thead style="padding-bottom: 10px; background-color: rgb(98, 151, 182); color: white;">
                <tr style="position: sticky; top: 0; z-index: 1;">
                  <th class="resizable-column" style="height: 10px; font-size: 16px;">Action</th>
                  <th class="resizable-column" style="padding: 10px; font-size: 16px;">Action By</th>
                  <th class="resizable-column" style="padding: 10px; font-size: 16px;">Action Date</th>
                </tr>
              </thead>
              <tbody id="actionbodyTable" class="rowClick">
                <!-- Placeholder content for tbody -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js for Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for Modal Handling -->
    <script>
      $('#exampleModal').on('hidden.bs.modal', function () {
          $('.modal-backdrop').remove();
      });
    </script>

                    <div class="modal-footer d-flex justify-content-center">
                    
                    <button id="viewBtn" disabled class="btn rounded-pill btn-secondary me-4 mb-3">View Reports</button>
                    <button id="todayBtn" class="btn rounded-pill btn-secondary me-4 mb-3">Today Report Time</button>
                    <button id="delayedBtn" class="btn rounded-pill btn-danger me-4 mb-3">Delayed</button>
                  </div>





<script>


 document.addEventListener('DOMContentLoaded', () => {
    const tbody = document.getElementById('casetbodyTable');

    tbody.addEventListener('click', (event) => {
        let target = event.target;

        // Traverse up to the row element
        while (target && target.nodeName !== 'TR') {
            target = target.parentNode;
        }

        if (target) {
            // Reset text color of all rows
            const rows = tbody.querySelectorAll('tr');
            rows.forEach(row => {
                row.querySelectorAll('td').forEach(cell => {
                    cell.style.color = '';
                });
            });

            // Set text color of the clicked row to red
            target.querySelectorAll('td').forEach(cell => {
                cell.style.color = '#002395';
            });
        }
    });
});

</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Load Select2 library
    $.getScript('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js')
        .done(function() {
            // Initialize Select2 once the library is loaded
            $('.select2').select2();

            // Set CSRF token in the headers of AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Event handler for patient ID input
            $('#patientId').keyup(function(event) {
                if (event.keyCode === 13) { 
                    event.preventDefault();// Enter key pressed
                    var Id = $(this).val().trim();
                     if (patientId) {
                        resetForm();
                        fetchUserData(Id);
                          $('#patientId').val(Id);
                    }else {
                        toastr.error('Patient ID cannot be empty.');
                    }
                    
                }
            });
             function resetForm() {
                $('#patientId').val('');
                $('#patientName').val('');
                $('#patientAgeGender').val('');
                $('#casetbodyTable').empty();
                
            }


            // Function to fetch user data based on patient ID
            function fetchUserData(Id) {
                var location = $('#pacslocationId').val();
                var section = $('#sectionId').val();
                var status = $('#statusId').val();
                var from_date = $('#from_date').val(); // Get from_date value
                var to_date = $('#to_date').val(); // Get to_date value

               
                
                // Convert location array to a comma-separated string
                var locationString = location.join(',');

                $.ajax({
                    url: '/PatientOrder',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        Id: Id,
                        location: locationString,
                        section: section,
                        status: status,
                        from_date: from_date,
                        to_date: to_date
                    },
                    success: function(response) {
                        console.log('Response from server:', response);
                        var tableBody = $('#casetbodyTable');
                        tableBody.empty();
                        if (response && response.data) {
                            if (response.data.length > 0) {
                                response.data.forEach((patientData, index) => {
                                    var row = `<tr>
                                        <td style="text-align: center;">${index + 1}</td>
                                        <td style="text-align: center;">${patientData.patientId}</td>
                                        <td style="text-align: center;">${patientData.patientName}</td>
                                        <td style="text-align: center;">${patientData.service}</td>
                                        <td style="text-align: center;">${patientData.orderStatus}</td>
                                        <td style="text-align: center;">${patientData.reportTime}</td>
                                       <td style="text-align: center;">
                                        <button 
                                            type="button" 
                                            class="btn btn-secondary btn-sm me-2 mb-1" 
                                            data-toggle="modal" 
                                            data-target="#exampleModal"  
                                            onclick="showPatientDetails('${patientData.orderId}')"> 
                                            View
                                        </button>${patientData.reportStatus}</td>
                                    </tr>`;
                                    tableBody.append(row);
                                });

                                var firstPatient = response.data[0];
                               
                                $('#patientName').val(firstPatient.patientName || '');
                                $('#patientAgeGender').val((firstPatient.age ? firstPatient.age : '') + ' ' + (firstPatient.gender ? firstPatient.gender : ''));
                            } else {
                                tableBody.append('<tr><td colspan="7">No data found</td></tr>');
                            }
                        } else {
                            console.error('Invalid response structure:', response);
                            tableBody.append('<tr><td colspan="7">Invalid response structure or no data found</td></tr>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching user data:', error);
                        console.log(xhr.responseText);
                    }
                });
            }

            // Function to show patient details in modal
            window.showPatientDetails = function(orderId) {
                $.ajax({
                    url: '/details', // Adjust the URL to your controller endpoint
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        orderId: orderId
                    },
                    success: function(response) {
                        console.log('Patient Details:', response);
                        
                        var actionTableBody = $('#actionbodyTable');
                        actionTableBody.empty();

                        if (response && response.data && response.data.length > 0) {
                            response.data.forEach((actionData, index) => {
                                var actionRow = `<tr>
                                    <td style="height: 60px;">${actionData.action}</td>
                                    <td style="height: 60px;">${actionData.crtdByName}</td>
                                    <td style="height: 60px;">${actionData.crtdDate}</td>
                                </tr>`;
                                actionTableBody.append(actionRow);
                            });
                        } else {
                            actionTableBody.append('<tr><td colspan="3">No action data found</td></tr>');
                            console.error('No action data found for orderId:', orderId);
                        }

                        // Open the modal if it's not already open
                        $('#exampleModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching patient details:', error);
                        console.log(xhr.responseText);
                    }
                });
            };
        })
        .fail(function(jqxhr, settings, exception) {
            console.error('Failed to load Select2 library:', exception);
        });
});
</script>



    <script>
        @if (session()->has('message'))
            var type = "{{ session('alert-type', 'info') }}";
            var message = "{{ session('message') }}";
            var bgColor;

            switch (type) {
                case 'info':
                    toastr.info(message);
                    break;
                case 'success':
                    toastr.success(message);
                    break;
                case 'warning':
                    toastr.warning(message);
                    break;
                case 'error':
                    toastr.error(message);
                    break;
            }
        @endif
    </script>


@section('scripts')
@endsection
@endsection