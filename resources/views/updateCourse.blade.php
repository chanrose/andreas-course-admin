@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-danger">{{ __('Editing ') }} {{$course->CID}}</div>

                    <div class="card-body">
                        @if (Session::has('course_updated'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('course_updated') }}
                            </div>
                        @endif
                        <form method="POST" action="{{route('course.update')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="courseCode">Course Code</label>
                                    <input type="text" value="{{$course->courseCode}}"  name="courseCode" class="form-control" id="courseCode" placeholder="Kenny" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputLName">Course Name</label>
                                    <input type="text" value="{{$course->courseName}}" name="courseName" class="form-control" id="courseName" placeholder="Ketty" required>
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="programName">Program</label>
                                    <select name="programName" value="{{$course->programName}}" class="form-control" id="programName" required>
                                        <option>Pick</option>
                                        <option value="Business Administration">Business Administration</option>
                                        <option value="English">English</option>
                                        <option value="Teaching">Teaching</option>
                                        <option value="Christian Studies">Christian Studies</option>
                                        <option value="Bioscience">Bioscience</option>
                                        <option value="Information Technology" >Information Technology</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="instructorName">Instructor Name</label>
                                    <input type="text" value="{{$course->instructorName}}" name="instructorName" class="form-control" id="instructorName" placeholder="Mr. Edward Pedragosa" name="inputAdvisor" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="courseDescription">Course Description</label>
                                <textarea name="courseDescription" value="{{$course->courseDescription}}"  class="form-control" id="courseDescription" rows="2" required>{{$course->courseDescription}}</textarea>
                            </div>


                            <a class="btn btn-secondary" href="{{route('course.list')}}">Go Back</a>
                            <button type="submit" value="Update" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
