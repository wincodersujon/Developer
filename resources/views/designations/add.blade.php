@include('layouts.app')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Designations</h1>
                </div><!-- /.col -->
                <div class="col-sm-6"style="margin-top: 5px;">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add</a></li>
                        <li class="breadcrumb-item active">Designations</li>
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
                            <h3 class="card-title">Designations</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="{{ url('designations/add') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Designation Name
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="designation_name" value="{{ old('designation_name') }}"
                                            class="form-control" required placeholder="Enter Designation">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('designations') }}" class="btn btn-warning">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
