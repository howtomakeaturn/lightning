<style>
    /*
    h2 a{
      color: #333;
    }
    h2 a:hover{
      color: #333;
    }
    */
</style>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php echo $site->name ?> <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
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
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
                -->
            </div>
        </div>
