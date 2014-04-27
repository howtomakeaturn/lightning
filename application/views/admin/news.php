<style>
    .page_name{
        font-size: 20px;
    }

</style>

<h3>新聞<a href='/admin/add_news' class='btn btn-lg btn-primary'><i class="fa fa-pencil pull-left"></i>發布新聞</a></h3>
<p>您發布過這些新聞。</p>
<table class='table table-hover table-bordered'>
    <tr>
        <th width=55%>新聞標題</th>
        <th width=15%>發布日期</th>
        <th width=30%>操作</th>
    </tr>

    <?php foreach(array_reverse($articles) as $article): ?>
    <tr>
        <td><a class='page_name' href="http://<?php echo $subdomain . '.' . substr(base_url(), 7) ?>blog/<?php echo $article['id'] ?>" target='_blank'><?php echo $article['title'] ?></a></td>
        <td><?php echo $article['created_at'] ?></td>
        <td>
            <a class="btn btn-lg btn-default" href="http://<?php echo $subdomain . '.' . substr(base_url(), 7) ?>blog/<?php echo $article['id'] ?>" target='_blank'>
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="/admin/edit_news/<?php echo $article['id'] ?>">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>    
    <?php endforeach; ?>
</table>

<!-- this for weird position bug 
       not neccessary at all, though -->
.
<table class='table table-hover table-bordered'>

</table>

