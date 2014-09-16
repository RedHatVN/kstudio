<?php

function knews($cat) {
    $args = array(
        'post_type' => 'post',
        'cat' => $cat,
        'posts_per_page' => 6
    );
    $knews = new WP_Query($args);
    if ($knews->have_posts()):
        $i = 0;
        while ($knews->have_posts()): $knews->the_post();
            if ($i == 0):
                ?>
                <div class="hsticky-news">
                    <?php the_post_thumbnail('small-thumb'); ?>
                    <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <?php
            else:
                if ($i == 0) {
                    echo '<ul class="hnews-related">';
                }
                ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                <?php
                if ($i == 0) {
                    echo '</ul>';
                }
            endif;
            $i++;
        endwhile;
    endif;
    wp_reset_postdata();
}
