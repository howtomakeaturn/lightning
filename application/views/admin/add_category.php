<style>

</style>

<h3>新增產品類別</h3>
<p>新增一種產品類別，之後可在類別下新增項目。</p>
<form method='post' action='/admin/post_category'>
    <h3>類別名稱</h3>
    <input name='name' type='text' class='form-control' />
    <span class="help-block">產品目錄的大分類</span>    
    <input type='submit' class='btn btn-success' value='確定' onclick='return confirm("確定新增？")'>
</form>
