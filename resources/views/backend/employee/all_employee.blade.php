@extends('backend.layout.admin_master')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Srl</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($employees as $key=>$row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row['name'] }}</td>
                            <td>{{ $row['phone'] }}</td>
                            <td>{{ $row['address']}}</td>
                            <td><img src="{{ $row['photo']}}" alt="{{ $row['name'] }}" style="height:50px; width:80px;"></td>
                            <td>{{ $row['salary']}}</td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{ url('/delete-employee/'.$row->id) }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                                <a href="{{ url('/view-employee/'.$row->id) }}" class="btn btn-primary"><i class="fa fa-low-vision"></i></a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>


@endsection