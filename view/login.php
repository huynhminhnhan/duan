
<?php 
   require_once 'dao/khachhang.php';
if(isset($_POST['signin'])) {
  
        $emailuser = $_POST['email'];
        $pass = $_POST['password'];
        $check_login = client_login($emailuser,$pass);
        if (is_array($check_login)) {
            extract($check_login);
            $_SESSION['makh'] = $makh;
            $_SESSION['hoten'] = $hoten; 
            $_SESSION['hinh'] = $hinh; 
            $_SESSION['hinh'] =  $new_path = "./view/assets/upload/".$hinh;
            if(is_file($new_path)){
              $new_path="<img src='$new_path' width=50px height=50px >";
            }else{
              $new_path="no data";
            }
            echo '<script>
           
                window.location.assign("index.php")
           
            </script>';

            
        }
        else {
          
            echo'
			sai ten dang nhap hoac mat khau';
        }
    

}
?>