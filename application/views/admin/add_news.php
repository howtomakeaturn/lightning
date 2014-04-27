<style>

</style>

<h3>發布新聞</h3>
<p>發布一篇最新消息。</p>
<form method='post' action='/admin/post_news'>
    <h3>標題</h3>
    <input name='title' type='text' class='form-control' />
    <h3>內容</h3>
    <textarea name='content' class='form-control' rows='15'></textarea>
    <input type='submit' class='btn btn-success' value='確定' onclick='return confirm("確定發布？")'>
</form>
