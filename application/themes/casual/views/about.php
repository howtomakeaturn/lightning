        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About <strong><?php echo $site->name ?></strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <?php if (empty($logos)): ?>
                        <img class="img-responsive img-border-left" src="/assets/themes/casual/img/slide-2.jpg" alt="">
                    <?php else: ?>
                        <img class="img-responsive img-border-left" src="<?php echo '/uploads/' . $logos[0]['file_name'] ?>" alt="">                    
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php echo $site_intro ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        -->
