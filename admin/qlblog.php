
    <!-- Left Panel -->

    <!-- Right Panel -->

  <?php 
  require_once("dao/blog.php");
  
  if(isset($_POST['submit'])){
    $tenloaiblog = $_POST['tenblog'];
    
    $hinh_lb = $_FILES['imglb']['name'];
    if(!empty($hinh_lb)) {
      $tmp = $_FILES['imglb']['tmp_name'];
      $hinh_lb  = time().$hinh_lb; // noi ten anh 
      $new_path = "./view/assets/upload/".$hinh_lb;

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

   
    blog_insert($hinh_lb,$tenloaiblog);
    
    
    if(is_file($new_path)){
      $new_path="<img src= '$new_path' width=150>";
    }else{
      $new_path="no data";
    }
    
  }

  // xóa 
  if (isset($_GET['del'])) {
    $id = $_GET['id'];
    blog_delete($id);
  }
  //update

  ?>
      
      
   <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Quản Lý </strong> Tin Tức
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu Đề Loại Blog</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tenblog" placeholder="Tên Tieu De" class="form-control"><small class="form-text text-muted">Nhập tên Tiêu đề</small></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="imglb" class="form-control-file"></div>
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
                            <strong class="card-title">Bảng quản lý Tin Tức</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col"> Tên loại blog</th>
                                  <th scope="col">Ảnh Loại Blog</th>
                                  
                                  
                                  <th scope="col">Sửa</th>
                                  <th scope="col">Xóa</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                              $dsblog = blog_select_all();
                              $i= 0;
                              foreach ($dsblog as $dsblog) {
                                $i+=1;
                                extract($dsblog);
                                $xoa = "<a href='?qlblog&id=$maloaiblog&del=1'>Xóa</a>";
					  	                 // $update = "<a href='?loai&id=$mablog&update=1'>update</a>";
                               $new_path = "./view/assets/upload/".$hinh_lb;
                               //$exprotHinh = "./view/assets/upload/".$hinh_lb;
                                if(is_file($new_path)){
                                  $new_path="<img src= '$new_path' width=150>";
                                }else{
                                  $new_path="no data";
                                }
                                echo '<tr>
                                <th scope="row">'.$i.'</th>
                                
                                <td>'.$tenloaiblog.'</td>
                                
                                <td>'.$new_path.'</td>
                                
                                <td><a >Sửa</a></td>
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

