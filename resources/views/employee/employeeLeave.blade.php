@extends('layouts.app')

@section('content')

<div class="w3-container">
    <div class="w3-panel w3-card">
        <h3>LEAVE APPLICATION</h3>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="dateofapplication">Date of Application</label>
                <input type="date" id="dateofapplication" name="dateofapplication" required>
            </div>

            <div class="form-group">
                <label for="leavetype">Nature of Leave</label>
                <select id="leavetype" name="leavetype" required>
                    <option value="PersonalLeavew/Pay">Personal Leave w/ Pay</option>
                    <option value="PersonalLeavew/oPay">Personal Leave w/o Pay</option>
                    <option value="SickLeavew/Pay">Sick Leave w/ Pay</option>
                    <option value="SickLeavew/oPay">Sick Leavev w/o Pay</option>
                    <option value="VacationLeavew/Pay">Vacation Leave w/ Pay</option>
                    <option value="VacationLeavew/oPay">Vacation Leave w/o Pay</option>
                    <option value="ServiceLeave/OfficialBusiness">Service Leave/Offical Business</option>
                    <option value="StudyLeave">Study Leave</option>
                    <option value="MaternityLeave">Maternity Leave</option>
                    <option value="PaternityLeave">Paternity Leave</option>
                    <option value="Training">Training</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <p><i>
                    <center>Note: Vacation leave should be applied 3 days before</center>
                </i></p>

            <div class="form-group">
                <label for="othertypeleave">If selected others(Please specify):</label>
                <input type="text" id="othertypeleave" name="otherreasonforleave">
            </div>

            <div class="form-group">
                <label for="reasonforleave">Reason For Leave</label>
                <input type="text" id="reasonforleave" name="reasonforleave">
            </div>

            <div class="form-group">
                <label for="numberofdays">Number of Days</label>
                <input type="number" id="numberofdays" name="numberofdays" min="1" max="100">
            </div>

            <div class="form-group">
                <label for="dateofleavefrom">From</label>
                <input type="date" id="dateofleavefrom" name="dateofleavefrom" required>
            </div>

            <div class="form-group">
                <label for="dateofleaveto">To</label>
                <input type="date" id="dateofleaveto" name="dateofleaveto" required>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection