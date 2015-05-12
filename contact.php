<!doctype html>
<html lang="en-gb">
<!--<![endif]-->
<head>

  <title>Techport Solutions</title>
  <?php include("includes/head.php") ?>

  <!-- forms -->
  <link rel="stylesheet" href="js/form/sky-forms.css" type="text/css" media="all">

</head>

<body>
        <?php $page = "contact"; ?>
        <?php include("includes/navbar.php"); ?>

          <div class="clearfix"></div>
  <div class="header_medium two">
    <div class="container">
      <h3 class="bigtext"> Contact <span>Us</span></h3>
      <h3 class="smalltext"><span>Get 7+</span> Unique Layouts</h3>
    </div>
  </div>
  <!--end header medium-->
  
  <div class="section_holder18">
    <div class="container">
      <div class="pagetitle">
        <h3>Contact Us</h3>
      </div>
      <div class="pagenation">&nbsp;<a href="index.html">Home</a> <i>/</i> Contact Us</div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>

  <div class="section_holder30">
    <div class="container"> 
    
      
 <div class="one_half">
        
        <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">
          <h2 class="uppercase"><strong>send us a message</strong></h2>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">Name</label>
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="name" id="name">
                </label>
              </section>
              <section class="col col-6">
                <label class="label">E-mail</label>
                <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                  <input type="email" name="email" id="email">
                </label>
              </section>
            </div>
            <section>
              <label class="label">Subject</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                <input type="text" name="subject" id="subject">
              </label>
            </section>
            <section>
              <label class="label">Message</label>
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea rows="4" name="message" id="message"></textarea>
              </label>
            </section>
            <section>
              <label class="checkbox">
                <input type="checkbox" name="copy" id="copy">
                <i></i>Send a copy to my e-mail address</label>
            </section>
          </fieldset>
          <footer>
            <button type="submit" class="button">Send message</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your message was successfully sent!</p>
          </div>
        </form>
      </div>  
      
<div class="one_half last">
      
        <div class="address_info">
        
          <h3>Contact Information</h3>
          <ul>
            <h6><strong>Techport Prodigy co.</strong></h6>
            Bridgeport, Connecticut<br />
            06606<br />
            <br />
              Telephone: +1 (203)981-5879<br />
              E-mail: <a href="mailto:NicholasAponteIT@gmail.com">NicholasAponteIT@gmail.com</a><br />
              Website: <a href="index.html">www.TechPortProdigy.com</a> </li>
          </ul>
        </div>
        <h3>Find the Address</h3>
        <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=CT,+United+States&amp;aq=0&amp;oq=CT&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Connecticut,Bridgeport&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe>
        <div class="bottom_strip"></div><div class="bottom_shape"></div>
        <br />
        <small><a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=CT,+United+States&amp;aq=0&amp;oq=CT&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Connecticut,Bridgeport&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed">View Larger Map</a></small> 
        
        </div>  

</div>
  
  </div>
  <!--end section 22-->
  
        <?php include("includes/footer.php"); ?>
<!--end sitewraper--> 

 <?php include("includes/jsscripts.php") ?>
</body>
</html>
