
    <!-- Left Panel -->

    <!-- Right Panel -->

   
      <?php 
      require 'dao/khachhang.php';

      if (isset($_POST['submit'])) {
        $hoten = $_POST['name'];
        $matkhau = $_POST['pass'];
       
         if(isset($_POST['kichhoat'])) {
          $kichhoat = 1;
         }
           else {
            $kichhoat = 0;
           }
        $hinh = $_FILES['avatar']['name'];
          if(!empty($hinh)) {
            $tmp = $_FILES['avatar']['tmp_name'];
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
          $email = $_POST['email'];
          kh_insert($hoten,$matkhau,$kichhoat,$hinh,$email);
      }
      if (isset($_GET['del'])) {
        $id = $_GET['id'];
        kh_delete($id);
      }
      ?>
   <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Quản Lý </strong> Khách Hàng
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Khach Hàng</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Tên Khách Hàng" class="form-control"><small class="form-text text-muted">Nhập tên Khách Hàng</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="text-input" name="pass" placeholder="Password" class="form-control"><small class="form-text text-muted">Nhập password</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="Email" class="form-control"><small class="form-text text-muted">Nhập Email</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Avatar</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="avatar" class="form-control-file"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Kích Hoạt</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="kichhoat" value="option1" class="form-check-input">Kich Hoạt
                                  </label>
                                </div>
                               
                              </div>
                            </div>
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
                            <strong class="card-title">Bảng quản lý Khách Hàng</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">STT</th>
                                 
                                  <th scope="col">Tên Khách Hàng</th>
                                  <th scope="col">Password</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Avatar</th>
                                  <th scope="col">Kích Hoạt</th>
                                  <th scope="col">Sửa</th>
                                  <th scope="col">Xóa</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                              $dskh = kh_select_all();
                                 $i=0;
                                 foreach ($dskh as $dskh) {
                                   $i+=1;
                                  
                                   extract($dskh);
                                   $xoa = "<a href='?qlkh&id=$makh&del=1'>Xóa</a>";
                                   $new_path = "./view/assets/upload/".$hinh;
                                   if(is_file($new_path)){
                                     $new_path="<img src='$new_path' width=150>";
                                   }else{
                                     $new_path="no data";
                                   }

                                   echo ' <tr>
                                   <th scope="row">'.$i.'</th>
                                   <td>'.$hoten.'</td>
                                   <td>'.$matkhau.'</td>
                                   <td>'.$email.'</td>
                                   <td>'.$new_path.'</td>
                                   <td>'.$kichhoat.'</td>
                                   <td><a href="">Sửa</a></td>
                                   <td>'.$xoa.'</td>
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

