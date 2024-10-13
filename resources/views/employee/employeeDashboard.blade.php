@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4"> <!-- Add 'mb-4' for margin-bottom -->
                <div class="card-header">{{ __('Welcome, :name', ['name' => $user->name]) }}</div>
            </div>

            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date Request</th>
                            <th>Request Type</th>
                            <th>Status</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sample Date Request</td>
                            <td>Sample Request Type</td>
                            <td>Sample Status</td>
                            <td>Sample Comment</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection