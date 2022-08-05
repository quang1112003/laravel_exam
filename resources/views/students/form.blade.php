@extends("layout")
@section("content-header")
    <h1>Create a student
        <a href="{{url("/student/list")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url("/student/create")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text"  name="sid" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text"  name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Age</label>
                            <input type="text"  name="age" class="form-control" id="exampleInputPassword1" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text"  name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Adderss">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telephone</label>
                            <input type="text"  name="telephone" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
