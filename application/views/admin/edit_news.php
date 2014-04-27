<style>

</style>

<h3>修改新聞</h3>
<form method='post' action='/admin/update_news'>
    <h3>標題</h3>
    <input name='title' type='text' class='form-control' value='<?php echo $article->title ?>' />
    <h3>內容</h3>
    <textarea name='content' class='form-control' rows='15'><?php echo $article->content ?></textarea>
    <input name='id' type='hidden' value='<?php echo $article->id ?>' />
    <input type='submit' class='btn btn-success' value='確定'>
</form>
