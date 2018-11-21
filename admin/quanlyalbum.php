<?php 
require_once ("dao/album.php");
require_once ("dao/dichvu.php");
$dsdv = dichvu_select_all();

if (isset($_POST['submit'])) {
  $tenalb = $_POST['tenalb'];
  $ma_dv = $_POST['madv'];


  $img_album = $_FILES['imgalb']['name'];
    if(!empty($img_album)) {
      $tmp = $_FILES['imgalb']['tmp_name'];
      $img_album  = time().$img_album; // noi ten anh 
      $new_path = "./view/assets/upload/".$img_album;

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
  album_insert($tenalb,$ma_dv,$img_album);
}

// xóa album

if(isset($_GET['del'])) {
  $id = $_GET['id'];
  album_delete($id);
}

// update album
if(isset($_POST['updateblb'])) {
  $tenalbum = $_POST['tenalb'];
  $madv = $_POST['madv'];
  $img_album = $_FILES['imgalb']['name'];
    if(!empty($img_album)) {
      $tmp = $_FILES['imgalb']['tmp_name'];
      $img_album  = time().$img_album; // noi ten anh 
      $new_path = "./view/assets/upload/".$img_album;

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
  
  $new_path = "./view/assets/upload/".$img_album;
  if(is_file($new_path)){
    $new_path="<img src='$new_path' width=150>";
  }else{
    $new_path="no data";
  }
  $maalb = $_POST['maalb'];
  album_update($tenalbum,$madv,$img_album,$maalb);
}

?>
   
      
   <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Quản Lý </strong> Album
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <?php
                            if(isset($_GET['update'])&& isset($_GET['id'])) {
                              $id_update = $_GET['id'];
                              $chi_tiet_update = ablum_select_by_id($id_update);
                              extract($chi_tiet_update);
                              $new_path = "./view/assets/upload/".$img_album;
                                if(is_file($new_path)){
                                  $new_path="<img src='$new_path' width=150 height=150>";
                                }else{
                                  $new_path="no data";
                                }
                            
                          ?>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Album</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tenalb" placeholder="Tên album" value="<?php echo $tenalb; ?>" class="form-control"><small class="form-text text-muted"></small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chon Hình Album</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="imgalb" class="form-control-file"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình Album</label></div>
                          <?php echo $new_path; ?>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class="  form-control-label">Mã Dịch Vụ</label></div>
                            <div class="col-12 col-md-9">
                              <select name="madv" id="select" class="form-control">
                              <?php 
                               $dsdv = dichvu_select_all();
                              foreach ($dsdv as $dsdv ) {
                                extract($dsdv);
                                echo "<option value='".$madv."'> ".$tendv."</option>";
                              }
                              ?>
                              
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            
                            <div class="col-12 col-md-9"><input type="hidden" id="file-input" value="<?php echo $maalb; ?>" name="maalb" class="form-control-file"></div>
                          </div>
                          <div class="card-footer">
                        <button type="submit" name="updateblb" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    <?php } else { ?>
                      <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Album</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tenalb" placeholder="Tên album" class="form-control"><small class="form-text text-muted">Nhập tên album</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình Album</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="imgalb" class="form-control-file"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Mã Dịch Vụ</label></div>
                            <div class="col-12 col-md-9">
                              <select name="madv" id="select" class="form-control">
                              <?php 
                               $dsdv = dichvu_select_all();
                              foreach ($dsdv as $dsdv ) {
                                extract($dsdv);
                                echo "<option value='".$madv."'> ".$tendv."</option>";
                              }
                              ?>
                              
                              </select>
                            </div>
                          </div>
                          <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                            <?php } ?>
                        </form>
                      </div>
                    
                    </div>
                    </div>
        
       
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bảng quản lý album</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                 
                                  <th scope="col">STT</th>
                                  <th scope="col">Tên Album</th>
                                  <th scope="col">Hinh album</th>
                                  <th scope="col">Mã Dịch Vụ</th>
                                  <th scope="col">Sửa</th>
                                  <th scope="col">Xóa</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                              $dsalb = album_select_all();
                              $i = 0;
                              foreach ($dsalb as $dsalb) {
                                extract($dsalb);
                                $xoa = "<a href='?ad_home&id=$maalb&del=1'>Xóa</a>";
                                $update = "<a href='?ad_home&id=$maalb&update=1'>Sửa</a>";
                                $new_path = "./view/assets/upload/".$img_album;
                                if(is_file($new_path)){
                                  $new_path="<img src='$new_path' width=150>";
                                }else{
                                  $new_path="no data";
                                }
                                $i+=1;
                                echo ' <tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$tenalb.'</td>
                                <td>'.$new_path.'</td>
                                <td>'.$madv.'</td>
                                <td><a href="">'.$update.'</a></td>
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

