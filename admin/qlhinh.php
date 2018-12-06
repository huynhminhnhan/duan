<?php
require_once ('dao/hinh.php');
require_once ('dao/khachhang.php');
$dskh = kh_select_all();

require_once ('dao/album.php');
$dsalb = album_select_all();
if (isset($_POST['submit'])) {
  $ma_kh = $_POST['khachhang'];
  $maalb = $_POST['alb'];
  /* $hinh1 = array();
  $dem = 0 ;
 while ($_FILES['hinh']['name'][$dem]!= null)  {
   $hinh1[$dem] = $_FILES['hinh']['name'][$dem];
  
  
   
   $hinh  = time().$hinh1[$dem]; 
   print_r (explode(".",$hinh));
   $dem++;
 } */
  $hinh = $_FILES['hinh'];
  if(isset($hinh))
  {
     // $img_desc = reArrayFiles($img);
      //print_r($img_desc);
      $type_img = array("PNG","png","jpg","JPG","jpeg","JPEG","GIF","gif");
      for ($i = 0 ; $i<count($hinh["name"]); $i++) {
          $taget_file = "./view/assets/upload/".basename($hinh["name"][$i]);
          $upload_erro  = 0;
          $img_type_file = pathinfo($taget_file,PATHINFO_EXTENSION);
          $new_path = $hinh["tmp_name"][$i].$taget_file;
          if(!in_array($img_type_file,$type_img)) {
              echo "vui long chon file jpg , png , jpeg , gif";
              $upload_erro  = 0;
          }
         else {
          $upload_erro  = 1;
         }
         // echo $img["name"][$i]."<br>";
          if ($upload_erro == 0) {
              echo "Sorry ! your file can not upload";
          }
          else {
              move_uploaded_file($hinh["tmp_name"][$i],$taget_file);
             // echo "your file ".basename($new_path)."was upload"."<br>";
          }
          
           
          $name_arr_img =  implode("+",($hinh["name"]));
           
          
      }
  
    
      
     // echo $name_arr_img;
      
  }
   
    hinh_insert($name_arr_img,$ma_kh,$maalb);
}
if (isset($_GET['del'])) {
  $id = $_GET['id'];
  hinh_delete($id);
}
?>

   <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Quản Lý </strong> Hình
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Mã Khách Hàng</label></div>
                            <div class="col-12 col-md-9">
                              <select name="khachhang" id="select" class="form-control">
                               <?php 
                              
                               foreach ($dskh as $dskh) {
                                 extract($dskh);
                                 echo ' <option value="'.$makh.'">'.$hoten.'</option>';
                               }
                               ?>
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Mã Album</label></div>
                            <div class="col-12 col-md-9">
                              <select name="alb" id="select" class="form-control">
                             
                                <?php 
                               
                                foreach ($dsalb as $dsalb) {
                                  extract($dsalb);
                                  echo ' <option value="'.$maalb.'">'.$tenalb.'</option>';
                                }
                                ?>
                                
                                
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ALbum</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="hinh[]" multiple class="form-control-file"></div>
                          </div>
                          
                          <div class="card-footer">
                        <button name="submit" type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                      
                        </form>
                      </div>
                    
                    </div>
                    </div>
        
       
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bảng quản quản lý Hình theo mã kh</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                 
                                  <th scope="col">STT</th>
                                  <th scope="col">Tên Khách Hàng</th>
                                  <th scope="col">Tên Album</th>
                                  <th scope="col">Hình của kh trong album</th>
                                 
                                  <th scope="col">Sửa</th>
                                  <th scope="col">Xóa</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $dshinh = hinh_select_all();
                                
                                $i=0;
                                foreach ($dshinh as $dshinh ) {
                                  $i+=1;
                                  extract($dshinh);
                                  $ex_hinh = explode("+",$hinh);
                                  foreach ($ex_hinh as $key=>$value) {
                                     
                                  $xoa = "<a href='?qlhinh&id=$mahinh&del=1'>Xóa</a>";
                                   $new_path = "./view/assets/upload/".$value;
                                   if(is_file($new_path)){
                                     $new_path="<img src='$new_path' width=150>";
                                   }else{
                                     $new_path="no data";
                                   }

                                  echo '  <tr>
                                  <th scope="row">'.$i.'</th>
                                  <td>'.$makh.'</td>
                                  
                                  <td>'.$maalb.'</td>
                                  <td>'.$new_path.'</td>
                                  <td><a href="">Sửa</a></td>
                                  <td><a href="">'.$xoa.'</a></td>
                                </tr>';
                                  }
                                }
                                
                                ?>
                              
                               
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
               
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->




    <!-- Right Panel -->

