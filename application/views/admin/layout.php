<style>
    .bg_text{
        font-size: 20px;
    }
  
    .thumbnail{
        max-width: 300px;
        width: 100%;
    }

</style>

<h3>您的公司有LOGO圖片嗎？</h3>
<input type='file' class='form-control' />
<label class='contact-information-text'>
    <input type='checkbox' class='form-controls' />
    暫不上傳LOGO圖片
</label>

<h3>放幾張圖片到首頁嗎？</h3>
<span class="help-block">例如：產品照片、公司照片、老闆照片、工廠照片，讓客戶更信任您。</span>
<form method='post' action='/admin/upload_banner' enctype="multipart/form-data">
    <input type='file' name='userfile' class='form-control' />
    <input type='submit' class='btn btn-success' value='上傳圖片' onclick='return confirm("確定上傳圖片？")' />
</form>

<table class='table table-hover table-bordered'>
    <caption>目前圖片</caption>
    <tr>
        <th>圖片</th>
        <th>操作</th>
    </tr>
<?php foreach($banners as $banner): ?>
    <tr>
        <td><img width='200' src="<?php echo '/uploads/' . $banner['file_name'] ?>" /></td>
        <td>
            <a href='/admin/delete_banner/<?php echo $banner['banner_id'] ?>' class="btn btn-lg btn-danger" onclick='return confirm("確定刪除？")'>
              <i class="fa fa-times pull-left"></i>刪除
            </a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
<!--
<h3>設定您的背景圖片</h3>
<div class='row'>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />綺麗雅緻</label>
        <img src="/assets/img/background/Elegant_Background-1.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />潔淨典雅</label>
        <img src="/assets/img/background/Elegant_Background-2.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />昏彩沉著</label>
        <img src="/assets/img/background/Elegant_Background-3.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />清澈智慧</label>
        <img src="/assets/img/background/Elegant_Background-4.jpg" class="thumbnail" alt="" />
    </div>
</div>

<div class='row'>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />綺麗雅緻</label>
        <img src="/assets/img/background/Elegant_Background-5.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />潔淨典雅</label>
        <img src="/assets/img/background/Elegant_Background-6.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />昏彩沉著</label>
        <img src="/assets/img/background/Elegant_Background-7.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />清澈智慧</label>
        <img src="/assets/img/background/Elegant_Background-8.jpg" class="thumbnail" alt="" />
    </div>
</div>

<div class='row'>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />綺麗雅緻</label>
        <img src="/assets/img/background/Elegant_Background-9.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />潔淨典雅</label>
        <img src="/assets/img/background/Elegant_Background-10.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />昏彩沉著</label>
        <img src="/assets/img/background/Elegant_Background-11.jpg" class="thumbnail" alt="" />
    </div>
    <div class='col-md-3'>
        <label class='bg_text'><input type='radio' />清澈智慧</label>
        <img src="/assets/img/background/Elegant_Background-12.jpg" class="thumbnail" alt="" />
    </div>
</div>
-->
