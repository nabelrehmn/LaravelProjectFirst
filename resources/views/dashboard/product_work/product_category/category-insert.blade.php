@extends('mylayouts.dashboardlayout')

@section('categoryinsert')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 offset-lg-2">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Insert Category Here</h1>
                            </div>
                            <form class="user" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="Category Name" placeholder="Enter Category Name Here*" name="Category-Name" require>                    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <textarea class="form-control" name="Category-Description" placeholder="Description:" row="5"></textarea>                 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="file" class="form-control" style="padding:6px;" name="Category_Img" id="Category Image">
                                    </div>
                                </div>
                                <button type="submit" name="Insert" class="btn btn-primary btn-block">Insert Here</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection