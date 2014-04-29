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
    <caption class='product_caption'><?php echo $category['name'] ?>    <a href='/admin/add_item/<?php echo $category['id'] ?>' class='btn btn-lg btn-primary'><i class="fa fa-suitcase pull-left"></i>增加產品 </a>
</caption>
    <tr>
        <th width=40%>產品名稱</th>
        <th width=30%>價格</th>
        <th width=30%>操作</th>
    </tr>
    <?php foreach($category['items'] as $item): ?>
    <tr>
        <td><strong><?php echo $item['name'] ?></strong></td>
        <td><strong><?php echo $item['price'] ?></strong></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>    
    <?php endforeach; ?>
    
    
</table>

<?php endforeach; ?>

<table class='table table-hover table-bordered'>
    <caption class='product_caption'>增白劑系列    <button class='btn btn-lg btn-primary'><i class="fa fa-suitcase pull-left"></i>增加產品 </button>
</caption>
    <tr>
        <th width=70%>產品名稱</th>
        <th width=30%>操作</th>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>分散均染劑L-140</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>分散均染劑LEVER L-170</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>尼龍剝色、均染、橫條、色花處理劑L-320</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>耐芒硝分散均染劑LEVER L-5020</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>染色導染劑CARRIER MN </a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
</table>

<table class='table table-hover table-bordered'>
    <caption class='product_caption'>後處理加工    <button class='btn btn-lg btn-primary'><i class="fa fa-suitcase pull-left"></i>增加產品 </button>
</caption>
    <tr>
        <th width=70%>產品名稱</th>
        <th width=30%>操作</th>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>分散均染劑L-140</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>分散均染劑LEVER L-170</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>尼龍剝色、均染、橫條、色花處理劑L-320</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>耐芒硝分散均染劑LEVER L-5020</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>染色導染劑CARRIER MN </a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
</table>

<table class='table table-hover table-bordered'>
    <caption class='product_caption'>精練滲透劑    <button class='btn btn-lg btn-primary'><i class="fa fa-suitcase pull-left"></i>增加產品 </button>
</caption>
    <tr>
        <th width=70%>產品名稱</th>
        <th width=30%>操作</th>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>分散均染劑L-140</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>分散均染劑LEVER L-170</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>尼龍剝色、均染、橫條、色花處理劑L-320</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>耐芒硝分散均染劑LEVER L-5020</a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
    <tr>
        <td><a class='page_name' href='#'>染色導染劑CARRIER MN </a></td>
        <td>
            <a class="btn btn-lg btn-default" href="#">
              <i class="fa fa-flag pull-left"></i>檢視
            </a>
            <a class="btn btn-lg btn-warning" href="#">
              <i class="fa fa-flag pull-left"></i>編輯
            </a>
            <a class="btn btn-lg btn-danger" href="#">
              <i class="fa fa-flag pull-left"></i>刪除
            </a>        
        </td>
    </tr>
</table>
