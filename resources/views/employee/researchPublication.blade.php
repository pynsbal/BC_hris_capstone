@extends('layouts.app')

@section('content')

<head>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Card for Research & Publication -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="text-center"><strong>RESEARCH & PUBLICATION</strong></h2>
                </div>
                <div class="card-body">
                    <!-- Research Publication Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Research Title</th>
                                <th scope="col">Date Published</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#researchModal">
                        ADD
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Research -->
    <div class="modal fade" id="researchModal" tabindex="-1" aria-labelledby="researchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="researchModalLabel">Research and Publication</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="titleofresearch" class="form-label">Research Title</label>
                                <input type="text" class="form-control" id="titleofresearch" name="titleofresearch" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dateofresearch" class="form-label">Date Published</label>
                                <input type="date" class="form-control" id="dateofresearch" name="dateofresearch" required>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Card for Research & Publication -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h2 class="text-center"><strong>UPLOAD FILES</strong></h2>
                    </div>
                    <div class="card-body">

                        <!-- File Upload Form -->
                        <form>
                            @csrf
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="birthcert"><strong>Birth Certificate</strong></label>
                                <input type="file" class="form-control" id="birthcert" name="birthcert" required>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="tor"><strong>Transcript of Records</strong></label>
                                <input type="file" class="form-control" id="tor" name="tor" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Upload Files</button>
                            </div>
                        </form>
                    </div>
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a href="{{ route('seminarsTraining') }}" class="btn btn-success">PREVIOUS</a>
                            <a href="{{ route('profile') }}" class="btn btn-success">1</a>
                            <a href="{{ route('familyBackground') }}" class="btn btn-success">2</a>
                            <a href="{{ route('educationalBackground') }}" class="btn btn-success">3</a>
                            <a href="{{ route('healthDetails') }}" class="btn btn-success">4</a>
                            <a href="{{ route('seminarsTraining') }}" class="btn btn-success">5</a>
                            <a href="{{ route('researchPublication') }}" class="btn btn-success">6</a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">SAVE PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection