@include('layouts.app')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Developers</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align: right;margin-top:5px;">

                        <a href="{{ url('developers/add') }}" class="btn btn-primary"> Add Developer</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Search Develoers</h3>
                            </div>
                            <form method="get" action="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>ID</label>
                                            <input type="text" class="form-control" name="id" value="{{ Request()->id }}"
                                                placeholder="ID">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ Request()->name }}"
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Designation Name</label>
                                            <input type="text" class="form-control" name="designation_name" value="{{ Request()->designation_name }}"
                                                placeholder="Enter Designation Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button class="btn btn-primary" type="submit"
                                                style="margin-top: 30px">Search</button>
                                            <a href="{{ url('developers') }}" class="btn btn-success"
                                                style="margin-top: 30px">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        @include('message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Developers List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>designation Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Blood Group</th>
                                            <th>Mobile Number</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ !empty($value->designation->designation_name) ? $value->designation->designation_name : '' }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->address }}</td>
                                                <td>{{ $value->blood_group }}</td>
                                                <td>{{ $value->mobile_number }}</td>
                                                <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                                <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                                <td>
                                                    <a href="{{ url('developers/edit/'.$value->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ url('developers/delete/'.$value->id) }}"
                                                        onclick="return confirm('Are you sure delete this developer?')" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="100%">No Record Found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div style="padding: 10px;float:right;">
                                    {{-- {{ $getRecord->appends(request()->except('page'))->links() }} --}}
                                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

    </div>

