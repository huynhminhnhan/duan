<?php
require_once "dao/dichvu.php";
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
       

        <!-- <div class="carousel-inner">
            <div class="item active">
                <img src="assets/img/bnsv1.jpeg" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="assets/img/bnsv1.jpeg" alt="Chicago">
            </div>

            <div class="item">
                <img src="assets/img/bnsv1.jpeg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
        <!-- Slide-Close -->

        <!-- menu-con start -->
        <div class="container">
            <div class="menu-con">
                <ul>
                    <li><a class="active" href="#home">Chụp Ảnh Cưới</a></li>
                    <li><a href="#news">Ảnh Ngoại Cảnh</a></li>
                    <li><a href="#contact">Make-Up</a></li>
                    <li><a href="#about">Trọn Gói</a></li>
                </ul>
            </div>
        </div>    
            <!-- Thông tin dịch vụ start -->
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php
                         $id = $_GET['madv'];
                         $dsdv = dichvu_select_all_by_madv($id);
                         extract($dsdv);
                            
                        echo '<h2>'.$tendv.' </h2>'?>
                        <span class="uudai" style="color:#c00000">ƯU ĐÃI VÀNG&nbsp;T11/2018- DÀNH TẶNG 99&nbsp;CẶP ĐÔI
                            ĐĂNG KÝ
                            SỚM
                            NHẤT&nbsp;&nbsp;</span>
                        <div class="textcuoitrongoi"><?php echo $mo_ta; ?></div>
                       <?php 
                       $new_path = "./view/assets/upload/".$hinh;
                       if(is_file($new_path)){
                        $new_path="<img class='jmgmin' src='$new_path' width=100% height=auto>";
                      }else{
                        $new_path="no data";
                      }
                      echo $new_path;
                       ?>
                        <!-- <img src="/assets/img/cuong1.jpeg" alt="" style="width:860px;height: auto;margin-bottom: 4px;">
                        <img src="/assets/img/cuong2.jpeg" alt="" style="width:860px;height: auto;margin-bottom: 4px;"> -->

                    </div>
                    <?php require_once 'sidebar.php' ?>
                        

                    </div>
                </div>
            </div>





            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        </div>
        <!-- Thông tin dịch vụ close -->
    </div>
    <!-- menu-con close -->

    <!-- Bảng giá start-->
    <!-- Chat-Box Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Bảng Giá Dịch Vụ</h2>
                <table border="1" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="background:white; border-collapse:collapse; border:none; mso-border-alt:solid #dddddd .75pt; mso-padding-alt:0in 0in 0in 0in; mso-yfti-tbllook:1184">
                    <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark" style="background-color: #212529;color: #fff;border-color: #32383e;">
                                <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col"> Ma Dịch Vụ</th>
                                  <th scope="col">Tên Dịch Vụ</th>
                                 
                                  <th scope="col">Đơn Giá</th>
                                  <th scope="col">Giảm Giá</th>
                                  <th scope="col">Hình</th>
                                  <th scope="col">Mô Tả</th>
                                  <th scope="col">so luot xem</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                              $dsdv = dichvu_select_all();
                              $i= 0;
                              foreach ($dsdv as $dsdv) {
                                $i+=1;
                                extract($dsdv);
                                $xoa = "<a href='?qldv&id=$madv&del=1'>Xóa</a>";
					  	                 // $update = "<a href='?loai&id=$madv&update=1'>update</a>";
                                $new_path = "./view/assets/upload/".$hinh;
                                if(is_file($new_path)){
                                  $new_path="<img src='$new_path' width=150>";
                                }else{
                                  $new_path="no data";
                                }
                                echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$madv.'</td>
                                <td>'.$tendv.'</td>
                                
                                <td>'.$don_gia.'</td>
                                <td>'.$giam_gia.'</td>
                                <td>'.$new_path.'</td>
                                <td>'.$mo_ta.'</td>
                                <td>'.$so_luot_xem.'</td>
                              </tr>';
                              }
                              ?>
                               
                               
                              </tbody>
                            </table>
                        </div>
                </table>
            </div>
        </div>
    </div>