<!DOCTYPE html>
<html>
<head>
    <title>Car Information | Insert</title>
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
        <h1>Add New Car</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                    <table class="table text-center">
                        <tr>
                            <th>Car Name</ht>
                            <td><input type="text" name="txtname" class="form-control" style="width: 500px;"></td>
                        </tr>
                        <tr>
                            <th>Model</ht>
                            <td><input type="text" name="txtmodel" class="form-control" style="width: 500px;"></td>
                        </tr>
                        <tr>
                            <th>Year</ht>
                            <td><input type="text" name="txtyear" class="form-control" style="width: 500px;"></td>
                        </tr>
                        <tr>
                            <th>Color</ht>
                            <td><input type="text" name="txtcolor" class="form-control" style="width: 500px;"></td>
                        </tr>
                        <tr>
                            <th>Image</ht>
                            <td><input type="file" name="txtpic" class="form-control-file" style="width: 230px;"></td>
                        </tr>
                    </table>   
            </div> 
            <br/>
            <br/>   
            <button type="submit" name="save_record" class="btn btn-primary">Save Record</button>
        </form>
    </center>
</body>  
</html>