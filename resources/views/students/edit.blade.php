@extends('mylayouts.dashboardlayout')

@section('studentedit')
    <div class="container">
        <div class="row">
            <div class="card o-hidden border-0 shadow-lg my-5 col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-gray-900 fw-bolder text-center mt-3 text-decoration-underline">Edit Here</h2>
                        <form action="{{url('/student/update')}}/{{$std->id}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class=" container p-3">        
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="first name" class="form-label fw-semibold">First Name:</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="Fname" value="{{$std->first_name}}">
                                        @error("Fname")
                                            <span class="text-danger fs-6 fw-bold">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="last name" class="form-label fw-semibold">Last Name:</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="Lname" value="{{$std->last_name}}">
                                        @error("Lname")
                                            <span class="text-danger fs-6 fw-bold">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="email" class="form-label fw-semibold">Email Address:</label>
                                        <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your email address" value="{{$std->email}}">
                                        @error("Email")
                                            <span class="text-danger fs-6 fw-bold">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="g-main">
                                            <label class="form-label fw-semibold" for="gender">Gender:</label>
                                            <select class="form-select" name="Gender" id="gender">
                                                <option class="text-center" value="" disabled>---Select---</option>
                                                @if($std->gender == "M")
                                                    <option value="M" selected>Male</option>
                                                    <option value="F">Female</option>
                                                @else
                                                    <option value="M">Male</option>
                                                    <option value="F" selected>Female</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="s-main">
                                            <label class="form-label fw-semibold" for="status">Status:</label>
                                            <select class="form-select" name="Status" id="status">
                                                @if($std->status == "1")
                                                    <option value="1" selected>Active</option>
                                                    <option value="0">Unactive</option>
                                                @else
                                                    <option value="1">Active</option>
                                                    <option value="0" selected>Unactive</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label class="form-label fw-semibold" for="image">Profile Image:</label>
                                        <input type="file" class="form-control" name="Image">
                                        <img src="{{url('/public/student/images')}}/{{$std->img}}" width="60px" class="mt-2" alt="image">
                                        <input type="hidden" value="{{$std->img}}" name="Oldimage">
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-primary" name="send" id="send-btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection