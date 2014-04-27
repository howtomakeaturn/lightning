
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php echo $site->name ?> <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 ">
                    <!--<img class="img-responsive img-border img-full" src="/assets/themes/casual/img/slide-2.jpg" alt="">-->
                    <h2 class='text-center'><?php echo $article['title'] ?>
                        <br>
                        <small><?php echo $article['created_at'] ?></small>
                    </h2>
                    <?php echo ($article['content']) ?>

                    <hr>
                </div>


            </div>
        </div>
