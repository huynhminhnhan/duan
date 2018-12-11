
<div id="home-slider-container">
<div style="align-items:center;width:100%;background:rgb(254,253,253);">
        <div class="container" style="z-index:10;">
        <?php 
        if (isset($_SESSION['makh'])) {
          echo ' <button class="btn btn-default"
          type="button" style="background:rgb(252,252,252);height:60px;float:right;border-color:rgb(255,254,254);"><i
              class="glyphicon glyphicon-log-in"></i>&nbsp;       <a style="display:inline" href="?dangxuat"><strong>Đăng Xuất</strong> </a> </button>
          <button class="btn btn-default" href="" data-toggle="modal" data-target="#" type="button" style="background:rgb(252,252,252);height:60px;float:right;border-color:rgb(249,249,249);"> <img width"25px" height="25px" style="border-radius:50%;" src="'.$_SESSION['hinh'].'" alt="">&nbsp;<strong> '.$_SESSION['hoten'].' </strong></button>
';

        }
        else {
          echo '<button class="btn btn-default" href="#signup" data-toggle="modal" data-target=".log-sign" type="button" style="background:rgb(252,252,252);height:60px;float:right;border-color:rgb(249,249,249);"><i
          class="glyphicon glyphicon-user"></i>&nbsp;<strong> login / Register  </strong></button>';
        }
        ?>
  
                    
            <div class="dropdown" style="width:200px;"><button class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                    aria-expanded="false" type="button" style="margin-top:1rem;background:inherit;border-color:rgb(249,248,248);"><strong>Language</strong><span
                        class="caret"></span></button>
                        <!-- Modal -->
<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="bs-example bs-example-tabs" style="font-family: cursive;">
            <ul id="myTab" class="nav nav-tabs">
              <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
              <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
              
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
      
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" action="index.php?login" method="POST">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
              
               <div class="group">
<input required="" name="email" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
              
              
            <!-- Password input-->
            <div class="group">
<input required="" name="password" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label>
    </div>
<em>minimum 6 characters</em>

           <div class="forgot-link">
            <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
            </div>
            

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="" name="signin" class="btn btn-primary btn-block login_btn">Log In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
          
          
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">First Name</label></div>
            
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Last Name</label></div>
            
            <!-- Password input-->
            <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email</label></div>
            
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label></div>
              <em>1-8 Characters</em>
            
             
            
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block login_btn">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <!--<div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>-->
    </div>
  </div>
</div>
  
   

<!--modal2-->

<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
        <fieldset>
        <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
        
        
        <div class="control-group">
              <label class="control-label" for="forpassword"></label>
              <div class="controls">
                <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
              </div>
            </div>
          </fieldset>
            </form>
          
      </div>
    </div>
    
  </div>
</div>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="#">Tiếng Việt</a></li>
                    <li role="presentation"><a href="#">English</a></li>
                    <li role="presentation"><a href="#">American</a></li>
                    <li role="presentation"><a href="#">China</a></li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-default" style="z-index:99;background:rgb(251,249,249);width:100%;display:flex;align-items:center;">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand hidden" href="#"> </a><button class="navbar-toggle collapsed"
                        data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav main-nav">
                    <li><a href="?home" class="active"> <button class="btn btn-default navbar-btn" type="button"
                        style="height:40px;width:150px;background:inherit;border-color:black;border-style:inset;">Home</button></a></li>
                   <li><a href="?about"><button
                   
                        class="btn btn-default navbar-btn" type="button" style="height:40px;width:150px;background:inherit;margin-left:1rem;border-color:rgb(251,249,249);">About</button></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><button class="btn btn-default navbar-btn" type="button" style="height:40px;width:150px;background:inherit;margin-left:1rem;border-color:rgb(251,249,249);">Dịch Vụ</button></a>
                      <ul class="dropdown-menu" role="menu">
                      <?php
require './dao/dichvu.php';
$dsdv = dichvu_select_all_lm();
           
foreach ($dsdv as $dsdv) {
    extract($dsdv);
    $new_path = "./view/assets/upload/".$hinh;
                    if(is_file($new_path)){
                      $new_path="<img src='$new_path' width=50% >";
                    }else{
                      $new_path="no data";
                    }
    echo ' <li>
    <a href="?dvdetail&madv='.$madv.'">
      '.$new_path.'
      <h3> '.$tendv.'</h3>
    </a>
  </li>
';
}
?>
                       
                      
                        <li class="block_menu"> <hr style="display:block;background:black;"></li>
                       
                        <li class="block_menu"> 
                          <a href="?dichvu">
                          
                            <h3>Xem tất cả dịch vụ</h3>
                          </a>
                        </li>
                      </ul>
                      </li> 
                       <li><a href="?blog"><button class="btn btn-default navbar-btn" type="button" style="height:40px;width:150px;background:inherit;margin-left:1rem;border-color:rgb(251,249,249);">Blog</button></a></li> 
                       <li><a href="?album"><button

                        class="btn btn-default navbar-btn" type="button" style="height:40px;width:150px;background:inherit;margin-left:1rem;border-color:rgb(251,249,249);">Album</button></a></li>
                       <li><a href="?contact"><button class="btn btn-default navbar-btn" type="button" style="height:40px;width:150px;background:inherit;margin-left:1rem;border-color:rgb(251,249,249);">Contact</button></a></li> 
                    
                    </ul>
                        
                </div>
            </div>
        </nav>
    </div>
    