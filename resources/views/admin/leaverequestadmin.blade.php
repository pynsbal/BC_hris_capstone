@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row justify-content-center mb-3">
                <div class="col-auto">
                    <form class="mt-6" method="GET">
                        <div class="form-group mb-3 d-inline-flex">
                            <div class="input-group me-2">
                                <input class="form-control" type="text" placeholder="Search..." aria-label="Search" name="search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" href="#" type="submit">Search</button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Filter by Date Started (YYYY-MM-DD)" name="filter_date">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" href="#" type="submit">Filter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Employee ID</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Department</th>
                            <th class="text-center">Reason Of Leave</th>
                            <th class="text-center">VIEW</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample row for demonstration -->
                        <tr>
                            <td class="text-center">Sample ID</td>
                            <td class="text-center">Sample Last Name</td>
                            <td class="text-center">Sample First Name</td>
                            <td class="text-center">Sample Position</td>
                            <td class="text-center">Sample Department</td>
                            <td class="text-center">Sample Leave</td>
                            <td>
                                <a class="btn btn-info" href="#">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
