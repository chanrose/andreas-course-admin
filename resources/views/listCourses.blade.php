@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-white ">{{ __('List of all courses') }}</div>

                    <div class="card-body">
                            @if (Session::has('course_deleted'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('course_deleted') }}
                                </div>
                            @endif


                            <div class="text-center">
                                <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-secondary">
                                <tr>
                                    <th scope="col">Course Code</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Open Course</th>
                                    <th scope="col">Program</th>
                                    <th scope="col">Instructor</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allCourse as $course)
                                    <tr>
                                       <th>{{$course->courseCode}} </th>
                                        <td>{{$course->courseName}}</td>
                                        <td> <a href="/view-course/{{$course->CID}}" class="text-secondary">
                                            View  </a>
                                            </td>
                                        <td>{{$course->programName}}</td>
                                        <td>{{$course->instructorName}}</td>
                                        <td>
                                            <a href="/edit-course/{{$course->CID}}" class="btn btn-link mr1 mb-1 text-secondary">
                                                Edit </a>
                                            <a href="/delete-course/{{$course->CID}}" class="btn btn-link text-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                                </div>
                            </div>


                            <div class="text-left">
                                <a class="btn btn-primary" href="{{route('course.addnew')}}">Create More Course</a>
                            </div>

                                {{-- {{ __('You are logged in!') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
