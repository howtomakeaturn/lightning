
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong><?php echo $site->name ?></strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                  

                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <!--
                    <iframe 
                        width="100%" 
                        height="400" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=67.0625,-35.677068&amp;spn=26.506174,39.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                    -->
                    <iframe
                        width="100%"
                        height="400"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBtyLb7BcoYxIKB4RtJUjVMO4dhQDfecpE
                            &q=<?php echo $site->contact_address ?>">
                    </iframe>
                </div>
                <div class="col-md-4">
                    <p>電話： <strong><?php echo $site->contact_phone ?></strong>
                    </p>
                    <?php if (!empty($site->contact_email)): ?><p>Email: <strong><?php echo $site->contact_email ?></strong><?php endif; ?>
                    </p>
                    <p>地址：<?php echo $site->contact_address ?>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>form</strong>
                    </h2>
                    <hr>
                    <p>This contact form is just the form elements, it is not a working form. You will have to make the form work by yourself, or take it out if you can't figure out how to make it work.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        -->
