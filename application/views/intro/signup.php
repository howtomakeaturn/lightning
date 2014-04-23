<div class="contentArea">
    <div class="divPanel notop page-content">
        <form method="post" action="/intro/register"><!-- START THE FORM -->
        <div class="row-fluid">
            <!--Edit Main Content Area here-->
            <div class="span12" id="divMain">
            <h1>填完下列資料，您的網站會直接做好給您試用！</h1>
                  

            </div>
        </div>

					<hr>


    <div class="row-fluid">
        <div class='span4'>

            <h3>請用email註冊帳號：</h3>
            <input type='text' class='form-control' name='email' />

            <h3>請輸入密碼：</h3>
            <input type='password' class='form-control' name='password' />

            <h3>您想註冊什麼網址？</h3>
            
            
            <h4>http://<input type='text' >.example.com</h4>

            <h3>您的公司名稱？</h3>
            <input type='text' class='form-control' />

            <h3>簡介您的公司？</h3>
            <textarea class='form-control' rows='6'></textarea>
            <button class='btn btn-primary'>確定</button>
        </div>

        <div class='span4'>

            <h3>客戶要用哪支電話聯絡您？</h3>
            <input type='text' class='form-control' />
            <label class='contact-information-text'>
                <input type='checkbox' class='form-controls' />
                暫不提供電話給客戶
            </label>


            <h3>客戶要用哪個信箱聯絡您？</h3>
            <input type='text' class='form-control' />
            <label class='contact-information-text'>
                <input type='checkbox' class='form-controls' />
                暫不提供信箱給客戶
            </label>

            <h3>客戶要用哪個地址聯絡您？</h3>
            <input type='text' class='form-control' />
            <label class='contact-information-text'>
                <input type='checkbox' class='form-controls' />
                暫不提供地址給客戶
            </label>

        </div>

        <div class='span4'>
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
        </div>
        
    </div>
    </form> <!-- END THE FORM -->
</div>

<style>
    .contact-information-text{
        font-size: 16px;
    }
</style>

