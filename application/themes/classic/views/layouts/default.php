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

          <div class="span4">
            <h2>Visit Us</h2>
            <p>8901 Street Road,</p>
            <p>Cityname, D04 89GR.</p>
            <p>Freephone:    +1 123 456 7890</p>
            <p>Telephone:    +1 123 456 7890</p>
            <p>FAX:                +1 123 456 7890</p>
            <p>E-mail:<a href="#"> mail@demolink.org</a></p>
            
            <ul class="social">
              <li><a href=""><img src="img/social/facebook_footer.png" alt="icon-facebook"></a></li>
              <li><a href=""><img src="img/social/twitter_footer.png" alt="icon-twitter"></a></li>
              <li><a href=""><img src="img/social/rss_footer.png" alt="icon-rss"></a></li>
              <li><a href=""><img src="img/social/mail_footer.png" alt="icon-mail"></a></li>
            </ul>

          </div>
          
          <div class="span4">
            <h2>Working Hours</h2>
            <ul class="working_hours">
              <li>Monday <span>10:30am - 11:30pm</span></li>
              <li>Tuesday  <span>10:30am - 11:30pm</span></li>
              <li>Wednesday <span>10:30am - 11:30pm</span></li>
              <li>Thursday <span>10:30am - 11:30pm</span></li>
              <li>Friday <span>10:30am - 11:30pm</span></li>
              <li>Saturday <span>10:30am - 11:30pm</span></li>
              <li>Sunday <span>10:30am - 11:30pm</span></li>
            </ul>
          </div>

          <div class="span4">
            <h2>Newsletter SingUp</h2>

            <!-- Begin MailChimp Signup Form -->
              <div id="mc_embed_signup">
                <form action="http://imaginacionweb.us4.list-manage.com/subscribe/post?u=f9297aa4909dff7a0b00a9726&amp;id=4f4fbf8f69" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="search...">
                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                </form>
              </div>
              <!--End mc_embed_signup-->

            <div class="clearfix"></div>
            
            <h2>Latest New</h2>
           <div class="lastes">

            <div class="row-fluid">

              <div class="span4">
                <img src="img/slide_01.jpg" alt="">
              </div>
              <div class="span8">
                <span>Mar 13, 2013</span>
                <p>Fusce id turpis vel massa gravida interdum.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </footer>
    
      <div class="copry">
        <div class="container">
          <div class="row-fluid">
            <div class="span4">
              <p>© 2013 Classic Restaurent  |  Privacy Policy</p>
            </div>
            <div class="span8">              
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="menu.html">Menu</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>              
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
