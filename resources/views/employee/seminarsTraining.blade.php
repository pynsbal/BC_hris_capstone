@extends('layouts.app')

@section('content')

<head>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="text-center"><strong>EMPLOYEE PROFILE FORM</strong></h2>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                    <div class="card-header">
                                        <h2 class="text-center"><strong>SEMINARS/TRAININGS</strong></h2>
                                    </div>
                                    <div class="card-body">
                                        <!-- Seminars/Trainings Table -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title of Seminar/Training</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Sponsor</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addSeminarModal">
                                            Add Seminar/Training
                                        </button>
                                    </div>
                                    <nav aria-label="Pagination navigation" class="text-center mt-4">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="{{ route('healthDetails') }}" class="btn btn-success">PREVIOUS</a>
                                        <a href="{{ route('profile') }}" class="btn btn-success">1</a>
                                        <a href="{{ route('familyBackground') }}" class="btn btn-success">2</a>
                                        <a href="{{ route('educationalBackground') }}" class="btn btn-success">3</a>
                                        <a href="{{ route('healthDetails') }}" class="btn btn-success">4</a>
                                        <a href="{{ route('seminarsTraining') }}" class="btn btn-success">5</a>
                                        <a href="{{ route('researchPublication') }}" class="btn btn-success">NEXT</a>
                                    </li>
                                </ul>
                            </nav>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for Adding Seminar/Training -->
                        <div class="modal fade" id="addSeminarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addSeminarModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="addSeminarModalLabel">ADD SEMINAR/TRAININGS</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="titleofseminar" class="form-label">Title of Seminar/Training</label>
                                                    <input type="text" class="form-control" id="titleofseminar" name="titleofseminar" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="roleofseminar" class="form-label">Role</label>
                                                    <input type="text" class="form-control" id="roleofseminar" name="roleofseminar" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="sponsorofseminar" class="form-label">Sponsor</label>
                                                    <input type="text" class="form-control" id="sponsorofseminar" name="sponsorofseminar" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="dateofseminar" class="form-label">Date</label>
                                                    <input type="date" class="form-control" id="dateofseminar" name="dateofseminar" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection