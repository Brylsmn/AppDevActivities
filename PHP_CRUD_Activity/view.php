<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <title>Car Information | View</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"> 
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
<body>
    <center>
        <br/>
        <h1>Car Records</h1>
        <br/>
        <?php
            if(isset($_SESSION['status'])&& $_SESSION !='')
            {
                echo $_SESSION['status'];
                echo "<br>";
                echo "<br>";
                unset ($_SESSION['status']);
            } 
        ?>

        <div class="container">
            <table border="1" class="table table-bordered justify-content-center">
                <tr class="info">
                    <th class="text-center">ID</th>
                    <th class="text-center">Car Name</th>
                    <th class="text-center">Model</th>
                    <th class="text-center">Year</th>
                    <th class="text-center">Color</th>
                    <th class="text-center">Photo</th>
                    <th class='text-center'>Options</th>
                </tr>
                <?php viewall(); ?>
            </table>
        </div>    
        <form action="insert.php" method="post">
            <button type="submit" name="add_record" class="btn btn-primary">Add New Record</button>
        </form>
    </center>
</body>    
</html>

<?php
    function viewall(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM carinfo order by id";
        $result = $conn -> query($sql);

        if($result->num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "
                    <tr>
                        <td class='text-center' style='font-size: x-large;'>$row[id]</td>
                        <td class='text-center' style='font-size: x-large;'>$row[carname]</td>
                        <td class='text-center' style='font-size: x-large;'>$row[carmodel]</td>
                        <td class='text-center' style='font-size: x-large;'>$row[caryear]</td>
                        <td class='text-center' style='font-size: x-large;'>$row[color]</td>
                        <td class='text-center'>
                            <img src='uploads/$row[pic]' width='100' height='75' alt='$row[pic]'>
                        </td>
                        <td class='text-center' style='font-size: x-large;'>
                            <a href='edit.php?id=$row[id]'><span class='glyphicon glyphicon-pencil'></a>
                            <a href='controller.php?id=$row[id]&pic=[pic]'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                ";
            }
        }else{
            echo "
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }
        $conn->close();
    }
?>