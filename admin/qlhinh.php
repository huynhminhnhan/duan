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
  $hinh = $_FILES['hinh']['name'];
    if(!empty($hinh)) { 
      $tmp = $_FILES['hinh']['tmp_name'];
      $hinh  = time().$hinh; // noi ten anh 
      $new_path = "./view/assets/upload/".$hinh;

      if (!move_uploaded_file($tmp,$new_path)) {
        $error = " upload that bai ";
      }
      else {
        move_uploaded_file($tmp,$new_path);
      }
    
    }
    else {
     $error = " Anh khong duoc de trong ";
    }
   
    hinh_insert($hinh,$ma_kh,$maalb);
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
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="hinh" multiple class="form-control-file"></div>
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
                                  $xoa = "<a href='?qlhinh&id=$mahinh&del=1'>Xóa</a>";
                                   $new_path = "./view/assets/upload/".$hinh;
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

