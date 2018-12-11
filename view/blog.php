<?php
require_once "dao/blog.php";

?>
<section class="about n_blog"> 
            <div class="container">
                <div class="main-title-section">
                    <h1 >BLOG</h1>
                </div>
                <div class="breadcrumb">
                    <a href="index.html">Home</a>
                    <span >/</span>
                    <a class="brb" href="about.html">Blog</a>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="bloghear">
                        <div class="bloghea-r">
                            <h2>BLOG</h2>
                        </div>
                             <!-- END BLOG R  -->
                        <div class="bloghea-l">
                            <ul>
                                <li>
                                    <a href="index.html">Trang Chu</a>
                                </li>
                                <li>/</li>
                                <li><a href="blog.html">Tin Tuc</a></li>
                            </ul>
                        </div>
                             <!-- END BLOG L  -->
                    </div>
                     <!-- END BLOG h  -->
                </div>
            
                <div class="row">
                    <div class="col-md-9 detailblog" >
                        <div class="row cuonglol">
                            <div class="taitel">
                                <h1><?php 
                                $dsblog = blog_select_all();
                                $tenbl =$dsblog[0]['tenloaiblog'];
                            // print_r ($tenbll[0].['tenloaiblog']) ;
                               echo $tenbl;
                                ?>
                                </h1>
                            </div>
                            <div class="col-md-4 text-left mb-3">
                               <a href="#"><img  src="view/assets/img/x1.jpg" alt=""></a>
                               <a href="#"><h4>THÔNG BÁO LỊCH NGHỈ TẾT KỶ HỢI</h4></a>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                            <!-- END COL -->

                            <div class="col-md-4 text-left mb-3" >
                                <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                                <a href="#"><h4>KÝ SỰ CHỤP ẢNH CƯỚI</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                              <!-- END COL -->
                            <div class="col-md-4 text-left mb-3">
                                <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                                <a href="#"><h4>LƯU GIỮ NHƯNG KHOẢNG KHẮC NGỌT NGÀO CCC</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                              <!-- END COL -->
                              </div>
                              <div>
                              <a href="#">Xem Thêm ... </a>
                              </div>
                              <hr>
                              <div class="row cuonglol">
                                <div class="taitel">
                                <h1><?php
                               $dsblog = blog_select_all();
                               $tenbl =$dsblog[1]['tenloaiblog'];
                           // print_r ($tenbll[0].['tenloaiblog']) ;
                              echo $tenbl;
                               ?></h1>
                            </div>
                            <div class="col-md-4 text-left mb-3">
                               <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                               <a href="#"><h4>CÂU CHUYỆN TÌNH YÊU</h4></a>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>

                            </div>
                              <!-- END COL -->

                            <div class="col-md-4 text-left mb-3">
                                <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                                <a href="#"><h4>BẢN GIAO HƯỞNG TÌNH YÊU CỦA CÁC CAP DOI</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                              <!-- END COL -->
                            <div class="col-md-4 text-left mb-3">
                                <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                                <a href="#"><h4>CÂU CHUYỆN TÌNH YÊU THƠ MỌNG</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                              <!-- END COL -->
                              </div>
                              <div>
                              <a href="#">Xem Thêm ... </a>
                              </div>
                              
                              <hr>
                              <div class="row cuonglol">
                                <div class="taitel">
                                <h1>
                                <h1><?php
                               $dsblog = blog_select_all();
                               $tenbl =$dsblog[2]['tenloaiblog'];
                            // print_r ($tenbll[0].['tenloaiblog']) ;
                              echo $tenbl;
                               ?></h1>
                                </h1>
                            </div>
                            <div class="col-md-4 text-left mb-3">
                                <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                                <a href="#"><h4>HÀNH TRÌNH ĐỂ CÓ NHỮNG BỨC ẢNH ĐẸP</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                              <!-- END COL -->
                            <div class="col-md-4 text-left mb-3">
                                <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                                <a href="#"><h4>BẢY BÍ QUYẾT CHỌN PHONG CÁCH CỦA ALBUM</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                              <!-- END COL -->
                            <div class="col-md-4 text-left mb-3">
                                <a href="#"><img src="view/assets/img/x1.jpg" alt=""></a>
                                <a href="#"><h4>ĐỊA ĐIỂM CHỤP NGOẠI CẢNH Ở TP HCM</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos veritatis id ipsam cupiditate, vel, obcaecati esse dolores dicta, ducimus accusamus quisquam amet.</p>
                            </div>
                            
                              <!-- END COL -->
                              

                        </div>
                        <div>
                              <a href="#">Xem Thêm ... </a>
                              </div>
                        

                          <!-- END detailblon-con-oneL -->
                    </div>
                       <!--  END COL 9  -->

                      <?php require_once 'sidebar.php' ?>
                        
                   <!--  END COL 3  -->
            </div>
            <!-- END ROW  -->
        </div>
        <!-- END CONTAINER  -->

                    
     
        </section>
