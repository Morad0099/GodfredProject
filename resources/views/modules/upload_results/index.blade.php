@extends('layout.app')

@section('content')
    <div class="container col-12" style="margin-left: -50px">
        <nav class="mb-5 font-weight-bold" style="border-bottom: 5px solid #27595a;">
            <h4 class="font-weight-bold">UPLOAD STUDENTS RESULTS</h4>
        </nav>

        <!-- File Upload Form -->
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="results_file">Upload File:</label>
                <input type="file" class="form-control-file" id="results_file" name="results_file">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <hr> <!-- Horizontal line to separate the two forms -->

        <!-- Manual Input Form -->
        <form action="" id="uploadForm">
            @csrf
            {{-- <div class="form-group">
            <label for="student_name">Student Name:</label>
            <select name="studet_name" class="form-control select2" required>
                <option value=""><--select--></option>
                @foreach ($student as $item)
                <option value={{$item->student_no}}>{{$item->name}}</option>
                @endforeach
            </select>
        </div> --}}
            <div class="form-group">
                <label for="student_name">Student Name:</label>
                <div class="custom-dropdown">
                    <input type="text" id="student_no" name="student_no" class="form-control" placeholder="Search...">
                    <div class="dropdown-list">
                        <option value=""><--select--></option>

                        @foreach ($student as $item)
                            <div class="dropdown-item" value="{{ $item->student_no }}">{{ $item->name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <select class="form-control" id="subject" name="subject">
                    <option value=""><--select--></option>
                    <option value="ENG">English Language</option>
                    <option value="MATHS">Mathematics</option>
                    <option value="CART">Creative Arts</option>
                    <option value="FRENCH">French</option>
                    <option value="RME">RME</option>
                    <option value="COM">Computing</option>
                    <option value="SCI">Science</option>
                    <option value="SSTUD">Social Studies</option>
                    <option value="GHLANG">GH LANGUAGE</option>
                    {{-- <option value="10">10</option> --}}

                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="group_work">Group Work (10):</label>
                <select class="form-control" id="group_work" name="group_work">
                    <option value=""><--select--></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="test1">Test 1 (20):</label>
                <select class="form-control" id="test1" name="test1">
                    <option value=""><--select--></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="project_work">Project Work (10):</label>
                <select class="form-control" id="project_work" name="project_work">
                    <option value=""><--select--></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="test2">Test 2 (20):</label>
                <select class="form-control" id="test2" name="test2">
                    <option value=""><--select--></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="raw_exams_score">Raw Exam Score (100):</label>
                <input type="text" class="form-control-file" id="raw_exams_score" name="raw_exams_score">
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('student_no');
            const dropdownList = document.querySelector('.dropdown-list');
            const items = document.querySelectorAll('.dropdown-item');

            input.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent click event from closing dropdown
            });

            input.addEventListener('input', function() {
                const filter = input.value.toLowerCase();
                items.forEach(function(item) {
                    const value = item.getAttribute('value')
                        .toLowerCase(); // Get the value attribute
                    if (value.includes(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.matches('.custom-dropdown')) {
                    dropdownList.style.display = 'none';
                }
            });

            // Toggle dropdown when clicking on input
            input.addEventListener('click', function() {
                dropdownList.style.display = 'block';
            });

            // Handle click on dropdown item
            items.forEach(function(item) {
                item.addEventListener('click', function() {
                    input.value = item.textContent;
                    dropdownList.style.display = 'none';
                    const studentNo = item.getAttribute('value'); // Retrieve the student number
                    console.log('Selected student number:', studentNo);
                    // You can add logic here to handle the selected student number
                });
            });
        });


        $(document).ready(function() {
    const form = $('#uploadForm');

    form.on('submit', function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Show SweetAlert confirmation dialog
        Swal.fire({
            title: 'Confirm Submission',
            text: 'Are you sure you want to submit the form?',
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
            if (result.value) {
                submitForm(); // Submit the form if confirmed
            }
        });
    });

    function submitForm() {
        // Serialize form data manually
        const formData = {
            student_no: $('#student_no').val(),
            subject: $('#subject').val(),
            group_work: $('#group_work').val(),
            test1: $('#test1').val(),
            project_work: $('#project_work').val(),
            test2: $('#test2').val(),
            raw_exams_score: $('#raw_exams_score').val()
            // Add more fields as needed
        };

        // Send AJAX POST request to the API endpoint
        $.ajax({
            url: '/api/results',
            method: 'POST',
            data: formData,
            success: function(response) {
                // Handle successful response
                Swal.fire({
                    title: 'Success!',
                    text: 'Form submitted successfully',
                    type: 'success'
                }).then((result) => {
                    // Reset the form after successful submission
                    form.trigger('reset');
                });
            },
            error: function(xhr, status, error) {
                let errorMessage = 'Failed to submit form. Please try again later.';
                if (xhr.responseJSON && xhr.responseJSON.msg) {
                    errorMessage = xhr.responseJSON.msg;
                } else if (xhr.responseJSON && xhr.responseJSON.error_all) {
                    errorMessage = xhr.responseJSON.error_all.join('<br>');
                }

                Swal.fire({
                    title: 'Error!',
                    html: errorMessage,
                    type: 'error'
                });
                console.error(xhr, status, error);
            }
        });
    }
});

    </script>
@endsection
