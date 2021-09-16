<ul class="video-list">
    <?php foreach($list as $item):?>
        <li>
            <div class="video-item">
                <a href="#">
                    <figure>
                        <img src="<?php assets($item['image'])?>" alt="">
                    </figure>
                </a>

                <div class="clip-item--title">
                    <?php echo isset($item['title'])?'<h2>'.$item['title'].'</h2>':''?>
                    <div class="action">
                        <a href="#" class="like"><span>Like</span></a>
                    </div>
                </div>

                <?php if(isset($item['description'])):?>
                <div class="clip-item--info">
                    <p><?php echo $item['description']?></p>
                </div>
                <?php endif;?>
               
                <div class="clip-item--footer">
                    <?php if(isset($item['share_text'])):?>
                    <div class="info-course">
                        <?php echo isset($item['share_text'])?'<a href="#" class="share-social">'.$item['share_text'].'</a>':''?>
                        <?php echo isset($item['price'])?'<span class="price">'.$item['price'].'</span>':''?>
                    </div>
                    <?php endif;?>
                    <?php if(isset($item['artis'])):?>
                    <div class="user-info">
                        <div class="user-info__text">
                            <figure>
                                <img src="<?php assets($item['artis']['avatar']);?>" alt="">
                            </figure>
                            <?php echo isset($item['artis']['name'])?'<a href="#">'.$item['artis']['name'].'</a>':''?>
                            <?php echo isset($item['artis']['text'])?'<p>'.$item['artis']['text'].'</p>':''?>
                        </div>
                        <a href="#" class="btn btn-round <?php  echo isset($item['artis']['class'])?$item['artis']['class']:''?>">Live</a>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </li>
    <?php endforeach;?>
</ul>