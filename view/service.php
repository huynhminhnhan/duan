<?php
require_once "./dao/dichvu.php";
?>
<section class="about">
                <div class="container">
                    <div class="row">
                        <div class="main-title-section">
                            <h1>SERVICE</h1>

                        </div>
                        <div class="break-cump">
                            <a class="a-banner" href="index.html">Home</a>
                            <span class="gach"> / </span>
                            <span class="curen">
                                Service
                            </span>
                        </div>
                    </div>
                </div>
            </section>
<section class="service_all">
<div class="container service_gird_con">
        <div class="row">
       
<div  id="sirvice-gird">
<?php
$dsdv = dichvu_select_all();
           
foreach ($dsdv as $dsdv) {
    extract($dsdv);
    $new_path = "./view/assets/upload/".$hinh;
                    if(is_file($new_path)){
                      $new_path="<img src='$new_path' width=100% height=100% >";
                    }else{
                      $new_path="no data";
                    }
    echo '<div class="col-md-4">
    <a href="?dvdetail&madv='.$madv.'" class="gird columns colum">
    <div class="grid-item columns_img">
    <div class="gird_img" width=280px height=276px >
   '.$new_path.'
    <div class="service_gird_desc">
    <h3>'.$tendv.'</h3>
    </div>
    </div>
    
    
    </div>
    </a> 
    </div>
    ';
}
?>

 </div>
</div> <!--  end service gird -->
</div>
</section>
