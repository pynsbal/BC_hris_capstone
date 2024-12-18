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
                        <h5 style="text-align: center;"><strong>PERSONAL INFORMATION</strong></h5>
                        <div class="col-md-3">
                            <label for="prefix" class="form-label">Prefix</label>
                            <select class="form-select" aria-label="Select Prefix" name="prefix" required>
                                <option selected>Select Prefix</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Jr.">Jr.</option>
                                <option value="Sr.">Sr.</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Rev.">Rev.</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="firstname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lastname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="Mname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="Mname" name="middlename" required>
                        </div>
                        <div class="col-md-3">
                            <label for="nname" class="form-label">Nickname</label>
                            <input type="text" class="form-control" id="nname" name="nickname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" aria-label="Select Gender" name="gender" required>
                                <option selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="religion" class="form-label">Religion</label>
                            <input type="text" class="form-control" id="religion" name="religion" required>
                        </div>
                        <div class="col-md-3">
                            <label for="civil_status" class="form-label">Civil Status</label>
                            <select class="form-select" aria-label="Select Civil Status" name="civil_status" required>
                                <option selected>Select Civil Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="citizenship" class="form-label">Citizenship</label>
                            <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="FILIPINO" required>
                        </div>
                        <div class="col-md-3">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-3">
                            <label for="mobilenumber" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" id="mobilenumber" name="mobilenumber" required>
                        </div>
                        <div class="col-md-3">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-select" aria-label="Select Department" name="department" required>
                                <option selected>Select Department</option>
                                <option value="accounting_cmd">Accounting/CMD</option>
                                <option value="admin_hr">ADMIN/HRMD</option>
                                <option value="alumni">Alumni</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="date_employed" class="form-label">Date Employed</label>
                            <input type="date" class="form-control" id="date_employed" name="date_employed" required>
                        </div>
                        <div class="col-md-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        <div class="col-md-3">
                            <label for="employee_id" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id" required>
                        </div>

                        <h5><strong>Present Address</strong></h5>
                        <div class="col-md-3">
                            <label for="Present#street" class="form-label">Street Number</label>
                            <input type="text" class="form-control" id="Present#street" name="Present#street" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PresentBarangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" id="PresentBarangay" name="PresentBarangay" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PresentCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="PresentCity" name="PresentCity" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PresentProvince" class="form-label">Province</label>
                            <input type="text" class="form-control" id="PresentProvince" name="PresentProvince" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PresentZIP" class="form-label">ZIP</label>
                            <input type="text" class="form-control" id="PresentZIP" name="PresentZIP" required>
                        </div>
                        <h5><strong>Permanent Address</strong></h5>
                        <div class="col-md-3">
                            <label for="PermanentStreet" class="form-label">Street Number</label>
                            <input type="text" class="form-control" id="PermanentStreet" name="PermanentStreet" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PermanentBarangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" id="PermanentBarangay" name="PermanentBarangay" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PermanentCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="PermanentCity" name="PermanentCity" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PermanentProvince" class="form-label">Province</label>
                            <input type="text" class="form-control" id="PermanentProvince" name="PermanentProvince" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PermanentZIP" class="form-label">ZIP</label>
                            <input type="text" class="form-control" id="PermanentZIP" name="PermanentZIP" required>
                        </div>
                        <h7><strong>Provincial Address</strong></h7>
                        <div class="col-md-3">
                            <label for="Provincial#street" class="form-label">Street Number</label>
                            <input type="text" class="form-control" id="Provincial#street" name="Provincial#street" required>
                        </div>
                        <div class="col-md-3">
                            <label for="ProvincialBarangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" id="ProvincialBarangay" name="ProvincialBarangay" required>
                        </div>
                        <div class="col-md-3">
                            <label for="ProvincialCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="ProvincialCity" name="ProvincialCity" required>
                        </div>
                        <div class="col-md-3">
                            <label for="ProvincialProvince" class="form-label">Province</label>
                            <input type="text" class="form-control" id="ProvincialProvince" name="ProvincialProvince" required>
                        </div>
                        <div class="col-md-3">
                            <label for="ProvincialZIP" class="form-label">ZIP</label>
                            <input type="text" class="form-control" id="ProvincialZIP" name="ProvincialZIP" required>
                        </div>
                    </form>
                    <br>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="placeofbirth" class="form-label"><strong>Place of Birth</strong></label>
                            <input type="text" class="form-control" id="placeofbirth" name="placeofbirth" required>
                        </div>
                    </form>
                    <br>
                    <form class="row g-3">
                        <h7><strong>Government Identification Number</strong></h7>
                        <div class="col-md-3">
                            <label for="philno" class="form-label">Phil Health No.</label>
                            <input type="number" class="form-control" id="philno" name="philno" required>
                        </div>
                        <div class="col-md-3">
                            <label for="pag-ibigno" class="form-label">Pag-Ibig No.</label>
                            <input type="number" class="form-control" id="pag-ibigno" name="pag-ibigno" required>
                        </div>
                        <div class="col-md-3">
                            <label for="TIN" class="form-label">TIN</label>
                            <input type="number" class="form-control" id="TIN" name="TIN" required>
                        </div>
                        <div class="col-md-3">
                            <label for="sss_number" class="form-label">SSS Number</label>
                            <input type="text" class="form-control" id="sss_number" name="sss_number" required>
                        </div>
                        <div class="col-md-3">
                            <label for="PRC" class="form-label">PRC ID</label>
                            <input type="number" class="form-control" id="PRC" name="PRC" required>
                        </div>
                    </form>
                    
                    <nav aria-label="col-12 text-center mt-4" class="text-center">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="{{ route('familyBackground') }}" button type="button" class="btn btn-success">NEXT</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>


    </div>

</div>
</div>
</div>
</div>
@endsection