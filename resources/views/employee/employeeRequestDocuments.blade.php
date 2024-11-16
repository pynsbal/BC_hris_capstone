@extends('layouts.app')

@section ('content')

<div class="w4-container">
    <div class="w4-panel w-4 card">
        <h3>REQUEST DOCUMENT</h3>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="dateofrequest">Date of Application</label>
                <input type="date" id="dateofrequest" name="dateofrequest" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
            </div>

            <div class="form-group">
                <label for="reqesteddocuments">Requested Document(s)</label>
                <select id="requesteddocuments" name="requesteddocuments" required>
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
                <label for="ORNumber">OR Number</label>
                <input type="text" id="ORNumber" name="ORNumber">
            </div>
            <p><i>
                    <center>Note: Please show your receipt upon claiming the reqeusted document/s.</center>
                </i></p>
        </form>
    </div>
</div>
@endsection
@extends ('layout.app')

@section ('content')

<div class="w4-container">
    <div class="w4-panel w-4 card">
        <h3>REQUEST DOCUMENT</h3>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="dateofrequest">Date of Application</label>
                <input type="date" id="dateofrequest" name="dateofrequest" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
            </div>

            <div class="form-group">
                <label for="reqesteddocuments">Requested Document(s)</label>
                <select id="requesteddocuments" name="requesteddocuments" required>
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
                <label for="ORNumber">OR Number</label>
                <input type="text" id="ORNumber" name="ORNumber">
            </div>
            <p><i>
                    <center>Note: Please show your receipt upon claiming the reqeusted document/s.</center>
                </i></p>
        </form>
    </div>
</div>
@endsection