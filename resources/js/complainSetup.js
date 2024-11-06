$(document).ready(function() {
    var isUpdating = false;

    // Handle 'Save' button click
    $('#saveButton').on('click', function(e) {
        e.preventDefault();
        // Set form state to save
        isUpdating = false;
        // Trigger form submission
        $('#ComplainForm').submit();
    });

    // Handle 'Update' button click
    $('#updateButton').on('click', function(e) {
        e.preventDefault();
        // Set form state to update
        isUpdating = true;
        // Trigger form submission
        $('#ComplainForm').submit();
    });

    // Handle form submission for both save and update
    $('#ComplainForm').on('submit', function(e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();

        // Determine the action URL based on the state (update or save)
        var actionUrl = isUpdating ? "{{ route('updateComplain') }}" :
        "{{ route('saveComplain') }}";

        $.ajax({
            url: actionUrl,
            method: $(this).attr('method'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function(response) {
                console.log(response);

                // Display success notification using Toastr
                var message = isUpdating ? 'Complaint updated successfully!' :
                    'Complaint saved successfully!';
                toastr.success(message, 'Success', {
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                });

                // Clear and update the table with the latest data
                updatePlacementTable(response.data);

                // Reset the form and buttons
                resetForm();
            },
            error: function(xhr, status, error) {
                // Display error notification using Toastr
                toastr.error('An error occurred: ' + error, 'Error', {
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                });
            }
        });
    });

    // Handle edit button click
    $(document).on('click', '.edit-button', function() {
        var id = $(this).data('id');
        var departmentId = $(this).data('department-id');
        var description = $(this).data('description');
        var active = $(this).data('active');

        // Populate the form fields
        $('select[name="departmentId"]').val(departmentId).trigger('change');
        $('#description').val(description);
        $('select[name="active"]').val(active).trigger('change');
        $('#Id').val(id);

        // Enable the 'Update' button and keep the 'Save' button enabled
        $('#updateButton').prop('disabled', false);
        $('#localDbSave').prop('disabled', false);
        $('#saveButton').prop('disabled', false);

        // Set the form state to updating
        isUpdating = true;
    });

    // Handle search form submission
    $('#complainSearch').on('submit', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function(response) {
                console.log("Update response:", response);

                // Clear and update the table with the search results
                updatePlacementTable(response.data);
            },
            error: function(xhr, status, error) {
                // Display error notification using Toastr
                toastr.error('An error occurred: ' + error, 'Error', {
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                });
            }
        });
    });

    // Function to update the table with new data
    function updatePlacementTable(data) {
        $('.complainTable tbody').empty();

        data.forEach(function(item, index) {
            var newRow = `
            <tr>
                <td>${index + 1}</td>
                <td>${item.description}</td>
                <td>${item.department}</td>
                <td>${item.userName}</td>
                <td>${item.active}</td>
                <td>
                    <button type="button" class="btn btn-primary me-1 mb-1 edit-button"
                           data-id="${item.id}"
                           data-department-id="${item.departmentId}"
                           data-description="${item.description}"
                           data-active="${item.active}">
                        Edit
                    </button>
                </td>
            </tr>
        `;
            $('.complainTable tbody').append(newRow);
        });
    }

    // Function to reset the form and toggle buttons
    function resetForm() {
        $('#ComplainForm')[0].reset();
        $('#updateButton').prop('disabled', true);
        $('#localDbSave').prop('disabled', true);
        $('#saveButton').prop('disabled', false);
        isUpdating = false;
    }


    // for select search

     $('select[name="departmentId"]').select2({
        placeholder: "Select Department",
        allowClear: true
    });



    // selected row color change

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
            cell.style.color = '#860111';
        });
    }
});


});