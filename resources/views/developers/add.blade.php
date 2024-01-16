@include('layouts.app')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Developers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6" style="margin-top: 5px;">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add</a></li>
                        <li class="breadcrumb-item active">Developers</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Developers</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="{{ url('developers/add') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Name
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" required placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Designation ID
                                        <span style="color:red;">*</span>
                                    </label>
                                    {{-- Dynamically generated values --}}
                                    <div class="col-sm-10">
                                        <select class="form-control" name="designation_id" required>
                                            <option value="">Select Designation Name</option>
                                            @foreach ($getRecord as $value)
                                            <option value="{{ $value->id }}">{{ $value->designation_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Email
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" required placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Address
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address" value="{{ old('address') }}"
                                            class="form-control" required placeholder="Enter Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Blood Group
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blood_group" value="{{ old('blood_group') }}"
                                            class="form-control" required placeholder="Enter Blood Group">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Mobile Number
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="mobile_number" value="{{ old('mobile_number') }}"
                                            class="form-control" required placeholder="Enter Mobile Number">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('developers') }}" class="btn btn-warning">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
