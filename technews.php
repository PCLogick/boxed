  <!doctype html>
<html lang="en-gb">
<!--<![endif]-->
<head>

    <title>Techport Solutions - Tech News</title>
    <?php include("includes/head.php") ?>

</head>

<body>
          <?php $page = "technews"; ?>
          <?php include("includes/navbar.php"); ?>

  <div class="clearfix"></div>
  <div class="header_medium two">
    <div class="container">
      <h3 class="bigtext"> Tech <span>News</span></h3>
      <h3 class="smalltext"><span>Get 7+</span> Unique Layouts</h3>
    </div>
  </div>
  <!--end header medium-->
  
  <div class="section_holder18">
    <div class="container">
      <div class="pagetitle">
        <h3>Blog Full Width</h3>
      </div>
      <div class="pagenation">&nbsp;<a href="index.html">Home</a> <i>/</i> <a href="#">Blog</a> <i>/</i> Blog Full Width</div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>

  <div class="section_holder28">
    <div class="container">

      <?php
        require 'includes/sqlconnect.php';
        mysql_select_db("test", $con);

        $sql = "SELECT ID, title, article, author, date_submitted FROM news ORDER BY ID DESC LIMIT 3";

        $myData = mysql_query($sql, $con);

        while($news = mysql_fetch_array($myData)){
        ?>

        <div class="post_holder">
        <div class="date"> <span>
        <?php echo date("d", strtotime($news['date_submitted'])) . '</span>' . 
                   date("F", strtotime($news['date_submitted'])) . ' ' . 
                   date("Y", strtotime($news['date_submitted']))  ?> </div>
        <!-- <div class="date comments"> <span>15</span>Comments </div> -->
        <div class="post_img">
          <div class="hover_box">
            <div class="box_inner"> <a href="#">
              <div class="icon"><i class="fa fa-search"></i></div>
              </a> <a href="#">
              <div class="icon last"><i class="fa fa-link"></i></div>
              </a> </div>
          </div>
          <img src="http://placehold.it/1170x550" alt="" class="img_size1"/> </div>
        <div class="clearfix"></div><br/>
        
        <a href="#">
        <h2 class="uppercase padd_top2"><?php echo $news['title'] ?></h2>
        </a>
        <p><?php 
            $first150Chars = substr($news['article'], 0, 150);
            echo $first150Chars;
            ?></p><br/>
        <a class="readmore_but5" href="#">Read more</a> 
      </div>
      <div class="divider_line"></div>

      <?php

        }
      ?>


      
      <!--end item-->
      
      
      
      
     
      
      
      
      <div class="double_line"></div>
      <div class="pagenation_bottom"> <a class="next_prv" href="#"><i class="fa fa-long-arrow-left"></i> Previous </a> <a class="next_prv" href="#">Next <i class="fa fa-long-arrow-right"></i></a>
        <ul class="page_number">
          <li><a href="#">5</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">3</a></li>
          <li><a class="active" href="#">2</a></li>
          <li><a href="#">1</a></li>
        </ul>
      </div>
      <div class="double_line"></div>
      
    </div>
  </div>
  <!--end section 22-->

  <?php include("includes/footer.php"); ?>
<!--end sitewraper--> 

 <?php include("includes/jsscripts.php") ?>
</body>
</html>
