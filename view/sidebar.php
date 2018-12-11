<?php
require_once "dao/dichvu.php";
require_once 'dao/blog.php';

?>
<div class="col-md-3" id="col-3-menu">
                        <div class="fix-menu">
                            <h3>Dịch Vụ </h3>
                        <ul class="list-group">
                            
                            <?php $dsdv = dichvu_select_all();
           
           foreach ($dsdv as $dsdv) {
               extract($dsdv);
              
                             echo  ' <li class="list-group-item"><a href="?dvdetail&madv='.$madv.'">'.$tendv.'</a></li>';
                            }?>
                        </ul>



                        <h3>Tin Tức Cưới</h3>
                        <ul class="list-group">
                            <li class="list-group-item">Chụp Hình Ngoại Cảnh</li>
                            <?php 
                            $dsblog = blog_select_all();
                            foreach ($dsblog as $dsblog) {
                                extract($dsblog); 
                                echo ' <li class="list-group-item">'.$tenloaiblog.'</li>';
                            }
                           

                         
                            ?> 
                        </ul>
                        </div>
                        