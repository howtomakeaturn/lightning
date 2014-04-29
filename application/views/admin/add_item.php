<style>

</style>

<h3>新增產品</h3>
<p>新增一項產品。</p>
<form method='post' action='/admin/post_item'>
    <h3>品名</h3>
    <input name='name' type='text' class='form-control' />
    <h3>價格</h3>
    <input name='price' type='text' class='form-control' />
    <input name='category_id' type='hidden' value='<?php echo $category_id ?>' />
    <input type='submit' class='btn btn-success' value='確定' onclick='return confirm("確定新增？")'>
</form>
