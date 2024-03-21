<div class="modal fade" id="editGhLanguageModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Fields</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="editGhLanguageForm">
                @csrf
                <div class="modal-body">

                    <!-- Input fields for editing -->
                    <div class="form-group">
                        <label for="student">Student:</label>
                        <input type="text" class="form-control" name="student_no" id="editGhLanguage_student">
                    </div>
                    <div class="form-group">
                        <label for="group_work">GRP WRK (10):</label>
                        <input type="text" class="form-control" id="editGhLanguage_group_work">
                    </div>
                    <div class="form-group">
                        <label for="test1">TEST 1 (20):</label>
                        <input type="text" class="form-control" id="editGhLanguage_test1">
                    </div>
                    <div class="form-group">
                        <label for="project_work">PRJ WRK (10):</label>
                        <input type="text" class="form-control" id="editGhLanguage_project_work">
                    </div>
                    <div class="form-group">
                        <label for="test2">TEST 2 (20):</label>
                        <input type="text" name="subject" value="GHLANG" id="GhLanguage_subject" hidden>
                        <input type="text" class="form-control" id="editGhLanguage_test2">
                    </div>
                    <div class="form-group">
                        <label for="raw_exams_score">RAW SCORE (100):</label>
                        <input type="text" class="form-control" id="editGhLanguage_raw_exams_score">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        const form = $('#editGhLanguageForm');

        form.on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Show SweetAlert confirmation dialog
            Swal.fire({
                title: 'Confirm Update',
                text: 'Are you sure you want to update the records?',
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.value) {
                    updateRecords();
                }
            });
        });

        function updateRecords() {
            // Get data from input fields
            const student = $('#editGhLanguage_student').val();
            const group_work = $('#editGhLanguage_group_work').val();
            const test1 = $('#editGhLanguage_test1').val();
            const project_work = $('#editGhLanguage_project_work').val();
            const test2 = $('#editGhLanguage_test2').val();
            const raw_exams_score = $('#editGhLanguage_raw_exams_score').val();
            const subject = $('#GhLanguage_subject').val(); // Retrieve the value of the hidden field

            // Prepare data to be sent to the API
            const data = {
                student_no: student,
                group_work: group_work,
                test1: test1,
                project_work: project_work,
                test2: test2,
                raw_exams_score: raw_exams_score,
                subject: subject // Include the subject field in the data object
            };

            // Send AJAX request to the API endpoint
            $.ajax({
                url: '/api/update_results',
                type: 'POST',
                data: data,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Close the modal after successful update
                    $('#editGhLanguageModal').modal('hide');
                    // Show success message with SweetAlert
                    Swal.fire({
                        title: 'Success!',
                        text: 'Records have been updated.',
                        type: 'success'
                    });
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    // Show error message with SweetAlert
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while updating records.',
                        type: 'error'
                    });
                }
            });
        }

    });
</script>
