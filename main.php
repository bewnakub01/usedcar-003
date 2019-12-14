
<div class="row">

    <div class="col-lg-12">
    
        <h1 class="page-header">Welcome to Soi 5 Used Cars</h1>
        
    </div>
</div>
<br>

<br>
<!-- ... Your content goes here ... -->
<div class="btttt">
        <a href="addproduct.php" class="btn btn-success">Add to basket </a>
        </div>
        <br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img src="https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?cs=srgb&dl=white-mercedes-benz-cars-120049.jpg&fm=jpg" alt="" style="width:100%">
            </div>

            <div class="item">
            <img src="https://images.pexels.com/photos/337909/pexels-photo-337909.jpeg?cs=srgb&dl=auto-automobiles-automotive-337909.jpg&fm=jpg" alt="" style="width:100%">
            </div>

            <div class="item">
            <img src="https://images.pexels.com/photos/1149137/pexels-photo-1149137.jpeg?cs=srgb&dl=4k-wallpaper-automobile-automotive-1149137.jpg&fm=jpg" alt="" style="width:100%">
            </div>
            
        </div>
       
        <br>
        
        <?php
            $sql = "SELECT * FROM car ORDER BY id";
            $result = $con->query($sql);
                    if(!$result){
                        echo "ERror";
                    }
                    else{
                //ดึงข้อมูล
                while($prd=$result->fetch_object()){
                    //$prd->id; //$prd["id"];
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                    <a href="productdetail.php?pid=<?php echo $prd->id; ?>">
                        <img src="img/<?php echo $prd->carpic; ?>" alt="">
                    </a>
                        <div class="caption">
                            <h3><?php echo $prd->model; ?></h3>
                                <p>brand : <?php echo $prd->brand; ?></p>
                                <p>carType : <?php echo $prd->carType; ?></p>
                                <p>color : <?php echo $prd->color; ?></p>
                                <p>license : <?php echo $prd->license; ?></p>
                                <p>province : <?php echo $prd->province; ?></p>
                                <p>modelYear : <?php echo $prd->modelYear; ?></p>
                                <p>postedBy : <?php echo $prd->postedBy; ?></p>
                                <p>postedDate : <?php echo $prd->postedDate; ?></p>
                                <p>
                                    <strong>Price: <?php echo $prd->price ?></strong>
                                </p>
                                <p>
                                  
                                    <a href="editproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-waring"> 
                                        <i class="glyphicon glyphicon-pencil"></i> Edit
                                    </a>
                                    <a href="deleteproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-danger lnkDelete"> 
                                        <i class="glyphicon glyphicon-trash"></i> Delent
                                    </a>
                                </p>
                        </div>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>