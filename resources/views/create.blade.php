@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-danger">{{ __('Add Course') }}</div>

                    <div class="card-body">
                        @if (Session::has('course_added'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('course_added') }}
                            </div>
                        @endif
                            <form method="POST" action="{{route('course.submit')}}">
                                @csrf
                               <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="courseCode">Course Code</label>
                                        <input type="text" name="courseCode" class="form-control" id="courseCode" placeholder="ENGL111" required>
                                    </div>
                               </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputLName">Course Name</label>
                                        <input type="text" name="courseName" class="form-control" id="courseName" placeholder="Introduction to Literature" required>
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label for="programName">Program</label>
                                        <select name="programName" class="form-control" id="programName" required>
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
                                            <input type="text" name="instructorName" class="form-control" id="instructorName" placeholder="Mr. Edward Pedragosa" name="inputAdvisor" required>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <label for="courseDescription">Course Description</label>
                                    <textarea name="courseDescription" class="form-control" id="courseDescription" rows="2" required></textarea>
                                </div>

                                <button type="submit" value="Submit" class="btn btn-primary">CREATE</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
