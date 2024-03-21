@extends('layout.app')

@section('content')
    {{-- <h1>WELCOME TO THE STAFF DASHBOARD</h1><br> --}}

    <div class="container col-12" style="margin-left: -130px">
        <nav class="mb-5 font-weight-bold" style="border-bottom: 5px solid #27595a;">
            <h4 class="font-weight-bold">BROADSHEET</h4>
        </nav>

        <div class="tab-content">
            <div class="tab-pane active" id="course1" role="tabpanel">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>STUDENT NAME</th>
                            <th colspan="2">CREATIVE ARTS</th>
                            <th colspan="2">FRENCH</th>
                            <th colspan="2">ENGLISH</th>
                            <th colspan="2">GH LANG</th>
                            <th colspan="2">MATHEMATICS</th>
                            <th colspan="2">RME</th>
                            <th colspan="2">SCIENCE</th>
                            <th colspan="2">SOCIAL</th>
                            <th colspan="2">COMPUTING</th>
                            <th colspan="1">RAW</th>
                            <th colspan="1">POSITION</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Class</th>
                            <th>Exams</th>
                            {{-- <th></th> --}}
                            <th>Class</th>
                            <th>Exams</th>

                            <th>Class</th>
                            <th>Exams</th>

                            <th>Class</th>
                            <th>Exams</th>

                            <th>Class</th>
                            <th>Exams</th>

                            <th>Class</th>
                            <th>Exams</th>

                            <th>Class</th>
                            <th>Exams</th>

                            <th>Class</th>
                            <th>Exams</th>

                            <th>Class</th>
                            <th>Exams</th>

                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            // Sort students based on raw score
                            $sortedStudents = $students->sortByDesc('rawScore');
                            $position = 1;
                        @endphp

                        @foreach ($sortedStudents as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                @foreach (['carts', 'french', 'english', 'gh_lang', 'maths', 'rmes', 'sciences', 'socials', 'computings'] as $subject)
                                    @if ($student->{$subject}->isNotEmpty())
                                        @foreach ($student->{$subject} as $result)
                                            <td>{{ $result->class_total }}</td>
                                            <td>{{ $result->Exams }}</td>
                                        @endforeach
                                    @else
                                        <td></td>
                                        <td></td>
                                    @endif
                                @endforeach
                                <td>{{ $student->rawScore }}</td>
                                <td>{{ $position++ }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
