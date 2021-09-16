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
            <img src="<?php assets('logo.svg')?>" alt="">
        </figure>
        <form action="#" method="POST" class="form">
            <div class="form__row">
                <input type="text" name="user-name">
            </div>
            
            <div class="form__row">
                <input type="text" name="user-password">
            </div>

            <div class="form-row">
                <button class="btn btn-gradient"></button>
            </div>

            <p>パスワードお忘れの方はこちら</p>
            
        </form>
    </div>
</div>
<?php
template_part('footer');
