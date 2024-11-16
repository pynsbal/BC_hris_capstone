@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card for Employee Profile Form -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2 style="text-align: center;"><strong>EMPLOYEE PROFILE FORM</strong></h2>
                </div>
                <div class="card-body">
                    <div class="container mt-4">
                        <h5 style="text-align: center;"><strong>FAMILY BACKGROUND</strong></h5>
                        <form class="row g-3">
                            <p>A. Father's Information</p>
                            <div class="col-md-3">
                                <label for="fathername" class="form-label">Father's Name</label>
                                <input type="text" class="form-control" id="fathername" name="fathername" required>
                            </div>
                            <div class="col-md-3">
                                <label for="fatheroccupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="fatheroccupation" name="fatheroccupation" required>
                            </div>
                            <div class="col-md-3">
                                <label for="fathercontact" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" id="fathercontact" name="fathercontact" required>
                            </div>
                            <div class="col-md-3">
                                <label for="fatherdob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="fatherdob" name="fatherdob" required>
                            </div>

                            <p class="mt-4">B. Mother's Information</p>
                            <div class="col-md-3">
                                <label for="mothername" class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" id="mothername" name="mothername" required>
                            </div>
                            <div class="col-md-3">
                                <label for="motheroccupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="motheroccupation" name="motheroccupation" required>
                            </div>
                            <div class="col-md-3">
                                <label for="mothercontact" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" id="mothercontact" name="mothercontact" required>
                            </div>
                            <div class="col-md-3">
                                <label for="motherdob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="motherdob" name="motherdob" required>
                            </div>

                            <p class="mt-4">C. Spouse Information</p>
                            <div class="col-md-3">
                                <label for="spousename" class="form-label">Spouse's Name</label>
                                <input type="text" class="form-control" id="spousename" name="spousename">
                            </div>
                            <div class="col-md-3">
                                <label for="spouseoccupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="spouseoccupation" name="spouseoccupation">
                            </div>
                            <div class="col-md-3">
                                <label for="spousecontact" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" id="spousecontact" name="spousecontact">
                            </div>
                            <div class="col-md-3">
                                <label for="spousedob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="spousedob" name="spousedob">
                            </div>

                            <h5 class="mt-4"><strong>In Case of Emergency</strong></h5>
                            <p>Person to Contact</p>
                            <div class="col-md-3">
                                <label for="emergency_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="emergency_name" name="emergency_name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="emergency_address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="emergency_address" name="emergency_address" required>
                            </div>
                            <div class="col-md-3">
                                <label for="emergency_contact" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" id="emergency_contact" name="emergency_contact" required>
                            </div>
                            <div class="col-md-3">
                                <label for="emergency_relationship" class="form-label">Relationship</label>
                                <select class="form-select" id="emergency_relationship" name="emergency_relationship" required>
                                    <option value="" selected>Select Relationship</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Cousin">Cousin</option>
                                    <option value="Grandfather">Grandfather</option>
                                    <option value="Grandmother">Grandmother</option>
                                    <option value="Godfather">Godfather</option>
                                    <option value="Godmother">Godmother</option>
                                </select>
                            </div>

                        </form>
                        </form>
                        <br>
                        <br>
                        <nav aria-label="col-12 text-center mt-4" class="text-center">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a href="{{ route('profile') }}" button type="button" class="btn btn-success">PREVIOUS</a>
                                    <a href="{{ route('profile') }}" button type="button" class="btn btn-success">1</a>
                                    <a href="{{ route('familyBackground') }}" button type="button" class="btn btn-success">2</a>
                                    <a href="{{ route('educationalBackground') }}" button type="button" class="btn btn-success">NEXT</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    @endsection