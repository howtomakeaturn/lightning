<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		<?php echo $template['metadata']; ?>
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css">
    <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>      
    <style>
            #background {
                width: 100%; 
                height: 100%; 
                position: fixed; 
                left: 0px; 
                top: 0px; 
                z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
            }
            .stretch {
                width:100%;
                height:100%;
            }

            .navbar{
                margin-top: 40px;
            }
            .main-container{
                min-height: 450px;
            }
            footer{
                margin-top: 40px;
            }
    </style>
	</head>
	<body>
      <div id="background">
          <img src="/assets/img/background/Elegant_Background-2.jpg" class="stretch" alt="" />
      </div>    
      <div class='container'>
          <header>
<!--              <img class='ln-logo' src='/assets/img/mock/logo.png' /> -->
              <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li><a href="/common/index">Home</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Menu</a></li>
                      <li><a href="#">Map</a></li>
                      <li><a href="#">Contact Us</a></li>

                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
          </header>
      </div>
      <div class='container main-container'>
      		<?php echo $template['body']; ?>
      </div>
      <!-- FOOTER -->
      <div class='container'>
          <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>      
      </div>
	</body>
</html>
