@extends('mylayouts.dashboardlayout')

@section('studentindex')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-gray-900 fw-bolder text-center mt-3 text-decoration-underline">Insert Here</h2>
                    <form action="{{url('/student/store')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="container p-3">
                            <div class="row">
                                <div class="col-md-6 mb-2 mt-2">
                                    <label for="first name" class="form-label fw-semibold">First Name:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="Fname" value="{{old('Fname')}}">
                                    @error("Fname")
                                        <span class="text-danger fs-6 fw-bold">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2 mt-2">
                                    <label for="last name" class="form-label fw-semibold">Last Name:</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="Lname" value="{{old('Lname')}}">
                                    @error("Lname")
                                        <span class="text-danger fs-6 fw-bold">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-2 mt-1">
                                    <label for="email" class="form-label fw-semibold">Email Address:</label>
                                    <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your email address" value="{{old('Email')}}">
                                    @error("Email")
                                        <span class="text-danger fs-6 fw-bold">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-1 mb-2">
                                    <div class="g-main">
                                        <label class="form-label fw-semibold" for="gender">Gender:</label>
                                        <select class="form-select" name="Gender" id="gender">
                                            <option class="text-center" value="" disabled>---Select---</option>
                                            <option value="M">Male</option>
                                            <option value="F" selected>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1 mb-2">
                                    <div class="s-main">
                                        <label class="form-label fw-semibold" for="status">Status:</label>
                                        <select class="form-select" name="Status" id="status">
                                            <option value="1">Active</option>
                                            <option value="0" selected>Unactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-1 mb-2">
                                    <label class="form-label fw-semibold" for="image">Profile Image:</label>
                                    <input type="file" class="form-control" name="Image">
                                    @error("Image")
                                        <span class="text-danger fs-6 fw-bold">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary mt-2" name="send" id="send-btn">Insert</button>
                            </div>
                        </div>
                    </form>            
                </div>
            </div>
        </div>
    </div>
@endsection
