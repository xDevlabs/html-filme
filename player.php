<?php
include_once "includes/functions.php";
template_part('header-user',[
    'page_title' => 'Player page',
    'page_description' => '',
    'class' => 'player-page',
    'page' => 'player',
    'donate' => true
]);
?>
<section class="main">
    <div class="container">
        <?php template_part('sidebar-none')?>
        <div class="content">
            <div class="player video-detail">
                <div class="embed_player">
                    <iframe   iframe width="560" height="315" src="https://www.youtube.com/embed/06eSsOWcKYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="frame">
                        <span>time</span>
                        <span>end_time</span>
                    </div>
                </div>

                <div class="video-detail--title">
                    <div class="video--title">
                        <h2>Video title</h2>
                        <div class="action active">
                            <a href="#" class="like"><span>Like</span></a>
                        </div>
                    </div>
                    <p>Play_num + upload_date</p>
                </div>

                <div class="video-detail--footer">
                    <div class="user-info">
                        <div class="user-info__text">
                            <figure>
                                <img src="<?php assets('images/avatar.png');?>" alt="">
                            </figure>
                            <div>
                                <a href="#">user name</a>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>

                    <div class="info-course">
                        <a href="#" class="share-social">シェアする。紹介者が購入 5％pt バック</a>
                        <span class="price">¥500-</span>
                    </div>
                </div>
            </div>

            <div class="video__info">
                <p>info</p>
            </div>

            <div class="comment__list">
                
                <div class="comment-item">
                    <div class="comment-item__title">
                        <a href="#">全員参加</a>
                        <h3>イベントタイトル</h3>
                    </div>
                    <div class="comment-item__content">
                        <div class="comment-item__info">
                            <span>特典内容 : 〇〇プレゼント</span>
                            <span>開催期間 : 2021/12/31 まで</span>
                        </div>
                        <div class="comment-item__text">イベント詳細</div>

                        <div class="comment-item__footer"><span>0000/0000pt</span></div>
                    </div>
                </div>
                
                <div class="comment-item">
                    <div class="comment-item__title">
                        <a href="#">全員参加</a>
                        <h3>イベントタイトル</h3>
                    </div>
                    <div class="comment-item__content">
                        <div class="comment-item__info">
                            <span>特典内容 : 〇〇プレゼント</span>
                            <span>開催期間 : 2021/12/31 まで</span>
                        </div>
                        <div class="comment-item__text">イベント詳細</div>

                        <div class="comment-item__footer"><span>0000/0000pt</span></div>
                    </div>
                </div>
            </div>

            <div class="more-video">
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
