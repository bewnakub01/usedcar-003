<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

    <?php
        //รับข้อมูลจาก Form Register
        include("connect.php");
        if(isset($_POST['submit'])){ //check is it is posted back
            // รับข้อมูลจาก Form
            $brand = $_POST['brand'];
            $carType = $_POST['carType'];
            $color = $_POST['color'];
            $license = $_POST['license'];
            $province = $_POST['province'];
            $modelYear = $_POST['modelYear'];
            $postedBy = $_POST['postedBy'];
            $postedDate = $_POST['postedDate'];

            //echo "$firstname $lastname $username $password $email";
            //insert to table
            $sqlInsert = "INSERT INTO car (brand, carType, color,license,province,modelYear,postedBy,postedDate,) VALUE('$brand','$carType','$color','$license','$province','$modelYear','$postedBy','$postedDate')";
            //echo $sqlInsert;
            //$mysqli_query
            $result = $con->query($sqlInsert);
            if($result){
                //เมื่อ Register สำเร็จ
                echo "<script> alert('Register Complete'); </script>";
                header("location: login.php");
            }
            else{
                echo "Error during insert: " .$con->error;
            }
        } 
    ?>

    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                        Add Product
                        </div>
                        <div class="panel-body">

        


                        <div class="form-group row">
                                <label for="brand" class="col-md-3">brand : </label>
                                <div class="col-md-9">
                                    <input type="text" name="brand" class="form-control">
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label for="carType" class="col-md-3">carType : </label>
                                <div class="col-md-9">
                                    <input type="int" name="carType" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="color" class="col-md-3">color : </label>
                                <div class="col-md-9">
                                    <input type="text" name="color" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="license" class="col-md-3">license : </label>
                                <div class="col-md-9">
                                    <input type="text" name="license" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="province" class="col-md-3">province : </label>
                                <div class="col-md-9">
                                    <input type="text" name="province" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="modelYear" class="col-md-3">modelYear : </label>
                                <div class="col-md-9">
                                    <input type="int" name="modelYear" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="postedBy" class="col-md-3">postedBy : </label>
                                <div class="col-md-9">
                                    <input type="int" name="postedBy" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="postedDate" class="col-md-3">postedDate : </label>
                                <div class="col-md-9">
                                    <input type="date" name="postedDate" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                        <label for="picture" class="control-label col-md-3">Produce Picture:</label>
                        <div class="col-md-9">
                            <input type="file" name="filepic" class="form-control-file" accept="image/*" >  
                        </div>
                    
                </div>
                        
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-success btn-block" name="submit">Add Product</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>