<style>
    .product_caption{
        font-size: 32px;      
    }  
    .page_name{
        font-size: 20px;
    }

</style>

<h3>
    產品目錄
    <a href='/admin/add_category' class='btn btn-lg btn-primary'><i class="fa fa-folder-open pull-left"></i>增加類別</a>
    
</h3>
<p>您的產品目錄會展示這些產品。</p>

<?php foreach($categories as $category): ?>
<table class='table table-hover table-bordered'>
    <caption class='product_caption'><?php echo $category['name'] ?>
    <a href='/admin/edit_category/<?php echo $category['id'] ?>' class="btn btn-lg btn-warning">
      <i class="fa fa-wrench pull-left"></i>編輯
    </a>

    <a href='/admin/delete_category/<?php echo $category['id'] ?>' class="btn btn-lg btn-danger" onclick='return confirm("確定刪除？")'>
      <i class="fa fa-times pull-left"></i>刪除
    </a>        
    
</caption>
    <tr>
        <th colspan='3'>
            <a href='/admin/add_item/<?php echo $category['id'] ?>' class='btn btn-sm btn-primary'><i class="fa fa-suitcase pull-left"></i>增加產品 </a>
        </th>
    </tr>
    <tr>
        <th width=70%>產品名稱</th>
        <th width=10%>價格</th>
        <th width=20%>操作</th>
    </tr>
    <?php foreach($category['items'] as $item): ?>
    <tr>
        <td><strong><?php echo $item['name'] ?></strong></td>
        <td><strong><?php echo $item['price'] ?></strong></td>
        <td>
            <!--
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            -->
            <a href='/admin/edit_item/<?php echo $item['id'] ?>' class="btn btn-lg btn-warning">
              <i class="fa fa-wrench pull-left"></i>編輯
            </a>
            <a href='/admin/delete_item/<?php echo $item['id'] ?>' class="btn btn-lg btn-danger" onclick='return confirm("確定刪除？")'>
              <i class="fa fa-times pull-left"></i>刪除
            </a>        
        </td>
    </tr>    
    <?php endforeach; ?>
    
    
</table>

<?php endforeach; ?>
