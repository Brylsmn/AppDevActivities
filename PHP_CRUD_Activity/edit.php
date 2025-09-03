<!DOCTYPE html>
<html>
<head>
    <title>Car Information | Edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"> 
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
    <center>
        <h1>Edit Car Information</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <table class="table text-center">
                    <?php 
                        getRecord($_GET['id']);
                    ?>
                </table>
            </div>    
            <br/>
            <br/>
            <button type="submit" name="update_record" class="btn btn-primary">Update Record</button>
        </form>
    </center>
</body>    
</html>

<?php
    function getRecord($recno){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM carinfo WHERE  id='$recno'";
        $result = $conn -> query($sql);

        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "
                    <tr>
                        <input type='hidden' name='txtid' value='".$row['id']."'>
                        <th>Car Name</th>
                        <td><input type='text' class='form-control' name='txtname' value='".$row['carname']."'></td>
                        <td rowspan='4'><img src='uploads/$row[pic]' width='200' height='200' alt='$row[pic]'></td>
                    </tr>
                    <tr>
                        <th>Model</th>
                        <td><input type='text' class='form-control' name='txtmodel' value='".$row['carmodel']."'></td>
                    </tr>
                    <tr>
                        <th>Year</th>
                        <td><input type='text' class='form-control' name='txtyear' value='".$row['caryear']."'></td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td><input type='text' class='form-control' name='txtcolor' value='".$row['color']."'></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input type='file' class='form-control-file' name='txtpic'></td>
                        <input type='hidden' name='txtpic_old' value='".$row['pic']."'>
                    </tr>    
                ";
            }
        }else{
            echo "No Record Found";
        }
    }
?>