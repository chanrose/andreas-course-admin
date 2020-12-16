@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div {{--class="card-header text-white bg-dark"--}}>
                        <div class="img-fluid max-width: 20% m-4">
                           <h1 class="text-center">{{ __('Opening Course #') }} {{$oneCourse->CID}}</h1>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                {{$oneCourse->courseName}}
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>{{$oneCourse->courseDescription}}</p>
                                    <p>Schedule.</p>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Online Class Link</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Monday</td>
                                            <td>09.30 AM - finish</td>
                                            <td>https://us02web.zoom.us/j/83745469009?pwd=RnFUUGhNbmR4QVZ0WUNCdHJ Pass: 456789</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Wednesday</td>
                                            <td>09.30 AM - finish</td>
                                            <td>https://us02web.zoom.us/j/84147856389?pwd=M05uZkNQVFZvdjJKODM4SDQvT0hBUT09 Pass: 858300</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <footer class="blockquote-footer">Instructor <cite title="Source Title">{{$oneCourse->instructorName}}</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <br/>




                            <a class="btn btn-primary" href="/view-courses-list">Go Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
