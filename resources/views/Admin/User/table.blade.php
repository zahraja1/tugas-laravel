@extends('Admin.User.content')

@section('title', 'user')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Konsumen</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Konsumen</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<!-- Main Content -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                       <a href="{{route ('Admin.User.createUser')}}" class="btn btn-primary btn-md" >Add customer </a>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>User_id</th>
                                    <th>Nama customer</th>
                                    <th width="10%">Image</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($user as $row)
                                <tr>
                                <td>{{$row->User_id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>
<!-- End Main Content -->
@endsection