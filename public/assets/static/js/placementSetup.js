$(document).ready(function () {

    var routesMeta = $('meta[name="routes"]').attr('content');

    // Parse the JSON string to an object
    var routes = JSON.parse(routesMeta);


    var isUpdating = false;
    var departmentDropdownChangeEnabled = true;

    // Handle 'Save' button click
    $('#saveButton').on('click', function (e) {
        e.preventDefault();
        isUpdating = false;
        $('#placementForm').submit();
    });

    // Handle 'Update' button click
    $('#updateButton').on('click', function (e) {
        e.preventDefault();
        isUpdating = true;
        $('#placementForm').submit();
    });

    // Handle form submission
    $('#placementForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var actionUrl = isUpdating ? routes.updatePlacement : routes.savePlacement;

        $.ajax({
            url: actionUrl,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function (response) {
                console.log(response);
                var message = isUpdating ? 'Data updated successfully!' : 'Data saved successfully!';
                toastr.success(message, 'Success', { positionClass: 'toast-top-right', timeOut: 5000 });
                updatePlacementTable(response.data);
                resetForm();
            },
            error: function (xhr, status, error) {
                toastr.error('An error occurred: ' + error, 'Error', { positionClass: 'toast-top-right', timeOut: 5000 });
            }
        });
    });

    $(document).on('click', '.placementTable tbody tr', function () {

        var id = $(this).data('id');
        var departmentId = $(this).data('department-id');
        var description = $(this).data('description');
        var extensionNo = $(this).data('extension-no');
        // Temporarily disable the change event
        departmentDropdownChangeEnabled = false;

        // Populate the form fields
        $('select[name="departmentId"]').val(departmentId).trigger('change');
        $('#placement').val(description);
        $('#extentionNO').val(extensionNo);
        $('#Id').val(id);

        $('#updateButton').prop('disabled', false);
        $('#saveButton').prop('disabled', false);
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
        setTimeout(function () {
            departmentDropdownChangeEnabled = true;
        }, 100);
    });

    $('#departmentDropdown').on('change', function () {
        if (departmentDropdownChangeEnabled) {
            $('#placementSearch').trigger('submit');
        }
    });

    // Handle search form submission
    $('#placementSearch').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $('#loader').show();
        // var searchPlacementUrl = $('meta[name="search-placement-url"]').attr('content');

        $.ajax({
            url: routes.searchPlacement,
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function (response) {
                console.log("Update response:", response);
                updatePlacementTable(response.data);
            },
            error: function (xhr, status, error) {
                toastr.error('An error occurred: ' + error, 'Error', { positionClass: 'toast-top-right', timeOut: 5000 });
            },
            complete: function () {
                $('#loader').hide();
            }
        });
    });

    function updatePlacementTable(data) {
        $('.placementTable tbody').empty(); // Clear existing rows
        data.forEach(function (item, index) {
            var newRow = `
            <tr data-id="${item.id}" data-department-id="${item.departmentId}" data-description="${item.description}" data-extension-no="${item.extensionNo}">
                <td>${index + 1}</td>
                <td>${item.departmentId}</td>
                <td>${item.description}</td>
                <td>${item.extensionNo}</td>
                <td>${item.userName}</td>
                <td>${item.active}</td>
            </tr>
        `;
            $('.placementTable tbody').append(newRow);
        });

        // Optional: Re-apply selected-row class if needed
        // Make sure this is only necessary if you need to retain selection after update
    }



    function resetForm() {
        $('#placementForm')[0].reset();
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


