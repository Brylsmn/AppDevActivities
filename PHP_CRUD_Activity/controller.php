<?php
    session_start();
    include("includes/sqlconnection.php");

    if(isset($_POST['save_record'])){
        $carname = $_POST['txtname'];
        $model = $_POST['txtmodel'];
        $year = $_POST['txtyear'];
        $color = $_POST['txtcolor'];
        $pic = $_FILES['txtpic']['name'];

        $sql = "INSERT INTO carinfo(carname,carmodel,caryear,color,pic)VALUES('$carname','$model','$year','$color','$pic')";

        if($conn->query($sql)===TRUE){
            move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
            $_SESSION['status'] ="Record Inserted Successfully";
            header('location:view.php');
        }else{
            $_SESSION['status'] ="Error: Insert Failed";
            header('location:view.php');
        }
        $conn->close();
    }

    if(isset($_POST['update_record'])){
        $id = $_POST['txtid'];
        $carname = $_POST['txtname'];
        $model = $_POST['txtmodel'];
        $year = $_POST['txtyear'];
        $color = $_POST['txtcolor'];
        $pic_new = $_FILES['txtpic']['name'];
        $pic_old = $_POST['txtpic_old'];
        
        if($pic_new != ''){
            $update_pic = $pic_new;
        }else{
            $update_pic = $pic_old;
        }
        echo "$update_pic";

        $sql = "UPDATE carinfo SET carname='$carname', carmodel='$model', caryear='$year', color='$color', pic='$update_pic' WHERE id='$id'"; 

        if($conn->query($sql)===TRUE){
            move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
            $_SESSION['status'] ="Record Updated Successfully";
            header('location:view.php');
        }else{
            $_SESSION['status'] ="Error: Update Failed";
            header('location:edit.php');
        }
        $conn->close();
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $pic = $_GET['pic'];

        $sql = "DELETE FROM carinfo WHERE id='$id'";

        if($conn->query($sql)===TRUE){
            unlink("uploads/".$pic);
            $_SESSION['status'] ="Record Deleted Successful";
            header('location:view.php');
        }else{
            $_SESSION['status'] ="Deletion Failed";
            header('location:view.php');
        }
        $conn->close();
    }
?>