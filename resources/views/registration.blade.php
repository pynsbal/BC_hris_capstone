@extends('layouts.app')

@section('content')
<div class="container custom-container">
   <div class="card custom-card">
      <div class="card-body">
         <h2>EMPLOYEE REGISTRATION</h2>

         <div class="row">
            <div class="col">
               <label for="last_name" class="form-label">Lastname</label>
               <input type="text" class="form-control" id="last_name" placeholder="Lastname" name="last_name" required>
            </div>

            <div class="col">
               <label for="first_name" class="form-label">Firstname</label>
               <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Firstname" required>
            </div>

            <div class="col">
               <label for="middle_name" class="form-label">Middle name</label>
               <input type="text" class="form-control" id="middle_name" placeholder="Middle name" name="middle_name" required>
            </div>
         </div>

         <div class="row mt-3">
            <div class="col">
               <label for="employee_id" class="form-label">Employee ID</label>
               <input type="number" class="form-control" id="employee_id" placeholder="Employee ID" name="employee_id" required>
            </div>

            <div class="col">
               <label for="position" class="form-label">Position</label>
               <input type="text" class="form-control" id="position" placeholder="Position" name="position" required>
            </div>

            <div class="col">
               <label for="department" class="form-label">Department</label>
               <input type="text" class="form-control" id="department" placeholder="Department" name="department" required>
            </div>
         </div>

         <div class="row mt-3">
            <div class="col">
               <label for="date_started" class="form-label">Date Started</label>
               <input type="date" class="form-control" id="date_started" name="date_started" required>
            </div>

            <div class="col">
               <label for="username" class="form-label">Username</label>
               <input type="text" class="form-control" id="username" name="username" required oninput="generateUsername()">
            </div>

            <div class="col">
               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="password" required oninput="generatePassword()">
            </div>
         </div>

         <div class="row justify-content-end mt-3">
            <div class="col-auto">
            <button class="btn btn-primary" type="submit">Register</button>
               <a class="btn btn-danger" href="#">Cancel</a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
