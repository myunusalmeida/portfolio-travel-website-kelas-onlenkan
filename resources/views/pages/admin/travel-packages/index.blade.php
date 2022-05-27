@extends('layouts.dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800">Travel Packages</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Travel Packages</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Travel Title</th>
                                <th>Location</th>
                                <th>Days</th>
                                <th>Language</th>
                                <th>Tour Type</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Enjoy the beauty of horyuji temple japan</td>
                                <td>Ikagura, Japan</td>
                                <td>12 Days</td>
                                <td>Japanese, English</td>
                                <td>Family Tour</td>
                                <td>IDR 200,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection