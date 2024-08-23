@extends('layout')

@section('content')
<div class="form-area">
                <form method="POST" action="{{ route('courses.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Course Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                            <label>Syllabus</label>
                            <input type="text" class="form-control" name="syllabus">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Duration</label>
                            <input type="text" class="form-control" name="duration">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>
            @endsection

@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush