@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card for Employee Profile Form -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2 style="text-align: center;"><strong> EMPLOYEE PROFILE FORM</strong></h2>
                </div>
                <div class="card-body">
                    <div class="container mt-4">
                        <h2 style="text-align: center;">HEALTH DETAILS</h2>

                        <form class="row g-4">
                            <div class="col-md-4">
                                <label for="weight" class="form-label">Weight</label>
                                <input type="text" class="form-control" id="weight" name="weight" required>
                            </div>
                            <div class="col-md-4">
                                <label for="height" class="form-label">Height</label>
                                <input type="text" class="form-control" id="height" name="height" required>
                            </div>
                            <div class="col-md-4">
                                <label for="blood-type" class="form-label">Blood type?</label>
                                <select class="form-select" aria-label="Default select example" id="blood-type" name="blood-type" required>
                                    <option value="Select Blood Type">Blood Type</option>
                                    <option value="A">A</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B">B</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB">AB</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O">O</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </form>
<br>
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="x-ray-date" class="form-label">When was your last chest x-ray?</label>
                                <input type="date" class="form-control" id="x-ray-date" name="x-ray-date" required>
                            </div>
                        </form>
<br>
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="x-ray-result" class="form-label">What was the result?</label>
                                <input type="text" class="form-control" id="x-ray-result" name="x-ray-result" required>
                            </div>
                        </form>
                        <br>
                        <br>
                        <nav aria-label="col-12 text-center mt-4" class="text-center">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="{{ route('familyBackground') }}" button type="button" class="btn btn-success">PREVIOUS</a>
                                <a href="{{ route('profile') }}" button type="button" class="btn btn-success">1</a>
                                <a href="{{ route('familyBackground') }}" button type="button" class="btn btn-success">2</a>
                                <a href="{{ route('educationalBackground') }}" button type="button" class="btn btn-success">3</a>
                                <a href="{{ route('healthDetails') }}" button type="button" class="btn btn-success">4</a>
                                <a href="{{ route('dependents') }}" button type="button" class="btn btn-success">NEXT</a>
                            </li>
                        </ul>
                    </nav>
                    </div>
                    @endsection