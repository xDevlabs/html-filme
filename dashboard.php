<?php
include_once "includes/functions.php";
template_part('header-user',[
    'page_title' => 'アカウント',
    'page_description' => '',
    'class' => 'dashboard-page',
    'page' => 'dashboard'
]);
?>
<section class="main">
    <div class="container">
        <aside class="sidebar-left">
            <ul>
                <li class="active">
                    <a href="dashboard.php">アカウント</a>
                </li>
                <li>
                    <a href="user-content.php">購入コンテンツ</a>
                </li>
            </ul>
        </aside>
        <div class="content">
            <div class="breadcurmbs">
                <a href="#">
                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.87512 8.12488C3.87512 7.86888 3.97263 7.61337 4.16813 7.41787L8.29313 3.29287C8.68362 2.90237 9.31662 2.90237 9.70713 3.29287C10.0976 3.68338 10.0976 4.31638 9.70713 4.70687L6.28912 8.12488L9.70713 11.5429C10.0976 11.9334 10.0976 12.5664 9.70713 12.9569C9.31662 13.3474 8.68362 13.3474 8.29313 12.9569L4.16813 8.83187C3.97263 8.63637 3.87512 8.38088 3.87512 8.12488Z" fill="#D8D8D8"/>
                        </g>
                        <defs>
                        <filter id="filter0_d" x="0.875244" y="0" width="12.1249" height="16.2498" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset/>
                        <feGaussianBlur stdDeviation="1.5"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        </defs>
                    </svg>
                    <span>アカウントを編集</span>
                </a>
            </div>

            <div class="user-panel">
                <div class="avatar__show">
                    <figure>
                        <img src="<?php assets('images/mycon.png')?>" alt="">
                    </figure>
                    <a href="#">アップロード</a>
                </div>

                <table class="login-info">
                    <tr>
                        <td>ID</td>
                        <td>1599355</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>名前</td>
                        <td>User</td>
                        <td><a href="#">編集</a></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>xxxxx@xxx.jp</td>
                        <td><a href="#">編集</a></td>
                    </tr>
                    <tr>
                        <td>パスワード</td>
                        <td>●●●●●●●●</td>
                        <td><a href="#">編集</a></td>
                    </tr>
                    
                </table>

                <h3 class="paymemnt-heading">クレジット情報</h3>
                <form action="#">
                    <table class="payment">
                        <tr>
                            <td>カード番号</td>
                            <td>
                                <input type="text" placeholder="1234 1234 1234 1234">
                            </td>
                        </tr>

                        <tr>
                            <td>有効期限</td>
                            <td>
                                <input type="text" placeholder="月/年" class="small">
                            </td>
                        </tr>

                        <tr>
                            <td>セキュリティーコード</td>
                            <td>
                                <input type="text" placeholder="CVC" class="small">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="form-submit">
                                <div class="button-list">
                                    <button>決定</button>
                                    <button>キャンセル</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                
                </form>
                
            </div>
        </div>

        <?php template_part('sidebar-none')?>
    </div>
</secti>
<?php
template_part('footer');
