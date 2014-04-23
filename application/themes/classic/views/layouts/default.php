<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<title><?php echo $template['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Your styles -->
    <link href="/assets/themes/classic/css/style.css" rel="stylesheet" media="screen"> 


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- styles for IE -->
    <!--[if IE 8]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
    <![endif]-->


  </head>
  <body> 
    <!-- menu -->
    <nav>
      <div class="container">
        <div class="row-fluid">         
          <ul id="menu" class="sf-menu">
           <li>
            <a href="/">Home</a>
              <ul>
                <li><a href="index.html">Home Option One</a></li>
                <li><a href="index_two.html">Home Option Two</a></li>
                <li><a href="index_one.html">Home Option Three</a></li>
                <li>
                  <a href="#">Third Level</a>
                    <ul>
                      <li><a href="#">SubItem 1</a></li>
                      <li><a href="#">SubItem 2</a></li>
                    </ul>
                </li>
              </ul>
           </li>
            <li><a href="/about">About</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- menu -->

    <?php echo $template['body'] ?>

    <footer>
      <div class="container">
        <div class="row-fluid">    

          <div class="span12">
            <h2>Visit Us</h2>
            <p><?php echo $site->contact_address ?></p>

            <p>電話：<?php echo $site->contact_phone ?></p>

            <p>E-mail:<a href="#"> <?php echo $site->contact_email ?></a></p>
            <!--
            <ul class="social">
              <li><a href=""><img src="img/social/facebook_footer.png" alt="icon-facebook"></a></li>
              <li><a href=""><img src="img/social/twitter_footer.png" alt="icon-twitter"></a></li>
              <li><a href=""><img src="img/social/rss_footer.png" alt="icon-rss"></a></li>
              <li><a href=""><img src="img/social/mail_footer.png" alt="icon-mail"></a></li>
            </ul>
            -->
          </div>
          


      </div>
    </div>
  </footer>
    
      <div class="copry">
        <div class="container">
          <div class="row-fluid">
            <div class="span4">
              <p>© 2014 網路印象</p>
            </div>
            <div class="span8">              
                <!--
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="menu.html">Menu</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>              
                -->
            </div>
          </div>
        </div>
      </div>




      <!-- ======================= JQuery libs =========================== -->
         <!-- Always latest version of jQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>         
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/superfish.js"></script> 
        <!--Lightbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
        <!--Slide-->
        <script type="text/javascript" src="js/slide/camera.js" ></script>      
        <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>
        <!-- Slide Border -->
        <script type="text/javascript" src="js/slide_border/modernizr.custom.53451.js"></script>
        <script type="text/javascript" src="js/slide_border/jquery.gallery.js"></script> 
        <!-- book a table-->
        <script type="text/javascript" src="js/book_a_table/book_a_table.js"></script>

        <script src="js/jquery-func.js"></script>
     <!-- ======================= End JQuery libs =========================== -->


     <script type="text/javascript">
          //=================================== Slide  =================================//
      $('#slide').camera({        
        height: '47%'
        });
     </script>

  </body>
</html>
