<style>

</style>

<h3>修改類別</h3>
<form method='post' action='/admin/update_category'>
    <h3>類別名稱</h3>
    <input name='name' type='text' class='form-control' value='<?php echo $category->name ?>' />
  
    <input name='id' type='hidden' value='<?php echo $category->id ?>' />
    <input type='submit' class='btn btn-success' value='確定' onclick='return confirm("確定修改？")'>
</form>
