<?php
include_once "includes/functions.php";
template_part('header-page',[
    'page_title' => 'Home page',
    'page_description' => '',
    'class' => 'home-page',
    'page' => 'home'
]);
?>
<section class="main">
    <div class="container">
        <?php template_part('sidebar-none')?>
        <div class="content">
            <div class="main__tags">
                <ul>
                    <li><a href="#" class="btn btn-outline">Live</a></li>
                    <li><a href="#" class="btn btn-outline">演劇</a></li>
                    <li><a href="#" class="btn btn-outline">スポーツ</a></li>
                    <li><a href="#" class="btn btn-outline">映画</a></li>
                    <li><a href="#" class="btn btn-outline">クラシック</a></li>
                    <li><a href="#" class="btn btn-outline">イベント</a></li>
                </ul>
            </div>

            <div class="home__list">
                <ul class="tablist">
                    <li class="tab"><a href="#tab1" class="btn btn-outline">新規</a></li>
                    <li class="tab"><a href="#tab1" class="btn btn-outline active">人気</a></li>
                </ul>

                <?php 
                    template_part('list', [
                        'list' => [
                            [
                                'title' => 'Clip title',
                                'image' => 'images/clip.png',
                                'share_text' => '購入したらシェアした人に 5％pt バック',
                                'description' => 'info',
                                'price' => '¥500-',
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
                                'share_text' => '購入したらシェアした人に 5％pt バック',
                                'description' => 'info',
                                'price' => '¥500-',
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
                                'share_text' => '購入したらシェアした人に 5％pt バック',
                                'description' => 'info',
                                'price' => '¥500-',
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
                                'share_text' => '購入したらシェアした人に 5％pt バック',
                                'description' => 'info',
                                'price' => '¥500-',
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
