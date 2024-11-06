$(document).ready(function() {

    var routesMeta = $('meta[name="routes"]').attr('content');

    // Parse the JSON string to an object
    var routes = JSON.parse(routesMeta);

    var isUpdating = false;
    var departmentDropdownChangeEnabled = true;  // Flag to control department dropdown change event

    // Handle 'Save' button click
    $('#saveButton').on('click', function(e) {
        e.preventDefault();
        isUpdating = false;
        $('#ComplainForm').submit();
    });

    // Handle 'Update' button click
    $('#updateButton').on('click', function(e) {
        e.preventDefault();
        isUpdating = true;
        $('#ComplainForm').submit();
    });

    // Handle form submission for both save and update
    $('#ComplainForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var actionUrl = isUpdating ? routes.updateComplain : routes.saveComplain;

        // Show the loader
        $('#loader').show();

        $.ajax({
            url: actionUrl,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function(response) {
                console.log(response);
                var message = isUpdating ? 'Complaint updated successfully!' : 'Complaint saved successfully!';
                toastr.success(message, 'Success', {
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                });
                 
                updatePlacementTable(response.data);
                resetForm();
            },
            error: function(xhr, status, error) {
                toastr.error('An error occurred: ' + error, 'Error', {
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                });
            },
            complete: function() {
                // Hide the loader
                $('#loader').hide();
            }
        });
    });

    // Handle row click to populate the form
    $(document).on('click', '.complainTable tbody tr', function() {
        var id = $(this).data('id');
        var departmentId = $(this).data('department-id');
        var description = $(this).data('description');
        var active = $(this).data('active');

        // Temporarily disable the change event
        departmentDropdownChangeEnabled = false;

        // Populate the form fields
        $('select[name="departmentId"]').val(departmentId).trigger('change');
        $('#description').val(description);
        $('select[name="active"]').val(active).trigger('change');
        $('#Id').val(id);

        // Enable the 'Update' button and keep the 'Save' button enabled
        $('#updateButton').prop('disabled', false);
        $('#saveButton').prop('disabled', false);

        // Set the form state to updating
        isUpdating = true;

        // Highlight the selected row
        $(this).siblings().find('td').css({
            'color': '',
            'font-weight': ''
        });
        $(this).find('td').css({
            'color': '#860111',
            'font-weight': 'bold'
        });

        // Re-enable the change event
        setTimeout(function() {
            departmentDropdownChangeEnabled = true;
        }, 100);
    });

    // Handle search form submission
    $('#departmentDropdown').on('change', function() {
        if (departmentDropdownChangeEnabled) {
            $('#complainSearch').trigger('submit');
        }
    });

    // Handle search form submission
    $('#complainSearch').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        // Show the loader
        $('#loader').show();

        $.ajax({
           url: routes.searchComplain,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function(response) {
                console.log("Update response:", response);
                updatePlacementTable(response.data);
            },
            error: function(xhr, status, error) {
                toastr.error('An error occurred: ' + error, 'Error', {
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                });
            },
            complete: function() {
                // Hide the loader
                $('#loader').hide();
            }
        });
    });

    // Function to update the table with new data
    function updatePlacementTable(data) {
        $('.complainTable tbody').empty();

        data.forEach(function(item, index) {
            var newRow = `
            <tr data-id="${item.id}" data-department-id="${item.departmentId}" 
            data-description="${item.description}" data-active="${item.active}">
                <td>${index + 1}</td>
                <td>${item.description}</td>
                <td>${item.department}</td>
                <td>${item.userName}</td>
                <td>${item.active}</td>
            </tr>
        `;
            $('.complainTable tbody').append(newRow);
        });
    }

    // Function to reset the form and toggle buttons
    function resetForm() {
        $('#ComplainForm')[0].reset();
        $('#updateButton').prop('disabled', true);
        $('#saveButton').prop('disabled', false);
        isUpdating = false;
    }

    // Initialize select2 for department dropdown
    $('select[name="departmentId"]').select2({
        placeholder: "Select Department",
        allowClear: true
    });
});
