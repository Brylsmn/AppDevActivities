<html>
    <head>
        <title>Payroll</title>	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="page-header">
		        <h1>Employee's Payroll</h1>
	        </div>

            <form class="form-horizontal" method="POST" action="payslip.php">
                <div class="form-inline">
                    <label class="control-label">Employee ID</label>
                    <div class="">
                        <input class="form-control" type="text" name="employee_id">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Last Name</label>
                    <div class="">
                        <input class="form-control" type="text" name="last_name">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">First Name</label> 
                    <div class="">
                        <input class="form-control" type="text" name="first_name">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Middle Initial</label>
                    <div class="">
                        <input class="form-control" type="text" name="middle_initial">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Basic Pay</label>
                    <div class="">
                        <input class="form-control" type="number" name="basic">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Incentive Pay</label>
                    <div class="">
                        <input class="form-control" type="number" name="incentive">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">House Rent Allowance</label>
                    <div class="">
                        <input class="form-control" type="number" name="house_rent">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Meal Allowance</label>
                    <div class="">
                        <input class="form-control" type="number" name="meal">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Provident Fund</label>
                    <div class="">
                        <input class="form-control" type="number" name="provident">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Tax</label>
                    <div class="">
                        <input class="form-control" type="number" name="tax">
                    </div>
                </div>
                <div class="form-inline">
                    <label class="control-label">Loan</label>
                    <div class="">
                        <input class="form-control" type="number" name="loan">
                    </div>
                </div>
                <br/>
                <input class="btn btn-success" type="submit" value="View Payslip">   
            </form>
        </div>    
    </body>    
</html>