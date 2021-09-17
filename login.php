<?php
include_once "includes/functions.php";
template_part('header',[
    'page_title' => 'Login page',
    'page_description' => '',
    'class' => 'login-page',
    'page' => 'login'
]);
?>
<div class="form-action">
    <div class="container">
        <figure>
            <img src="<?php assets('images/logo.png')?>" alt="">
        </figure>

        <form action="#" method="POST" class="form">
            <div class="form__row">
                <input type="text" name="user-name" placeholder="メールアドレス">
            </div>
            
            <div class="form__row">
                <input type="text" name="user-email" placeholder="パスワード">
            </div>

            <div class="form__row">
                <button class="btn btn-gradient">ログイン</button>
            </div>

            <div class="form__row mt-35">
                <p>パスワードお忘れの方は<a href="#" target="_blank">こちら</a></p>
            </div>
        </form>
    </div>
</div>
<?php
template_part('footer');
