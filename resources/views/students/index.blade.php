@extends('mylayouts.dashboardlayout')

@section('studentindex')
    <div class="container">
        <div class="row">
            <div class="card o-hidden border-0 shadow-lg my-5 col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container text-center mt-2 my-0">
                            <h2 class="text-gray-900 fw-bolder text-center mt-3 text-decoration-underline">Student Table</h2>
                            <div class="my-2 d-flex">
                                <a href="{{url('/dashboard/student-insert')}}" class="btn btn-primary">+ Insert Here</a>
                            </div>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($student as $std)
                                <tr>
                                    <th scope="row">{{++$i}}</th>
                                    <td>{{$std->first_name}}</td>
                                    <td>{{$std->last_name}}</td>
                                    <td>
                                        @if($std->gender == 'M')
                                            <span>Male</span>
                                        @else
                                            <span>Female</span>
                                        @endif
                                    </td>
                                    <td>{{$std->email}}</td>
                                    <td><img src="{{url('public/student/images')}}/{{$std->img}}" alt="image" width="40px"></td>
                                    <td>
                                        @if($std->status == 1)
                                            <span class="btn btn-primary text-white" style="cursor: not-allowed !important; pointer-events: none !important;">Active</span>
                                        @else
                                            <span class="btn btn-secondary text-white" style="cursor: not-allowed !important; pointer-events: none !important;">Unactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{url('/student/edit')}}/{{$std->id}}">Edit</a>
                                        <a href="{{url('/student/delete')}}/{{$std->id}}" class="btn btn-danger" id="btn">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
