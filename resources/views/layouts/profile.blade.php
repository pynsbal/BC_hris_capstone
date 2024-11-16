<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Profile Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <style>
    h2 { text-align: center; }
    div { border-radius: 5px; padding: 5px; }
    .required::after { content: " *"; color: red; }
  </style>
</head>
<body>
  @include('layouts.app')

  <div class="container">
    <br>
    <h2>MY PROFILE</h2>

    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <strong>PERSONAL INFORMATION</strong>
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <!-- Form starts here -->
            <form class="row g-3" method="POST" action="{{ route('employeeform.update', ['id' => $id]) }}">
              @csrf
              @method('PUT')

              <div class="col-md-3">
                <label for="employee_id" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ $employee_id }}" readonly>
              </div>

              <div class="col-md-3">
                <label for="date_started" class="form-label">Date Started</label>
                <input type="date" class="form-control" id="date_started" name="date_started" value="{{ $date_started }}" readonly>
              </div>

              <div class="col-md-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ $department }}" readonly>
              </div>

              <div class="col-md-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ $position }}" readonly>
              </div>

              <!-- Other form fields with Blade variables -->
              <div class="col-md-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $first_name }}" readonly>
              </div>

              <div class="col-md-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $last_name }}" readonly>
              </div>

              <div class="col-md-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $middle_name }}" readonly>
              </div>

              <div class="col-md-3">
                <label for="prefix" class="form-label required">Prefix</label>
                <select class="form-select" name="prefix" required>
                  <option value="" disabled selected>Prefix</option>  
                  <option value="Mr." {{ $prefix == "Mr." ? 'selected' : '' }}>Mr.</option>
                  <option value="Ms." {{ $prefix == "Ms." ? 'selected' : '' }}>Ms.</option>
                  <option value="Jr." {{ $prefix == "Jr." ? 'selected' : '' }}>Jr.</option>
                  <option value="Sr." {{ $prefix == "Sr." ? 'selected' : '' }}>Sr.</option>
                  <option value="II" {{ $prefix == "II" ? 'selected' : '' }}>II</option>
                  <option value="III" {{ $prefix == "III" ? 'selected' : '' }}>III</option>
                  <option value="IV" {{ $prefix == "IV" ? 'selected' : '' }}>IV</option>
                  <option value="Mrs." {{ $prefix == "Mrs." ? 'selected' : '' }}>Mrs.</option>
                  <option value="Dr." {{ $prefix == "Dr." ? 'selected' : '' }}>Dr.</option>
                  <option value="Rev." {{ $prefix == "Rev." ? 'selected' : '' }}>Rev.</option>
                </select>
              </div>

              <!-- Repeat similar for other fields -->

              <div class="col-md-3">
                <label for="phone_number" class="form-label required">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+63" maxLength="10" value="{{ $phone_number }}" required>
                <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
              </div>

              <!-- Address Fields -->
              <h7><strong>Present Address</strong></h7>
              <div class="col-md-3">
                <label for="present_street" class="form-label required">Street Number</label>
                <input type="text" class="form-control" id="present_street" name="present_street" value="{{ $present_street }}" required>
              </div>
              <div class="col-md-3">
                <label for="present_barangay" class="form-label required">Barangay</label>
                <input type="text" class="form-control" id="present_barangay" name="present_barangay" value="{{ $present_barangay }}" required>
              </div>

              <!-- Repeat for Permanent and Provincial Address -->

              <h7><strong>Government Identification Number</strong></h7>
              <div class="col-md-3">
                <label for="phil_no" class="form-label required">Phil Health No.</label>
                <input type="text" class="form-control" id="phil_no" name="phil_no" placeholder="####-#####-###" maxLength="12" value="{{ $phil_no }}" required>
              </div>

              <!-- Repeat for other government IDs -->

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
