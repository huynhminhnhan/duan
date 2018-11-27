
<?php
         require_once "dao/album.php";
        require 'dao/hinh.php';
       
        ?>
<section class="gallery panel">
    <div class="container text-header">
        <?php
                         
                          $id = $_GET['maalb'];
                         $dsalb = ablum_select_by_id($id);
                         extract($dsalb);
                         echo '  <h1>Bo Anh Cua <span>'.$tenalb.'</span> </h1>';
                        ?>

        <hr>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
        <h4> Cum dolor impedit doloremque doloribus perferendis,!</h4>
    </div>
    <div class="container-fluid full">
        <div class="col-sm-3">
            <h3 class="btn btn-warning" style="float: right;"> Chọn</h3>

        </div>
        <div class="col-sm-9 xamlo">
        <div class="grid">
        <div class="grid-sizer"></div>
            <?php 
                                
                                 $id = $_GET['maalb'];
                                $dshinh = hinh_select_all_by_maablum($id);
                                foreach ($dshinh as $dshinh) {
                                    extract($dshinh);
                                    $new_path = "./view/assets/upload/".$hinh;
                                    if(is_file($new_path)){
                                      $new_path="<img class='jmgmin' src='$new_path' width=100% height=auto>";
                                    }else{
                                      $new_path="no data";
                                    }
                                    echo '<div class="grid-item" data-masonry="{ "itemSelector": ".grid-item", "columnWidth": 200 }">
                                    <a  href="#'.$mahinh.'"    class="lightbox" data-aos="zoom-out-up" data-aos-duration="2000">
                                           '.$new_path.'
                                        </a>
                                     </div>'
                                     ;
                                    
                                }

                              
                                ?>
         </div>
        </div>
    </div>

    </div>

    <?php 
                 $id = $_GET['maalb'];
                 $dshinh = hinh_select_all_by_maablum($id);
               // $hinhzm = hinh_select_all();
                 foreach ($dshinh as $dshinh) {
                     extract($dshinh);
                     $new_path = "./view/assets/upload/".$hinh;
                     if(is_file($new_path)){
                       $new_path="<img class='jmgmin' src='$new_path' width=100% height=auto>";
                     }else{
                       $new_path="no data";
                     }
                     echo '<div class="lightbox-target"  id="'.$mahinh.'">
                            '.$new_path.'
                     <a  class="lightbox-close" href="#page"></a>
                 </div>
              ';
                 }
                ?>

    </div>
</section>