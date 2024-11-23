@extends('layouts.app')

@section ('content')

<div class="w4-container">
    <div class="w4-panel w-4 card">
        <h3>REQUEST DOCUMENT</h3>
        <form action="{{ route('documents.store') }}" method="POST">
            @csrf <!-- Include CSRF token for security -->

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="form-group">
                <label for="dateofrequest">Date of Application</label>
                <input type="date" id="dateofrequest" name="dateofrequest" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="reqesteddocuments">Requested Document(s)</label>
                <select id="requesteddocuments" name="requestedDocument" required>
                    <option value="COE">COE</option>
                    <option value="ServiceRecord">Service Record</option>
                    <option value="EmploymentContract">Employment Contract</option>
                    <option value="LetterofRecommendation">Letter of Recommendation</option>
                    <option value="ClearanceCertificate">Clearance Certificate</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <div class="form-group">
                <label for="purpose">Purpose</label>
                <input type="text" id="purpose" name="purpose">
            </div>

            <div class="form-group">
                <label for="orNumber">OR Number</label>
                <input type="text" id="orNumber" name="orNumber">
            </div>
            <p><i>
                    <center>Note: Please show your receipt upon claiming the reqeusted document/s.</center>
            </i></p>

            <div class="col-auto">
                <button class="btn btn-success" href="#" type="submit">Submit</button>
                <button class="btn btn-danger" href="#" type="button">Cancel</button>
            </div>

        </form>
    </div>
</div>
@endsection