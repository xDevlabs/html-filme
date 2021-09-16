<?php
include_once "includes/functions.php";
template_part('header',[
    'page_title' => 'Home page',
    'page_description' => '',
    'class' => 'home-page',
    'page' => 'home'
]);
?>
<section class="main">
    <div class="container">
        <div class="content">
            <div class="main__tags">
                <ul>
                    <li><a href="#">Live</a></li>
                    <li><a href="#">Live</a></li>
                    <li><a href="#">Live</a></li>
                    <li><a href="#">Live</a></li>
                    <li><a href="#">Live</a></li>
                    <li><a href="#">Live</a></li>
                </ul>
            </div>

            <div class="home__list">
                <ul class="tablist">
                    <li class="tab"><a href="#tab1">新規</a></li>
                    <li class="tab"><a href="#tab1">人気</a></li>
                </ul>

                <?php 
                    template_part('list', [
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
                        
                    ]);
                ?>
            </div>
        </div>

        <?php template_part('sidebar')?>
    </div>
</secti>
<?php
template_part('footer');
