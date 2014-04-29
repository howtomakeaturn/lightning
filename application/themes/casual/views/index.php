
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <?php foreach($banners as $index => $banner): ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $index ?>" class="<?php if ($index==0) echo 'active' ?>"></li>
                            <?php endforeach; ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <?php foreach($banners as $index => $banner): ?>
                            <div class="item<?php if ($index==0) echo ' active' ?>" >
                                <img class="img-responsive img-full" src="<?php echo '/uploads/' . $banner['file_name'] ?>" alt="">
                            </div>
                            <?php endforeach; ?>                          
                          
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name"><?php echo $site->name ?></span>
                    </h1>
                    <hr class="tagline-divider">
                    <h2>
<!--                        <small>By <strong>Start Bootstrap</strong></small>-->
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About <strong><?php echo $site->name ?></strong>
                    </h2>
                    <hr>
                    <?php echo $site_intro ?>
                    <!--
                    <img class="img-responsive img-border img-left" src="/themes/casual/img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                    <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php echo $site->name ?> <strong>BLOG</strong>
                    </h2>
                    <hr>
                    <?php foreach(array_reverse($articles) as $article): ?>
                    <div class="col-lg-12 text-center">
                        <!--<img class="img-responsive img-border img-full" src="/assets/themes/casual/img/slide-2.jpg" alt="">-->
                        <h2><a href="/blog/<?php echo $article['id'] ?>"><?php echo $article['title'] ?></a>
                            <br>
                            <small><?php echo $article['created_at'] ?></small>
                        </h2>
                        <p><?php echo character_limiter($article['content'], 500) ?></p>
                        <a href="/blog/<?php echo $article['id'] ?>" class="btn btn-default btn-lg">Read More</a>
                        <hr>
                    </div>
                    <?php endforeach; ?>
                    
                    <!--
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    -->
                </div>
            </div>
        </div>
