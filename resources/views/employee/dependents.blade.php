@extends('layouts.app')

@section('content')
<head>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card for Employee Profile Form -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="text-center"><strong>EMPLOYEE PROFILE FORM</strong></h2>
                </div>
                <div class="card-body">
                    <form class="row g-3">
                        <div>
                            <h2><strong>DEPENDENTS</strong></h2>
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Relationship</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Jane Javier</td>
                                            <td>21</td>
                                            <td>Mother</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Diana</td>
                                            <td>19</td>
                                            <td>Godmother</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Dependents
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Dependent</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row mb-3">
                                                        <label for="depname" class="col-sm-3 col-form-label">Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="depname">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="depage" class="col-sm-3 col-form-label">Age</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control" id="depage">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="dep_relationship" class="col-sm-3 col-form-label">Relationship</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select" id="dep_relationship" name="dep_relationship">
                                                                <option value="">Select Relationship</option>
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
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Add Dependent</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Pagination navigation" class="text-center mt-4">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="{{ route('healthDetails') }}" class="btn btn-success">PREVIOUS</a>
                                        <a href="{{ route('profile') }}" class="btn btn-success">1</a>
                                        <a href="{{ route('familyBackground') }}" class="btn btn-success">2</a>
                                        <a href="{{ route('educationalBackground') }}" class="btn btn-success">3</a>
                                        <a href="{{ route('healthDetails') }}" class="btn btn-success">4</a>
                                        <a href="{{ route('seminarsTraining') }}" class="btn btn-success">NEXT</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
