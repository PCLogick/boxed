  <!--START FOOTER-->
  <div class="clearfix"></div>
  <div class="footer1 two">
    <div class="container">
      <div class="one_third">
        <h4 class="white">About Tech Port Solutions</h4>
        <div class="footer_title_line"></div>
        <ul class="quick_links">
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="community.php">Community</a></li>
          <li><a href="technews.php">Tech News</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="newsletter">
          <p class="padd_bot1 margin_top1"> Sign up for special offers</p>
          <form method="get" action="index.html">
            <input class="email_input" name="samplees" id="samplees" value="E-mail Address" onFocus="if(this.value == 'E-mail Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'E-mail Address';}" type="text">
            <input name="" value="Submit" class="email_submit two" type="submit">
          </form>
        </div>
      </div>
      <!--end about Tech Port Solutions-->
      
      <div class="one_third">
        <h4 class="white">Latest Tech News</h4>
        <div class="footer_title_line"></div>
        
  <!--News Update PHP/SQL-->
      <?php
      //SQL Variables USED
      //title
      //article
      //author
      //date_submitted

        require('access/sqlconnect.php');

        

        //SELECTS LATEST 3 NEWS UPDATES
        $stmt = "SELECT title, article, author, date_submitted FROM news ORDER BY ID DESC LIMIT 2";


        $myData = mysqli_query($mysqli, $stmt);

        while($news = mysqli_fetch_array($myData)){
        ?>
        <div class="post_holder">
          <div class="img_holder">
            <div class="img"><img src="http://placehold.it/60x60" alt="" class="img_size1"/></div>
          </div>

          <div class="text">
            <a href="#"><span class="bold">
              <!--SELECT TITLE-->
                <?php echo $news['title']; ?>
              </span></a>

              <p>
              <!--SELECT ARTICLE-->
                <?php 
                $first75Chars = substr($news['article'], 0, 75);
                echo $first75Chars . '...' ; ?>
              </p>

            <span class="info">
            <!--SELECT AUTHOR-->
              By <?php echo $news['author'] . 
              ' - ' . 
              //SELECT DATE
              date("d/m/Y", strtotime($news['date_submitted'])) ?></span>

            <div class="newsLine">
            
            </div>
          </div>
        </div> 

      <?php

        }
      ?>        

      </div>
      <!--end products and services-->
      
      <div class="one_third last">
        <h4 class="white">Legal and Help</h4>
        <div class="footer_title_line"></div>
        <ul class="quick_links">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Tech Support</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Legal</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Report Abuse</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Copyright</a></li>
          <li><a href="#">Subpoenas</a></li>
          
        </ul>
      </div>
      <!--end need help--> 
    </div>
  </div>
  <!--end footer-->
  <div class="footer_payment_types">
    <div class="container">
      <ul class="payment_logos">
        <li class="white">Payments <br/> We Accept</li>
        <!-- li><img src="http://placehold.it/50x30" alt=""/></li> -->
        <li><img src="images/media/paypal.jpg" alt=""/></li>
      </ul>     
    </div>
  </div>
  <!--end payment types-->

  <div class="copyrights">
    <div class="container"> 
    <div class="one_half"><span>Copyright © 2014 TechportSolutions.com. All rights reserved.</span></div>
    <div class="one_half last">
    <ul class="social_icons">
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    </ul>
    </div>
    </div>
  </div>
  <!--end copy rights--> 
  
  <a href="#" class="scrollup"></a><!-- end scroll to top of the page--> 
  
</div>
</div>