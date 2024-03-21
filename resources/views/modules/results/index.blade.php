@extends('layout.app')

@section('content')
    <div class="container col-12" style="margin-left: -130px">
        <nav class="mb-5 font-weight-bold" style="border-bottom: 5px solid #27595a;">
            <h4 class="font-weight-bold">RESULTS PAGE</h4>
        </nav>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#course1" role="tab">Engilsh Language</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course2" role="tab">Mathematics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course3" role="tab">Creative Arts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course4" role="tab">French</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course5" role="tab">RME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course6" role="tab">Computing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course7" role="tab">Science</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course8" role="tab">Social Studies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#course9" role="tab">Gh Language</a>
            </li>
        </ul>

        <!-- Tab panes -->

        <div class="tab-content">
            <div class="tab-pane active" id="course1" role="tabpanel">
                {{-- <h3>Course 1 Results</h3> --}}
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($english as $item)
                            <!-- Rows for Course 1 results -->
                            <tr>
                                <td class="student">{{ $item->student_no }}</td>
                                <td class="group_work">{{ $item->group_work }}</td>
                                <td class="test1">{{ $item->test1 }}</td>
                                <td class="project_work">{{ $item->project_work }}</td>
                                <td class="test2">{{ $item->test2 }}</td>
                                <td class="class_total">{{ $item->class_total }}</td>
                                <td class="SBA">{{ $item->SBA }}</td>
                                <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                                <td class="Exams">{{ $item->Exams }}</td>
                                <td class="Total_Score">{{ $item->Total_Score }}</td>
                                <td class="position_in_class">{{ $item->position_in_class }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-success edit-btn" title="Edit" data-toggle="modal"
                                            data-target="#editModal"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Tabs and tables for other courses follow the same structure -->
            <!-- Course 2 -->
            <div class="tab-pane" id="course2" role="tabpanel">
                {{-- <h3>Course 2 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($maths as $item)
                            <!-- Rows for Course 1 results -->
                            <tr>
                                <td class="student">{{ $item->student_no }}</td>
                                <td class="group_work">{{ $item->group_work }}</td>
                                <td class="test1">{{ $item->test1 }}</td>
                                <td class="project_work">{{ $item->project_work }}</td>
                                <td class="test2">{{ $item->test2 }}</td>
                                <td class="class_total">{{ $item->class_total }}</td>
                                <td class="SBA">{{ $item->SBA }}</td>
                                <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                                <td class="Exams">{{ $item->Exams }}</td>
                                <td class="Total_Score">{{ $item->Total_Score }}</td>
                                <td class="position_in_class">{{ $item->position_in_class }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-success editMaths-btn" title="Edit" data-toggle="modal"
                                            data-target="#editMathsModal"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Course 3 -->
            <div class="tab-pane" id="course3" role="tabpanel">
                {{-- <h3>Course 3 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($carts as $item)
                            <!-- Rows for Course 1 results -->
                            <tr>
                                <td class="student">{{ $item->student_no }}</td>
                                <td class="group_work">{{ $item->group_work }}</td>
                                <td class="test1">{{ $item->test1 }}</td>
                                <td class="project_work">{{ $item->project_work }}</td>
                                <td class="test2">{{ $item->test2 }}</td>
                                <td class="class_total">{{ $item->class_total }}</td>
                                <td class="SBA">{{ $item->SBA }}</td>
                                <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                                <td class="Exams">{{ $item->Exams }}</td>
                                <td class="Total_Score">{{ $item->Total_Score }}</td>
                                <td class="position_in_class">{{ $item->position_in_class }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-success editCarts-btn" title="Edit" data-toggle="modal"
                                            data-target="#editCartsModal"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Course 4 -->
            <div class="tab-pane" id="course4" role="tabpanel">
                {{-- <h3>Course 4 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($french as $item)
                        <!-- Rows for Course 1 results -->
                        <tr>
                            <td class="student">{{ $item->student_no }}</td>
                            <td class="group_work">{{ $item->group_work }}</td>
                            <td class="test1">{{ $item->test1 }}</td>
                            <td class="project_work">{{ $item->project_work }}</td>
                            <td class="test2">{{ $item->test2 }}</td>
                            <td class="class_total">{{ $item->class_total }}</td>
                            <td class="SBA">{{ $item->SBA }}</td>
                            <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                            <td class="Exams">{{ $item->Exams }}</td>
                            <td class="Total_Score">{{ $item->Total_Score }}</td>
                            <td class="position_in_class">{{ $item->position_in_class }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success editFrench-btn" title="Edit" data-toggle="modal"
                                        data-target="#editFrenchModal"><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Course 5 -->
            <div class="tab-pane" id="course5" role="tabpanel">
                {{-- <h3>Course 5 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($rme as $item)
                        <!-- Rows for Course 1 results -->
                        <tr>
                            <td class="student">{{ $item->student_no }}</td>
                            <td class="group_work">{{ $item->group_work }}</td>
                            <td class="test1">{{ $item->test1 }}</td>
                            <td class="project_work">{{ $item->project_work }}</td>
                            <td class="test2">{{ $item->test2 }}</td>
                            <td class="class_total">{{ $item->class_total }}</td>
                            <td class="SBA">{{ $item->SBA }}</td>
                            <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                            <td class="Exams">{{ $item->Exams }}</td>
                            <td class="Total_Score">{{ $item->Total_Score }}</td>
                            <td class="position_in_class">{{ $item->position_in_class }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success editRme-btn" title="Edit" data-toggle="modal"
                                        data-target="#editRmeModal"><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Course 6 -->
            <div class="tab-pane" id="course6" role="tabpanel">
                {{-- <h3>Course 6 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($com as $item)
                        <!-- Rows for Course 1 results -->
                        <tr>
                            <td class="student">{{ $item->student_no }}</td>
                            <td class="group_work">{{ $item->group_work }}</td>
                            <td class="test1">{{ $item->test1 }}</td>
                            <td class="project_work">{{ $item->project_work }}</td>
                            <td class="test2">{{ $item->test2 }}</td>
                            <td class="class_total">{{ $item->class_total }}</td>
                            <td class="SBA">{{ $item->SBA }}</td>
                            <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                            <td class="Exams">{{ $item->Exams }}</td>
                            <td class="Total_Score">{{ $item->Total_Score }}</td>
                            <td class="position_in_class">{{ $item->position_in_class }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success editComputing-btn" title="Edit" data-toggle="modal"
                                        data-target="#editComputingModal"><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!--Course 7-->
            <div class="tab-pane" id="course7" role="tabpanel">
                {{-- <h3>Course 7 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($science as $item)
                        <!-- Rows for Course 1 results -->
                        <tr>
                            <td class="student">{{ $item->student_no }}</td>
                            <td class="group_work">{{ $item->group_work }}</td>
                            <td class="test1">{{ $item->test1 }}</td>
                            <td class="project_work">{{ $item->project_work }}</td>
                            <td class="test2">{{ $item->test2 }}</td>
                            <td class="class_total">{{ $item->class_total }}</td>
                            <td class="SBA">{{ $item->SBA }}</td>
                            <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                            <td class="Exams">{{ $item->Exams }}</td>
                            <td class="Total_Score">{{ $item->Total_Score }}</td>
                            <td class="position_in_class">{{ $item->position_in_class }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success editScience-btn" title="Edit" data-toggle="modal"
                                        data-target="#editScienceModal"><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="course8" role="tabpanel">
                {{-- <h3>Course 7 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($socialStd as $item)
                        <!-- Rows for Course 1 results -->
                        <tr>
                            <td class="student">{{ $item->student_no }}</td>
                            <td class="group_work">{{ $item->group_work }}</td>
                            <td class="test1">{{ $item->test1 }}</td>
                            <td class="project_work">{{ $item->project_work }}</td>
                            <td class="test2">{{ $item->test2 }}</td>
                            <td class="class_total">{{ $item->class_total }}</td>
                            <td class="SBA">{{ $item->SBA }}</td>
                            <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                            <td class="Exams">{{ $item->Exams }}</td>
                            <td class="Total_Score">{{ $item->Total_Score }}</td>
                            <td class="position_in_class">{{ $item->position_in_class }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success editSocialStudies-btn" title="Edit" data-toggle="modal"
                                        data-target="#editSocialStudiesModal"><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="course9" role="tabpanel">
                {{-- <h3>Course 7 Results</h3> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>GRP WRK (10)</th>
                            <th>TEST 1 (20)</th>
                            <th>PRJ WRK (10)</th>
                            <th>TEST 2 (20)</th>
                            <th>TOTAL (60)</th>
                            <th>SBA (50)</th>
                            <th>RAW SCORE (100)</th>
                            <th>EXAMS (50)</th>
                            <th>TOTAL (100)</th>
                            <th>POSITION IN CLASS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows for Course 2 results -->
                        @foreach ($ghLanguage as $item)
                        <!-- Rows for Course 1 results -->
                        <tr>
                            <td class="student">{{ $item->student_no }}</td>
                            <td class="group_work">{{ $item->group_work }}</td>
                            <td class="test1">{{ $item->test1 }}</td>
                            <td class="project_work">{{ $item->project_work }}</td>
                            <td class="test2">{{ $item->test2 }}</td>
                            <td class="class_total">{{ $item->class_total }}</td>
                            <td class="SBA">{{ $item->SBA }}</td>
                            <td class="raw_exams_score">{{ $item->raw_exams_score }}</td>
                            <td class="Exams">{{ $item->Exams }}</td>
                            <td class="Total_Score">{{ $item->Total_Score }}</td>
                            <td class="position_in_class">{{ $item->position_in_class }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success editGhLanguage-btn" title="Edit" data-toggle="modal"
                                        data-target="#editGhLanguageModal"><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('modules.results.modals.edit_english')
    @include('modules.results.modals.edit_maths')
    @include('modules.results.modals.edit_carts')
    @include('modules.results.modals.edit_french')
    @include('modules.results.modals.edit_rme')
    @include('modules.results.modals.edit_computing')
    @include('modules.results.modals.edit_science')
    @include('modules.results.modals.edit_socialStudies')
    @include('modules.results.modals.edit_ghLanguage')

    <script>
        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.edit-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#edit_student').val(student);
                $('#edit_group_work').val(groupWork);
                $('#edit_test1').val(test1);
                $('#edit_project_work').val(projectWork);
                $('#edit_test2').val(test2);
                $('#edit_raw_exams_score').val(rawExamsScore);

                $('#editModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editMaths-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editMaths_student').val(student);
                $('#editMaths_group_work').val(groupWork);
                $('#editMaths_test1').val(test1);
                $('#editMaths_project_work').val(projectWork);
                $('#editMaths_test2').val(test2);
                $('#editMaths_raw_exams_score').val(rawExamsScore);

                $('#editMathsModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editCarts-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editCarts_student').val(student);
                $('#editCarts_group_work').val(groupWork);
                $('#editCarts_test1').val(test1);
                $('#editCarts_project_work').val(projectWork);
                $('#editCarts_test2').val(test2);
                $('#editCarts_raw_exams_score').val(rawExamsScore);

                $('#editCartsModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editRme-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editRme_student').val(student);
                $('#editRme_group_work').val(groupWork);
                $('#editRme_test1').val(test1);
                $('#editRme_project_work').val(projectWork);
                $('#editRme_test2').val(test2);
                $('#editRme_raw_exams_score').val(rawExamsScore);

                $('#editRmeModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editComputing-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editComputing_student').val(student);
                $('#editComputing_group_work').val(groupWork);
                $('#editComputing_test1').val(test1);
                $('#editComputing_project_work').val(projectWork);
                $('#editComputing_test2').val(test2);
                $('#editComputing_raw_exams_score').val(rawExamsScore);

                $('#editComputingModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editScience-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editScience_student').val(student);
                $('#editScience_group_work').val(groupWork);
                $('#editScience_test1').val(test1);
                $('#editScience_project_work').val(projectWork);
                $('#editScience_test2').val(test2);
                $('#editScience_raw_exams_score').val(rawExamsScore);

                $('#editScienceModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editSocialStudies-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editSocialStudies_student').val(student);
                $('#editSocialStudies_group_work').val(groupWork);
                $('#editSocialStudies_test1').val(test1);
                $('#editSocialStudies_project_work').val(projectWork);
                $('#editSocialStudies_test2').val(test2);
                $('#editSocialStudies_raw_exams_score').val(rawExamsScore);

                $('#editSocialStudiesModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editGhLanguage-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editGhLanguage_student').val(student);
                $('#editGhLanguage_group_work').val(groupWork);
                $('#editGhLanguage_test1').val(test1);
                $('#editGhLanguage_project_work').val(projectWork);
                $('#editGhLanguage_test2').val(test2);
                $('#editGhLanguage_raw_exams_score').val(rawExamsScore);

                $('#editGhLanguageModal').modal('show');
            });
        });

        $(document).ready(function() {
            // Function to open modal and populate fields
            $('.editFrench-btn').click(function() {
                var row = $(this).closest('tr');
                var student = row.find('.student').text().trim();
                var groupWork = row.find('.group_work').text().trim();
                var test1 = row.find('.test1').text().trim();
                var projectWork = row.find('.project_work').text().trim();
                var test2 = row.find('.test2').text().trim();
                var rawExamsScore = row.find('.raw_exams_score').text().trim();

                $('#editFrench_student').val(student);
                $('#editFrench_group_work').val(groupWork);
                $('#editFrench_test1').val(test1);
                $('#editFrench_project_work').val(projectWork);
                $('#editFrench_test2').val(test2);
                $('#editFrench_raw_exams_score').val(rawExamsScore);

                $('#editFrenchModal').modal('show');
            });
        });

    </script>
@endsection
