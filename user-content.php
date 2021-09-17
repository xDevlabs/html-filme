<?php
include_once "includes/functions.php";
template_part('header-user',[
    'page_title' => '購入コンテンツ',
    'page_description' => '',
    'class' => 'user-page',
    'page' => 'user-content'
]);
?>
<section class="main">
    <div class="container">
        <aside class="sidebar-left">
            <ul>
                <li>
                    <a href="dashboard.php">アカウント</a>
                </li>
                <li class="active">
                    <a href="user-content.php">購入コンテンツ</a>
                </li>
            </ul>
        </aside>
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

            <div class="more-video mt-15">
                <h3>購入コンテンツの選択</h3>

                <form action="#" class="form-search search-music">
                    <input type="text" class="search" placeholder="Search music">
                </form>

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

        <?php template_part('sidebar-none')?>
    </div>
</secti>
<?php
template_part('footer');
