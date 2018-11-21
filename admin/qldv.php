
    <!-- Left Panel -->

    <!-- Right Panel -->

  <?php 
  require_once("dao/dichvu.php");
  
  if(isset($_POST['submit'])){
    $tendv = $_POST['tendv'];
    $don_gia = $_POST['dongia'];
    $giam_gia = $_POST['giamgia'];
    $hinh = $_FILES['img']['name'];
    if(!empty($hinh)) {
      $tmp = $_FILES['img']['tmp_name'];
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

    $mo_ta = $_POST['mota'];
    $so_luot_xem = $_POST['soluotxem'];
    dichvu_insert($tendv,$don_gia,$giam_gia,$hinh,$mo_ta,$so_luot_xem);
    
    
  }

  // xóa 
  if (isset($_GET['del'])) {
    $id = $_GET['id'];
    dichvu_delete($id);
  }
  ?>
      
      
   <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Quản Lý </strong> Dịch Vụ
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên DịcH Vụ</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tendv" placeholder="Tên Dịch Vụ" class="form-control"><small class="form-text text-muted">Nhập tên Dịch Vụ</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Đơn giá</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="dongia" placeholder="Đơn giá" class="form-control"><small class="form-text text-muted">Nhập Đơn Giá</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giảm Giá</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="giamgia" placeholder="Giảm giá " class="form-control"><small class="form-text text-muted">Nhập Giảm giá (có hoặc không cũng không sao)</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="img" class="form-control-file"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mô Tả</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="mota" placeholder="Mô Tả" class="form-control"><small class="form-text text-muted">Nhập Mô tả dịch vụ</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"> So luot xem </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="soluotxem" placeholder="so luot xem" class="form-control"><small class="form-text text-muted">Nhập Mô tả dịch vụ</small></div>
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
                            <strong class="card-title">Bảng quản lý Dịch Vụ</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col"> Ma Dịch Vụ</th>
                                  <th scope="col">Tên Dịch Vụ</th>
                                  <th scope="col">Đơn Giá</th>
                                  <th scope="col">Giảm Giá</th>
                                  <th scope="col">Hình</th>
                                  <th scope="col">Mô Tả</th>
                                  <th scope="col">so luot xem</th>
                                  <th scope="col">Sửa</th>
                                  <th scope="col">Xóa</th>
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

