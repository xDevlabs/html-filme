<aside class="sidebar">
    <div class="sidebar__content">
        <a class="btn btn-primary">コンテンツを販売</a>
        <h3>ピックアップ</h3>

        <?php
            template_part('list', [
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
                ]
            ]);
        ?>
    </div>
</aside>