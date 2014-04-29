<style>

</style>

<h3>修改產品</h3>
<form method='post' action='/admin/update_item'>
    <h3>品名</h3>
    <input name='name' type='text' class='form-control' value='<?php echo $item->name ?>' />
    <h3>價格</h3>
    <input name='price' type='text' class='form-control' value='<?php echo $item->price ?>' />  
  
    <input name='id' type='hidden' value='<?php echo $item->id ?>' />
    <input type='submit' class='btn btn-success' value='確定' onclick='return confirm("確定修改？")'>
</form>
