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
                        @forelse ($leaves as $leave)
                        <tr>
                            <td class="text-center">{{ $leave->employee_id }}</td>
                            <td class="text-center">{{ $leave->lastName }}</td>
                            <td class="text-center">{{ $leave->firstName }}</td>
                            <td class="text-center">{{ $leave->fromDate }} to {{ $leave->toDate }}</td>
                            <td class="text-center">{{ $leave->department_name }}</td>
                            <td class="text-center">{{ $leave->reason }}</td>
                            <td class="text-center">
                                <a class="btn btn-info">View</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No leave requests found.</td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection