<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>網路印象 - 企業網站管理後台</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->










        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
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
          
            .modal-footer {   border-top: 0px; }
            
        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >

        <div id="background">
            <img src="/assets/img/background/Elegant_Background-2.jpg" class="stretch" alt="" />
        </div>
        
        <!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <?php if (!empty($message)): ?>
        <div class='alert alert-danger'>
            <?php echo $message ?>
        </div>
        <?php endif; ?>

          <h1 class="text-center">網路印象 - 企業網站管理後台</h1>
      </div>
      <div class="modal-body">
          <form method='post' action='/admin/verify' class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" name='email' class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name='password' class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">登入</button>
              <span class="pull-right"><a href="/intro/signup">我是新企業，我要註冊</a></span><span><a href="/intro/support">需要協助嗎？</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button> -->
		  </div>	
      </div>
  </div>
  </div>
</div>
        <!--
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        -->




        
        <!-- JavaScript jQuery code from Bootply.com editor -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
        </script>
        
    </body>
</html>
