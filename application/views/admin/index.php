<style>
    .contact-information-text{
        font-size: 16px;
    }
</style>

<h3>貴公司的網址如下：</h3>
<h4><a href='http://<?php echo $site['subdomain'] . '.' . substr(base_url(), 7) ?>' target='_blank'>http://<?php echo $site['subdomain'] . '.' . substr(base_url(), 7) ?></a></h4>


<form method='post' action='/admin/update_information'>
    <h3>貴公司的名稱？</h3>
    <input name='name' value='<?php echo $site['name'] ?>' type='text' class='form-control' />

    <h3>貴公司的簡介？</h3>
    <textarea name='intro' class='form-control' rows='6'><?php echo $site['intro'] ?></textarea>

    <h3>客戶要用哪支電話聯絡您？</h3>
    <input name='contact_phone' value='<?php echo $site['contact_phone'] ?>' type='text' class='form-control' />
    <!--
    <label class='contact-information-text'>
        <input type='checkbox' class='form-controls' />
        暫不提供電話給客戶
    </label>
    -->

    <h3>客戶要用哪個信箱聯絡您？</h3>
    <input name='contact_email' value='<?php echo $site['contact_email'] ?>' type='text' class='form-control' />
    <!--
    <label class='contact-information-text'>
        <input type='checkbox' class='form-controls' />
        暫不提供信箱給客戶
    </label>
    -->

    <h3>客戶要用哪個地址聯絡您？</h3>
    <input name='contact_address' value='<?php echo $site['contact_address'] ?>' type='text' class='form-control' />
    <!--
    <label class='contact-information-text'>
        <input type='checkbox' class='form-controls' />
        暫不提供地址給客戶
    </label>
    -->
    <h3></h3>
    <input type='submit' class='btn btn-lg btn-success' value='修改資料' onclick='return confirm("確定修改資料？")' />
</form>
<!--
<h3>您要提供產品目錄給客戶參考嗎？</h3>
<span class="help-block">您公司有提供目錄讓客戶參考嗎？有的話建議啟動此功能，並且前往「產品」進行編輯。</span>
<label class='contact-information-text'>
    <input type='radio' name='menu' class='form-controls' />
    要
</label>
<label class='contact-information-text'>
    <input type='radio' name='menu' class='form-controls' />
    暫時不要
</label>
-->

<!--
<h3>您會定期寫文章、發布新消息、公佈最新資訊給客戶嗎？</h3>
<span class="help-block">您公司需要「新聞」系統（部落格系統）嗎？有的話建議啟動此功能，並且前往「新聞」進行編輯。</span>
<label class='contact-information-text'>
    <input type='radio' name='menu' class='form-controls' />
    會
</label>
<label class='contact-information-text'>
    <input type='radio' name='menu' class='form-controls' />
    暫時不會
</label>
-->
