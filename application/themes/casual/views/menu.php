
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php echo $site->name ?> <strong>Menu</strong>
                    </h2>
                    <hr>
                </div>
                
                <?php foreach($cates as $index => $cate): ?>
                    <div class='col-lg-4 text-center'>
                        <h2><!--<?php echo $cate['name'] ?>
                            <br>-->
                            <small><?php echo $cate['name'] ?></small>
                        </h2>
                        <?php foreach($cate['items'] as $item): ?>
                            <p><?php echo $item['name'] ?> <?php echo $item['price'] ?></p>
                        <?php endforeach; ?>
                    </div>
                    
                    <?php if($cates%3==0): ?>
                    <div style='clear: both;'></div>
                    <? endif; ?>
                    
                <?php endforeach; ?>

            </div>
        </div>
