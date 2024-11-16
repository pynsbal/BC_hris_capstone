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
                    <form class="row g-3">

                        <div class="container mt-4">
                            <h5 style="text-align: center;"><strong>EDUCATIONAL BACKGROUND</strong></h5>

                            <form class="row g-3">
                                <strong>HIGH SCHOOL</strong>
                                <div class="col-md-3">
                                    <label for="HS_nameofschool" class="form-label">Name of School</label>
                                    <input type="text" class="form-control" id="HS_nameofschool" name="HS_nameofschool" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="HS_attainment" class="form-label">Highest Attainment</label>
                                    <input type="text" class="form-control" id="HS_attainment" name="HS_attainment" required>
                                </div>
                            </form>
                            <form class="row g-3">
                                <div class="col-md-3">
                                    <label for="HS_yearstarted" class="form-label">Year Started</label>
                                    <input type="number" min="1900" max="2030" step="1" value="0000" class="form-control" id="HS_yearstarted" name="HS_yearstarted" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="HS_yearended" class="form-label">Year Ended</label>
                                    <input type="number" min="1900" max="2030" step="1" value="0000" class="form-control" id="HS_yearended" name="HS_yearended" required>
                                </div>
                            </form>

                            <br>
                            <br>
                            <br>

                            <form class="row g-3">
                                <strong>VOCATIONAL SCHOOL</strong>
                                <div class="col-md-3">
                                    <label for="v_nameofschool" class="form-label">Name of School</label>
                                    <input type="text" class="form-control" id="v_nameofschool" name="v_nameofschool">
                                </div>
                                <div class="col-md-3">
                                    <label for="v_course" class="form-label">Course</label>
                                    <input type="text" class="form-control" id="v_course" name="v_course">
                                </div>
                                <div class="col-md-3">
                                    <label for="v_attainment" class="form-label">Highest Attainment</label>
                                    <input type="text" class="form-control" id="v_attainment" name="v_attainment">
                                </div>
                            </form>

                            <br>

                            <form class="row g-3">
                                <div class="col-md-3">
                                    <label for="v_yearstarted" class="form-label">Year Started</label>
                                    <input type="number" min="1900" max="2030" step="1" value="0000" class="form-control" id="v_yearstarted" name="v_yearstarted">
                                </div>
                                <div class="col-md-3">
                                    <label for="v_yearended" class="form-label">Year Ended</label>
                                    <input type="number" min="1900" max="2030" step="1" value="0000" class="form-control" id="v_yearended" name="v_yearended">
                                </div>
                            </form>

                            <br>
                            <br>

                            <form class="row g-3">
                                <strong>COLLEGE</strong>
                                <div class="col-md-3">
                                    <label for="college_nameofschool" class="form-label">Name of School</label>
                                    <input type="text" class="form-control" id="college_nameofschool" name="college_nameofschool">
                                </div>
                                <div class="col-md-3">
                                    <label for="college_course" class="form-label">Course</label>
                                    <input type="text" class="form-control" id="college_course" name="college_course">
                                </div>
                                <div class="col-md-3">
                                    <label for="college_attainment" class="form-label">Highest Attainment</label>
                                    <input type="text" class="form-control" id="college_attainment" name="college_attainment">
                                </div>
                            </form>

                            <form class="row g-3">
                                <div class="col-md-3">
                                    <label for="college_yearstarted" class="form-label">Year Started</label>
                                    <input type="number" min="1900" max="2030" step="1" value="0000" class="form-control" id="college_yearstarted" name="college_yearstarted">
                                </div>
                                <div class="col-md-3">
                                    <label for="college_yearended" class="form-label">Year Ended</label>
                                    <input type="number" min="1900" max="2030" step="1" value="0000" class="form-control" id="college_yearended" name="college_yearended">
                                </div>
                            </form>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <nav aria-label="col-12 text-center mt-4" class="text-center">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="{{ route('familyBackground') }}" button type="button" class="btn btn-success">PREVIOUS</a>
                                <a href="{{ route('profile') }}" button type="button" class="btn btn-success">1</a>
                                <a href="{{ route('familyBackground') }}" button type="button" class="btn btn-success">2</a>
                                <a href="{{ route('educationalBackground') }}" button type="button" class="btn btn-success">3</a>
                                <a href="{{ route('healthDetails') }}" button type="button" class="btn btn-success">NEXT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    @endsection