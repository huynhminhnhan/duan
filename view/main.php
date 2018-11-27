

<div id="home-slider">
    <div class="slider-item">
        <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg"/>
    
      <div class="slider-content">

        <div class="container">
          <div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>
        </div>

      </div>
      <a href="">
      <div class="content-slider">
        <h3>Chụp Hình Cưới <span> Chuyên Nghiệp </span></h3>
        <hr>
        <h1>Giảm đến <span>20% </span>  </h1>
        
        <hr>
      </div>
      </a>
    </div>
    <div class="slider-item"><img src="https://images.pexels.com/photos/169198/pexels-photo-169198.jpeg"/>
      <div class="slider-content">
        <div class="container">

          <div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>
        </div>
      </div>
      <a href="">
      <div class="content-slider t1">
        <h3>Chụp Hình Cưới <span> Chuyên Nghiệp </span></h3>
        <hr>
        <h1>Giảm đến <span>20 </span> % </h1>
        <hr>
      </div>
      </a>
    </div>
    <div class="slider-item"><img src="https://images.pexels.com/photos/169198/pexels-photo-169198.jpeg"/>
      <div class="slider-content">
        <div class="container">

          <div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>
        </div>
      </div>
      <a href="">
      <div class="content-slider t2">
        <h3>Chụp Hình Cưới <span> Chuyên Nghiệp </span></h3>
        <hr>
        <h1>Giảm đến <span>20 </span> % </h1>
        <hr>
      </div>
      </a>
    </div>
   
  </div>


        <div class="row">
        <?php 
        
            require_once ('./dao/album.php');
            $dshinhalb = album_select_all();
            // extract($dshinhalb);

                $new_path = "view/assets/upload/".$dshinhalb[0]['img_album'];
                                   if(is_file($new_path)){
                                     $new_path=$new_path;
                                   }else{
                                     $new_path="no data";
                                   }
                echo '<div class="col-md-6" style="background:url('.$new_path.');height:400px;background-size:100%; background-position:center;">
                <h1 style="font-family:"Alex Brush";text-align:center;"></h1>
            </div> ';
           
            ?>
            
            <div class="col-md-6" style="background:rgb(236,248,249);height:400px;">
                <h1 style="font-family:'Alex Brush';text-align:center;">About me</h1>
                <div style="width:390px;font-family:'Baumans';margin-left:2rem;">
                    <p style="font-size:20px;">Photo grapphy luôn mang đến su hài lòng đến quý khách đảm bảo về nhu cầu
                        luu lại nhung khoảnh khac và nhung kỉ niệm đẹp trong nhung chuyến đi choi hay nhung dip lễ lon.
                        Album photo luôn đi đầu về chat luong lẫn giá cả cho nguoi dùng
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp;Hình ảnh luôn sac
                        nét, trung thuc voi phong cảnh đa dạng, hua hẹn sẽ mang đến su hài long khi khach hàng su dung
                        !</p>
                </div><i class="glyphicon glyphicon-leaf" style="margin-left:70%;"></i>
            </div>
        </div>
    </div>
    
    <div>
        <div class="row">
            <?php 
             require_once ('./dao/hinh.php');
            $dshinhlm = hinh_select_limit();
            foreach ($dshinhlm as $dshinhlm) {
                extract($dshinhlm);
                $new_path = "view/assets/upload/".$hinh;
                                   if(is_file($new_path)){
                                     $new_path=$new_path;
                                   }else{
                                     $new_path="no data";
                                   }
                echo ' <div class="col-md-4" data-bs-hover-animate="pulse" style="height:280px;background:url('.$new_path.');background-size:cover;">
              
            </div>';
            }
            ?>
           
            
       
    </div>
    <div>
      
        
    </div>
    <div style="/*-top:-42px;*/width:100%;z-index:1000;">
        <div class="row" style="background:url(view/assets/img/x4.jpg);">
            <div class="col-md-4" style="height:420px;">
                <h1></h1>
            </div>
            <div class="col-md-4" style="height:420px;align-items:center;">
                <h1 style="font-size:33px;font-family:'Alex Brush';color:rgb(205,81,81);text-align:center;margin-left:1rem;margin-top:19rem;"><strong>"
                        Yêu Là Phải Cưới <br> Cưới là phải đẻ"</strong></h1>
            </div>
            <div class="col-md-4" style="height:420px;">
                <h1></h1>
            </div>
        </div>
    </div>
    
    <div>
        <div class="row">

            <div class="col-md-6" style="height:400px;background-size:cover;background:url(view/assets/img/x6.jpg);">
                <div class="container" id="info-container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 site-form" style="height:300px;">
                            <form id="my-form" style="margin-top:-4rem;float:right;">
                                <h1 style="font-family:'Alex Brush';"><strong><span style="text-decoration: underline;">Let's
                                            talk</span></strong></h1>
                                <div class="form-group"><label class="control-label sr-only" for="firstname">First Name</label></div>
                                <div class="form-group"><label class="control-label sr-only" for="lastname">Last Name</label><input
                                        class="form-control input-sm" type="text" name="Name" placeholder="Name" id="lastname"
                                        style="width:360px;"></div>
                                <div class="form-group"><label class="control-label sr-only" for="phonenumber">Phone
                                        Number</label><input class="form-control input-sm" type="tel" name="email"
                                        required="" placeholder="email" id="phonenumber" style="width:360px;"></div>
                                <div class="form-group"><label class="control-label sr-only" for="email">Email Address</label><input
                                        class="form-control input-sm" type="text" name="Subject" required=""
                                        placeholder="Subject" id="email" style="width:360px;"></div>
                                <div class="form-group"><label class="control-label sr-only" for="messages">Last Name</label><textarea
                                        class="form-control input-sm" rows="8" name="messages" required="" placeholder="Message"
                                        style="width:360px;height:100px;"></textarea></div>
                                <button class="btn btn-default btn-sm" type="submit" id="form-btn" style="background:black;color:rgb(244,238,238);">SEND
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <h1 style="font-family:'Alex Brush';text-align:center;"></h1>
            </div>
            <?php 
            
           
           
            $dshinhlm = hinh_select_limit();
           
                extract($dshinhlm);
                $new_path = "view/assets/upload/".$hinh;
                                   if(is_file($new_path)){
                                     $new_path=$new_path;
                                   }else{
                                     $new_path="no data";
                                   }
                echo '  <div class="col-md-6 h-form" style="background:url('.$new_path.');height:400px;background-size:cover;">
                <h1 >Contact me</h1>
            </div>';
           
            ?>
           
             
        </div>
    </div>