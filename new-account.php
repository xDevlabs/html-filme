<?php
include_once "includes/functions.php";
template_part('header',[
    'page_title' => 'Home page',
    'page_description' => '',
    'class' => 'home-page',
    'page' => 'home'
]);
?>
<div class="form-action">
    <div class="container">
        <figure>
            <img src="<?php assets('images/logo.png')?>" alt="">
        </figure>
        <p>新規登録をする</p>
        <form action="#" method="POST" class="form">
            <div class="form__row">
                <input type="text" name="user-name" placeholder="ニックネーム">
            </div>
            
            <div class="form__row">
                <input type="text" name="user-email" placeholder="メールアドレス">
            </div>

            <div class="form__row">
                <input type="text" name="user-id" placeholder="パスワード">
            </div>

            <div class="form__row mx-30">
                <input type="checkbox" name="agree">
                <label for="#"><a href="#">利用規約</a>に同意する</label>
            </div>

            <div class="form__row">
                <button class="btn btn-gradient">新規登録</button>
            </div>
        </form>
    </div>
</div>
<?php
template_part('footer');
