@extends('layouts.app')
@section('content')
<div class="container custom-container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card mb-4 custom-card">
            <div class="card-header">
               <h2><strong> EMPLOYEE REGISTRATION</strong></h2>
            </div>
            <div class="card-body">
               <form class="row g-3" action="{{ route('register') }}" method="POST">
                  @csrf
                  <div class="row">
                     <div class="col">
                        <label for="lastName" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Lastname" name="lastName" required>
                     </div>
                     <div class="col">
                        <label for="firstName" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Firstname" required>
                     </div>
                     <div class="col">
                        <label for="middleName" class="form-label">Middle name</label>
                        <input type="text" class="form-control" id="middleName" placeholder="Middle name" name="middleName" required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
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
                  <div class="row">
                     <div class="col">
                        <label for="employee_id" class="form-label">Employee ID</label>
                        <input type="number" class="form-control" id="employee_id" placeholder="Employee ID" name="employee_id" required>
                     </div>
                     <div class="col">
                        <label for="date_started" class="form-label">Date Started</label>
                        <input type="date" class="form-control" id="date_started" name="date_started" required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" placeholder="Position" name="position" required>
                     </div>
                     <div class="col">
                        <label for="dept_id" class="form-label">Department</label>
                        <select class="form-select" id="dept_id" name="dept_id" required>
                           <option value="" disabled selected>Select a department</option>
                           @foreach ($departments as $department)
                           <option value="{{ $department->id }}">{{ $department->name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  
                  <div class="row justify-content-end mt-3">
                     <div class="col-auto">

                        <button type="submit" class="btn btn-primary">Register</button>
                        <button type="button" class="btn btn-danger">Cancel</button>

                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection