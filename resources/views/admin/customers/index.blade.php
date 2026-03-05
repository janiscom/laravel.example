@extends('admin.layouts.default')


@section('content')

    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-sm-6"><h3 class="mb-0">Customers</h3></div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-end">
                                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Customers</li>
                                        </ol>
                                    </div>
                                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">



                        <div class="col-md-12">

                            <div class="card mb-4">
                                <div class="card-header">
                                    <a href="{{ route('customers.create') }}" class="btn btn-primary">Add Customer</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered" role="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px" scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Surname</th>
                                            <th style="width: 140px" scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($customers as $customer)
                                        <tr class="align-middle">
                                            <td>{{ $customer->id }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->surname }}</td>
                                            <td>

                                                <a href="{{ route('customers.update', ['customer'=>$customer->id]) }}" class="btn btn-info"><i class="bi bi-pencil"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                    {{ $customers->links() }}


                                </div>
                            </div>

                        </div>

                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>


@endsection
