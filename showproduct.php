
<?php
    session_start();
    if(isset($_GET['cat'])){
        $category = $_GET['cat'];
    }
    else{
        header("Location: index.php");
    }
    include("connect.php");
    $sql = "SELECT * FROM car WHERE carType=$carType";
    $result = $con->query($sql);
    if(!$result){
        echo "Error: " . $con->error;
    }
    else{
        if($result->num_rows>0){
            $prd = $result->fetch_object();
        }
        else{
            $prd = NULL;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soi5 Used Cars</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Soi 5 Used Cars</a>
        </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    if(isset($_SESSION['id'])){
                    ?>

                    <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i>
                        Welcome <?php echo $_SESSION['name'] ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Shop</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    </li>
                    <li>
                    
                        <a href="#">
                            <i class="glyphicon glyphicon-shopping-cart"></i> (0)
                        </a>
                    </li>
                    
                    <?php
                    }
                    else{
                    ?>

                    <li><a href="login.php">Login</a></li>
                    <li><a href="Register.php">Sign in</a></li>

                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
        
    </nav>
    <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="text-center">
                        <a href="#s">รถยนต์ของเรา</a>
                    </li>
                    <li>
                        <a href="showproduct.php?" class="active"><i class="fa fa-car fa-fw"></i> รถทุกประเภท</a>
                    </li>
                    <li>
                        <a href="showproduct.php?cat=1" class="active"><i class="fa fa-car fa-fw"></i> รถเก๋ง</a>
                    </li>
                    <li>
                        <a href="showproduct.php?cat=2" class="active"><i class="fa fa-truck fa-fw"></i> รถกระบะ</a>
                    </li>
                    <li>
                        <a href="showproduct.php?cat=3" class="active"><i class="fa fa-truck fa-fw"></i> รถตู้</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
                  
        
                
        <?php
            $sql = "SELECT * FROM product WHERE category=$category";
            $result = $con->query($sql);

                //ดึงข้อมูล
                while($prd=$result->fetch_object()){
                    //$prd->id; //$prd["id"];
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                    <a href="productdetail.php?pid=<?php echo $prd->id; ?>">
                        <img src="img/product/<?php echo $prd->picture; ?>" alt="">
                    </a>
                        <div class="caption">
                            <h3><?php echo $prd->name; ?></h3>
                                <p><?php echo $prd->description; ?></p>
                                <p>
                                    <strong>Price: <?php echo $prd->price ?></strong>
                                </p>
                                <p>
                                    <a href="#" class="btn btn-success">Add to basket</a>
                                </p>
                        </div>
                    </div>
                </div>
            <?php
                }
            
            ?>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
        
                
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>