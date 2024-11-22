<?php require "layout/head.php"?>
        

        
        <?php require "layout/aside.php" ?>
        

        <div class="layout-page">
      

          <?php require "layout/navbar.php" ?>

    
          <div class="content-wrapper">
        
                 <?php 
                    require "layout/content.php" ;
                    require_once $VIEW_NAME;
                 ?>
            

            

            <div class="content-backdrop fade"></div>
<?php require "layout/foot.php" ?>
  
          