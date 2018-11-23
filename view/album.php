<?php
require_once "dao/album.php";
?> 
<section class="ablum">
        <div class="container">
            <div class="row text-center">

                <div class="title-ablum">
                    <h1>
                        Client Albums
                    </h1>
                </div>
                <div class="title-des">
                    <p>
                        Impress your clients by easily creating an album site that they'll love.
                    </p>
                </div>

            </div> <!-- end row  -->
            <div class="row text-center">
            <?php 
            $dsalb = album_select_all();
           
            foreach ($dsalb as $dsalb) {
                extract($dsalb);
                $new_path = "./view/assets/upload/".$img_album;
                                if(is_file($new_path)){
                                  $new_path="<img src='$new_path' width=100% height=300px>";
                                }else{
                                  $new_path="no data";
                                }
                echo '<div class="col-sm-4 pd-left">
                <a href="?albumdetail&maalb='.$maalb.'">
                    <div class="boxabl">
                        <div class="img-boxabl">
                           '.$new_path.'
                        </div>

                        <div class="text-boxabl">
                            <h4>
                              '.$tenalb.'
                            </h4>
                            <h4>
                                October 18th, 2018
                            </h4>
                        </div>
                        </div>
                </a>
               
            </div>';
            }
            ?>
                
</div>
        </div>

    </section>