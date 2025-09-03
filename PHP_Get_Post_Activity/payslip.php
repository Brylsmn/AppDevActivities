<html>
    <head>
        <title>Payslip</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
    </head>

    <body>
        <div class="container">
            <?php
                $emp_id = $_POST['employee_id'];
                $f_name = $_POST['first_name'];
                $m_initial = $_POST['middle_initial'];
                $l_name = $_POST['last_name'];
                $emp_name = $f_name .' '. $m_initial .' '.$l_name;
                $basic_pay = $_POST['basic'];
                $incentive_pay = $_POST['incentive'];
                $house_rent_pay = $_POST['house_rent'];
                $meal_pay = $_POST['meal'];
                $provident_deduct = $_POST['provident'];
                $tax_deduct = $_POST['tax'];
                $loan_deduct = $_POST['loan'];

                function total_earnings($basic,$incentive,$house_rent,$meal){
                    $total = $basic + $incentive + $house_rent + $meal;
                    return $total;
                }
                
                function total_deductions($provident,$tax,$loan){
                    $total = $provident + $tax + $loan;
                    return $total;

                }

                function net_pay($basic, $incentive, $house_rent, $meal, $provident, $tax, $loan){
                    $total_earnings = total_earnings($basic, $incentive, $house_rent, $meal);
                    $total_deductions = total_deductions($provident, $tax, $loan);
                    $net_pay = $total_earnings - $total_deductions;
                    return $net_pay;
                }

                echo "<div class='page-header'>
		                <h1>Employee's Payslip</h1>
	                </div>
                    
                    <form class='form-horizontal'>
                        <div class='form-group'>
                            <label for='name' class='control-label col-md-2'>Employee ID</label>
                            <div class='col-md-10'>
                                <input type='text' disabled class='form-control' name='employee_id' value='".$emp_id."'>
                            </div>
                        </div>	
                        <div class='form-group'>
                            <label for='name' class='control-label col-md-2'>Employee Name</label>
                            <div class='col-md-10'>
                                <input type='text' disabled class='form-control' name='employee_name' value='".$emp_name."'>
                            </div>
                        </div>	
                    </form> ";

                echo "<div class='page-header'>
                        <h1>Earnings</h1>
                    </div>

                    <form class='form-horizontal'>
                        <div class='form-group'>
                            <label for='basic_pay' class='control-label col-md-2'>Basic Pay</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='basic_pay' value='".$basic_pay."'>
                            </div>
                        </div>	
                        <div class='form-group'>
                            <label for='incentive_pay' class='control-label col-md-2'>Incentive Pay</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='incentive_pay' value='".$incentive_pay."'>
                            </div>
                        </div>	
                        <div class='form-group'>
                            <label for='house_rent_pay' class='control-label col-md-2'>House Rent Allowance</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='house_rent_pay' value='".$house_rent_pay."'>
                            </div>
                        </div>
                        <div class='form-group'>
                           <label for='meal_pay' class='control-label col-md-2'>Meal Allowance</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='meal_pay' value='".$meal_pay."'>
                            </div>
                        </div>
                    </form>";

                echo "<div class='page-header'>
		                <h1>Deductions</h1>
	                </div>
                    
                    <form class='form-horizontal'>
                        <div class='form-group'>
                            <label for='basic_pay' class='control-label col-md-2'>Provident Fund</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='provident_deduct' value='".$provident_deduct."'>
                            </div>
                        </div>	
                        <div class='form-group'>
                            <label for='incentive_pay' class='control-label col-md-2'>Tax</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='tax_deduct' value='".$tax_deduct."'>
                            </div>
                        </div>	
                        <div class='form-group'>
                            <label for='house_rent_pay' class='control-label col-md-2'>Loan</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='loan_dedcut' value='".$loan_deduct."'>
                            </div>
                        </div>
                    </form>";
                   
                echo "<div class='page-header'>
		                <h1>Computations</h1>
	                </div>
                    
                    <form class='form-horizontal'>
                        <div class='form-group'>
                            <label for='basic_pay' class='control-label col-md-2'>Total Earnings</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='total_earnings' value='".total_earnings($basic_pay,$incentive_pay,$house_rent_pay,$meal_pay)."'>
                            </div>
                        </div>	
                        <div class='form-group'>
                            <label for='incentive_pay' class='control-label col-md-2'>Total Deductions</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='total_deductions' value='".total_deductions($provident_deduct,$tax_deduct,$loan_deduct)."'>
                            </div>
                        </div>	
                        <div class='form-group'>
                            <label for='house_rent_pay' class='control-label col-md-2'>Net Pay</label>
                            <div class='col-md-10'>
                                <input type='number' disabled class='form-control' name='net_pay' value='".net_pay($basic_pay,$incentive_pay,$house_rent_pay,$meal_pay,$provident_deduct,$tax_deduct,$loan_deduct)."'>
                            </div>
                        </div>
                    </form>";    
            ?>
            <form method="POST" action="payroll.php">
                <input class="btn btn-success" type="submit" value="Back">
            </form>
        </div>
        
    </body>    
</html>
