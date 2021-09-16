<?php
include_once "includes/functions.php";
template_part('header-user',[
    'page_title' => 'Artics',
    'page_description' => '',
    'class' => 'artis-page',
    'page' => 'artis',
    'donate' => true
]);
?>
<section class="main">
    <div class="container">
        <?php template_part('sidebar-none')?>
        <div class="content">
            <div class="user-detail">
               <div class="user-detail--info">
                    <figure>
                        <img src="<?php assets('images/mycon.png')?>" alt="">
                    </figure>
                    <div  class="user--text">
                        <h2>Artis name</h2>
                        <span>お気に入り登録数</span>
                        <p>Artist info</p>
                        <small>もっと見る</small>
                    </div>
               </div>
               <div class="user-share">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?php assets('images/star.svg')?>" alt="">
                                <span>560</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php assets('images/twitter.svg')?>" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php assets('images/instagram.svg')?>" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php assets('images/share-color.svg')?>" alt="">
                            </a>
                        </li>
                    </ul>
               </div>
            </div>

            <div class="user-list">
                <h3>関連アーティスト</h3>

                <ul>
                    <li>
                        <a href="#">
                            <figure class="avatar-rounded">
                                <img src="<?php assets('images/avatar.png')?>" alt="">
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure class="avatar-rounded">
                                <img src="<?php assets('images/avatar.png')?>" alt="">
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure class="avatar-rounded">
                                <img src="<?php assets('images/avatar.png')?>" alt="">
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure class="avatar-rounded">
                                <img src="<?php assets('images/avatar.png')?>" alt="">
                            </figure>
                        </a>
                    </li>
                    
                </ul>
            </div>

            <div class="more-video mt-15">
                <h3>関連動画</h3>

                <?php 
                    template_part('list', [
                        'class' => 'three-items no-border',
                        'list' => [
                            [
                                'title' => 'Clip title',
                                'image' => 'images/clip.png',
                                'artis' => [
                                    'avatar' => 'images/avatar.png',
                                    'name' => 'artist name',
                                    'text' => 'Play_num + upload_date',
                                    'class' => ''
                                ]
                            ],
                            [
                                'title' => 'Clip title',
                                'image' => 'images/clip.png',
                                'artis' => [
                                    'avatar' => 'images/avatar.png',
                                    'name' => 'artist name',
                                    'text' => 'Play_num + upload_date',
                                    'class' => ''
                                ]
                            ],
                            [
                                'title' => 'Clip title',
                                'image' => 'images/clip.png',
                                'artis' => [
                                    'avatar' => 'images/avatar.png',
                                    'name' => 'artist name',
                                    'text' => 'Play_num + upload_date',
                                    'class' => ''
                                ]
                            ],
                            [
                                'title' => 'Clip title',
                                'image' => 'images/clip.png',
                                'artis' => [
                                    'avatar' => 'images/avatar.png',
                                    'name' => 'artist name',
                                    'text' => 'Play_num + upload_date',
                                    'class' => ''
                                ]
                            ],
                            [
                                'title' => 'Clip title',
                                'image' => 'images/clip.png',
                                'artis' => [
                                    'avatar' => 'images/avatar.png',
                                    'name' => 'artist name',
                                    'text' => 'Play_num + upload_date',
                                    'class' => ''
                                ]
                            ],
                            [
                                'title' => 'Clip title',
                                'image' => 'images/clip.png',
                                'artis' => [
                                    'avatar' => 'images/avatar.png',
                                    'name' => 'artist name',
                                    'text' => 'Play_num + upload_date',
                                    'class' => ''
                                ]
                            ],
                        ]
                    ]);
                ?>
            </div>
        </div>

        <?php template_part('sidebar-right')?>
    </div>
</secti>
<?php
template_part('footer');
