<!doctype html>
<html lang="en-gb">
<!--<![endif]-->
<head>

  <title>Admin</title>
  

<!-- ######### CSS STYLES ######### -->

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

<!-- responsive devices styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

<!-- mega menu -->
<link href="js/mainmenu/sticky.css" rel="stylesheet">
<link href="js/mainmenu/bootstrap.min.css" rel="stylesheet">
<link href="js/mainmenu/demo.css" rel="stylesheet">
<link href="js/mainmenu/menu.css" rel="stylesheet">

<!-- simple line icons -->
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />

<!-- forms -->
<link rel="stylesheet" href="js/form/sky-forms.css" type="text/css" media="all">
<?php include("includes/head.php") ?>
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
        <h3>News Update</h3>
      </div>
      <div class="pagenation">&nbsp;<a href="index.html">Home</a> <i>/</i> Admin News Update</div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>

  <div class="section_holder30">
    <div class="container"> 
    
      
 <div class="full">

        <form action="includes/access/adminNewsUpdate.php" method="post" id="sky-form" class="sky-form">
          <h2 class="uppercase"><strong>Submit a New Article</strong></h2>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">Author</label>
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="author" id="author">
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
                <input type="text" name="title" id="title">
              </label>
            </section>
            <section>
              <label class="label">Upload Picture</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                <input type="text" name="picture" id="picture">
              </label>
            </section>
            <section>
              <label class="label">Article</label>
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea rows="4" name="article" id="article"></textarea>
              </label>
            </section>
            <section>
              <label class="checkbox">
                <input type="checkbox" name="copy" id="copy">
                <i></i>Send a copy to my e-mail address</label>
            </section>
          </fieldset>
          <footer>
            <button type="submit" name="submit" class="button">Submit News Update</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your message was successfully submitted for approval.  You will be notified shortly.  Thanks!</p>
          </div>
        </form>
      </div>  
</div>
  
  </div>
  <!--end section 22-->
  
        <?php include("includes/footer.php"); ?>
<!--end sitewraper--> 

 <?php include("includes/jsscripts.php") ?>
</body>
</html>
