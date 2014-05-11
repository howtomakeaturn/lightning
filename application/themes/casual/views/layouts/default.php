<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

		<title><?php echo $template['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/themes/casual/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/assets/themes/casual/css/business-casual.css" rel="stylesheet">
</head>

<body>

    <div class="brand"><?php echo $template['title'] ?></div>
    <div class="address-bar"><?php echo $site->contact_address ?> | <?php echo $site->contact_phone ?></div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><?php echo $site->name ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/about">About</a>
                    </li>
                    <?php if($site->show_blog): ?>
                    <li><a href="/blog">Blog</a>
                    </li>
                    <?php endif; ?>
                    <li><a href="/menu">Menu</a>
                    </li>
                    <li><a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
      		<?php echo $template['body']; ?>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><?php echo $site->name ?> | <?php echo $site->contact_address ?> | <?php echo $site->contact_phone ?> | Copyright &copy; 網路印象 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="/assets/themes/casual/js/jquery-1.10.2.js"></script>
    <script src="/assets/themes/casual/js/bootstrap.js"></script>
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>
