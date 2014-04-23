    <div class="container main_content">
      <div class="row-fluid">

        <div class="info_place">
          <div class="span4">
            <ul class="social">
              <li><a href=""><img src="img/social/facebook.png" alt="icon-facebook"></a></li>
              <li><a href=""><img src="img/social/twitter.png" alt="icon-twitter"></a></li>
              <li><a href=""><img src="img/social/rss.png" alt="icon-rss"></a></li>
              <li><a href=""><img src="img/social/mail.png" alt="icon-mail"></a></li>
            </ul>
          </div>
          <div class="span4 logo">
            <a href="index.html"><img src="img/logo.png" alt="icon-logo"></a>
              <!--  divisor -->
              <div class="sep_title">       
                <span class="subtitle">beer wine & food
                  <span class="star-l">&nbsp;</span>
                  <span class="star-r">&nbsp;</span>  
                </span>                      
              </div>
              <!-- end  divisor -->
          </div>
          <div class="span4">
            <div class="phone">
              <p>電話：<span class="color"><?php echo $site->contact_phone ?></span></p>
            </div>
          </div>
        </div>

      </div>

        <!--  divisor -->
        <div class="divisor">
            <div class="circle_left"></div>
            <span class="cup_shadow"></span>
            <span class="shadow_divisor"></span>
            <div class="circle_right"></div>
        </div>
        <!-- end  divisor -->

      <!-- title -->  
      <div class="title">
        <h2>Contact us</h2>
      </div>
      <!-- end title -->

      <div class="row-fluid">
        <div class="contact">
          <div class="span6">
            <h2>Contact information</h2> 
            <div class="contact_information">           
              <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=brooklyn&amp;sll=40.65,-73.95&amp;sspn=0.299551,0.617294&amp;g=brooklyn&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+Nueva+York&amp;ll=40.65,-73.95&amp;spn=0.037445,0.077162&amp;t=m&amp;z=14&amp;output=embed"></iframe>
              <p><?php echo $site->name ?></p>
              <p><?php echo $site->contact_address ?></p>
              <p>電話：<?php echo $site->contact_phone ?></p>
<!--              <p>Freephone:    +1 123 456 7890</p>
              <p>Telephone:    +1 123 456 7890</p>
              <p>FAX:                +1 123 456 7890</p>-->
              <p>E-mail: <?php echo $site->contact_email ?></p>
              <ul class="social">
                <li><a href=""><img src="img/social/facebook.png" alt="icon-facebook"></a></li>
                <li><a href=""><img src="img/social/twitter.png" alt="icon-twitter"></a></li>
                <li><a href=""><img src="img/social/rss.png" alt="icon-rss"></a></li>
                <li><a href=""><img src="img/social/mail.png" alt="icon-mail"></a></li>
            </ul>
            </div>
          </div>
          
          <div class="span6">
            <h2>Contact Form</h2>
            <div class="contact_form">
              <form id="form" action="send_mail.php">
                Name: <input type="text" name="name" required><br>
                Email: <input type="email" name="email" required>
                Message: <textarea class="comment-text"  name="message" rows="10" required></textarea>

                <div class="clearfix"></div>
                
                <div class="buttons">
                  <a href="#" class="button">clear</a>
                  <input class="button submit" name="Submit" type="submit" value="send message">
                   
                </div>

              </form>
             <div id="result"></div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

