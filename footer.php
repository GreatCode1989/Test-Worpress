<section class="more-info">
    <div class="container-popup">
        <div class="popup" id="popup">
            <div class="content-popup">

                <div class="image-section">
                    <img class="img-big" src="<?php the_field('img_big'); ?>" alt="room" />

                    <div class="small">
                        <img class="img-small-one" src="<?php the_field('img_small_1'); ?>" alt="room" />
                        <img class="img-small" src="<?php the_field('img_small_2'); ?>" alt="room" />
                        <img class="img-small" src="<?php the_field('img_small_3'); ?>" alt="room" />
                    </div>

                </div>
                <div class="text-section">
                    <img class="exit" src="<?php echo bloginfo('template_url'); ?>/assets/image/exit.png" alt="">
                    <h1 class="text-title">
                        <?php the_field('title1'); ?>
                    </h1>
                    <h2 class="title-pop">
                        <?php the_field('title2'); ?>
                    </h2>

                    <ul>
                        <li class="list-pop">
                            <?php the_field('text1'); ?>
                        </li>
                        <li class="list-pop">
                            <?php the_field('text2'); ?>
                        </li>
                        <li class="list-pop">
                            <?php the_field('text3'); ?>
                        </li>
                        <li class="list-pop">
                            <?php the_field('text4'); ?>
                        </li>
                        <li class="list-pop">
                            <?php the_field('text5'); ?>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>