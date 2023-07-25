<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->
    {{-- <link href="{{url('cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{url('/public/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/public/frontend/formstyle/style.css')}}">
    <title>Insert_Form</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-contant-between">
                    <div class="col-6">
                        <h2 class="md-heading text-capitalize">Kindly Fill Form To Enroll</h2>
                    </div>
                    <div class="col-6">
                        <a href="#">
                            <h5 class="vedio-heading orange-btn">Learn How To Apply?</h5>
                        </a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <form action="{{url('/store')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3">
            <div class="row">
                <div class="offset-md-2 col-md-8 mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1 mt-2">
                                <label for="First Name" class="form-label">First Name*</label>
                                <input type="text" class="form-control" id="First Name" placeholder="Enter your full name" name="F_Name" value="{{old('F_Name')}}" required>
                                @error('F_Name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1 mt-2">
                                <label for="Last name" class="form-label">Last Name*</label>
                                <input type="text" class="form-control" id="Last name" placeholder="Enter your father name" name="L_Name" value="{{old('L_Name')}}" required>
                                @error('L_Name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                            <div class="mb-1 mt-2">
                                <label for="Email" class="form-label">Email Address*</label>
                                <input type="Email" class="form-control" id="Email" placeholder="Enter your email address" name="S_Email" value="{{old('S_Email')}}" required>
                                @error('S_Email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1 mt-2">
                                <label for="Gender" class="form-label">Gender</label>
                                <select name="S_Gender" id="Gender" class="form-select">
                                    <option value="" disabled>____ Select ____</option>
                                    <option value="M" selected>Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1 mt-2">
                                <label for="Status" class="form-label">Status</label>
                                <select name="S_Status" id="Status" class="form-select">
                                    <option value="" disabled >____ Select ____</option>
                                    <option value="Active">Actice</option>
                                    <option value="Unactive" selected>Unactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="">Profile Image</label>
                        <input type="file" name="img[]" multiple id="simg" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-1 mt-2">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="Password" id="psd" placeholder="Enter Password Here">
                            @error('Password')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-1 mt-2">
                            <label for="" class="form-label">Re-write Password</label>
                            <input type="password" class="form-control" name="Repassword" id="repsd" placeholder="Enter Password Here">
                            @error('Repassword')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" name="send" class="btn btn-primary mt-3 mb-5" id="formbtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<!-- <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script> -->
<link rel="stylesheet" href="{{url('/public/dist/js/bootstrap.min.js')}}">
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
</body>
</html>