<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8' />
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
          
            body{
                padding-bottom: 80px;
            }
          
            .nav-tabs{
                font-size: 36px;
            }
            .container-main{
                padding-left: 20px;
                padding-top: 20px;
            }
            
            @media (min-width:1200px) { 
                .nav-tabs li a{
                    padding-left: 40px;
                    padding-right: 40px;              
                } 
            }
        </style>
    </head>
    <body>
        <div id="background">
            <img src="/assets/img/background/Elegant_Background-2.jpg" class="stretch" alt="" />
        </div>
      
        <div class="container">
            <div class="navbar-header">
                <ul class="nav nav-tabs">
                  <li><a href="/admin/index">管理</a></li>
                  <li><a href="#">新聞</a></li>
                  <li><a href="/admin/page">頁面</a></li>
                  <li><a href="/admin/product">產品</a></li>
                  <li><a href="/admin/sort">順序</a></li>
                  <li><a href="/admin/layout">美觀</a></li>
                  <li><a href="/admin/support">支援</a></li>
                </ul>
            </div>
        </div>
        <div class="container container-main">

            <!-- Main component for a primary marketing message or call to action -->
            <div>
                <?php echo $template['body']; ?>
            </div>
        </div> <!-- /container -->
      
      
    </body>
</html>
