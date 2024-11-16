@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <h2>EARNINGS</h2>
                </div>
                <div class="card-body">
                    <form class="row g-4">
                        <div class="col-sm-4">
                            <label for="basicpay" class="form-label">BASIC PAY</label>
                            <input type="text" class="form-control" id="basicpay" name="basicpay" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="absent" class="form-label">ABSENT</label>
                            <input type="text" class="form-control" id="absent" name="absent" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="tardy" class="form-label">TARDY</label>
                            <input type="text" class="form-control" id="tardy" name="tardy" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="overload" class="form-label">OVERLOAD</label>
                            <input type="text" class="form-control" id="overload" name="overload" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="regular_overtime" class="form-label">REG .OT</label>
                            <input type="text" class="form-control" id="regular_overtime" name="regular_overtime" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="sat_sun_ot" class="form-label">SAT / SUN OT</label>
                            <input type="text" class="form-control" id="sat_sun_ot" name="sat_sun_ot" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="np" class="form-label">N.P.</label>
                            <input type="text" class="form-control" id="np" name="np" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="tax_refund" class="form-label">TAX REFUND</label>
                            <input type="text" class="form-control" id="tax_refund" name="tax_refund" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="laboratory" class="form-label">LABORATORY</label>
                            <input type="text" class="form-control" id="laboratory" name="laboratory" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="cola" class="form-label">COLA</label>
                            <input type="text" class="form-control" id="cola" name="cola" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="rle" class="form-label">RLE</label>
                            <input type="text" class="form-control" id="rle" name="rle" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="sol" class="form-label">S O L</label>
                            <input type="text" class="form-control" id="sol" name="sol" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="uni_allow" class="form-label">UNI ALLOW</label>
                            <input type="text" class="form-control" id="uni_allow" name="uni_allow" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="rice_subsidy" class="form-label">RICE SUBSIDY</label>
                            <input type="text" class="form-control" id="rice_subsidy" name="rice_subsidy" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="rle" class="form-label">RLE</label>
                            <input type="text" class="form-control" id="rle" name="rle" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="sol" class="form-label">DAY(S) OF DUTY</label>
                            <input type="text" class="form-control" id="sol" name="sol" readonly>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
    <div class="col-sm">
    
            <div class="card">
                <div class="card-header">
                    <h2>DEDUCTIONS</h2>
                </div>
                <div class="card-body">
                    <form class="row g-4">
                        <div class="col-sm-4">
                            <label for="loan" class="form-label">W. TAX</label>
                            <input type="text" class="form-control" id="loan" name="loan" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="sss" class="form-label">OVER PAY</label>
                            <input type="text" class="form-control" id="sss" name="sss" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="philhealth" class="form-label">SSS CON.</label>
                            <input type="text" class="form-control" id="philhealth" name="philhealth" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="pagibig" class="form-label">PAGIBIG CON.</label>
                            <input type="text" class="form-control" id="pagibig" name="pagibig" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="peraa_con" class="form-label">PERAA CON.</label>
                            <input type="text" class="form-control" id="peraa_con" name="peraa_con" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="philhealth_loan" class="form-label">PHILHEALTH</label>
                            <input type="text" class="form-control" id="philhealth_loan" name="philhealth_loan" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="books" class="form-label">BOOKS</label>
                            <input type="text" class="form-control" id="books" name="books" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="coop" class="form-label">COOP</label>
                            <input type="text" class="form-control" id="coop" name="coop" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="hospital" class="form-label">HOSP.</label>
                            <input type="text" class="form-control" id="hospital" name="hospital" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="masteral" class="form-label">MASTERAL</label>
                            <input type="text" class="form-control" id="masteral" name="masteral" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="tshirt" class="form-label">T-SHIRT</label>
                            <input type="text" class="form-control" id="tshirt" name="tshirt" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="pagibig_loan" class="form-label">PAG-IBIG LOAN BAL.</label>
                            <input type="text" class="form-control" id="pagibig_loan" name="pagibig_loan" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="sss_loan" class="form-label">SSS LOAN BAL.</label>
                            <input type="text" class="form-control" id="sss_loan" name="sss_loan" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="peraa_loan" class="form-label">PERAA LOAN BAL.</label>
                            <input type="text" class="form-control" id="peraa_loan" name="peraa_loan" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="sss_condo" class="form-label">SSS CONDO</label>
                            <input type="text" class="form-control" id="sss_condo" name="sss_condo" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="tuition" class="form-label">TUITION</label>
                            <input type="text" class="form-control" id="tuition" name="tuition" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="sss_loan_balance" class="form-label">SSS LOAN</label>
                            <input type="text" class="form-control" id="sss_loan_balance" name="sss_loan_balance" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="pagibig_loan_balance" class="form-label">PAG-IBIG LOAN</label>
                            <input type="text" class="form-control" id="pagibig_loan_balance" name="pagibig_loan_balance" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="peraa_loan_balance" class="form-label">PERAA LOAN</label>
                            <input type="text" class="form-control" id="peraa_loan_balance" name="peraa_loan_balance" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="aux" class="form-label">AUX</label>
                            <input type="text" class="form-control" id="aux" name="aux" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="union" class="form-label">UNION</label>
                            <input type="text" class="form-control" id="union" name="union" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="other_deductions" class="form-label">OTHER DED.</label>
                            <input type="text" class="form-control" id="other_deductions" name="other_deductions" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label for="total_deductions" class="form-label">TOTAL DED.</label>
                            <input type="text" class="form-control" id="total_  deductions" name="total_deductions" readonly>
                        </div>
                    </form>
                </div>
            </div>
        

    </div>
    
  </div>
  <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary">Print</button>
        </div>
</div>
@endsection
