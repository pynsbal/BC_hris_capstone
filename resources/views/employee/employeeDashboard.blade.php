@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('employeeDashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in! DASHBOARD Employee') }}
                </div>
            </div>
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/employeeDashboard.css') }}">
</head>
<body>
    <div class="container welcome-container">
        <h1>Welcome, [Employee Name]</h1>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Date Requested</th>
                <th>Request Type</th>
                <th>Status</th>
                <th>Comments</th>
            </tr>
        </table>
    </div>
</body>
</html>
@endsection
