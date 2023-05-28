<?php

    $smi_list = new WP_Query(array(
        'post_type'   => 'post',
        'post_status' => 'publish',
        'category_name'    => 'smi-o-nas',
        'posts_per_page' => 5,
        'paged'       => get_query_var('paged') ?: 1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'suppress_filters' => true
    ));

?>
<?php if( $smi_list->have_posts() ) : ?>
    <div class="news__right-col">
        <h2 class="news__heading title title--medium title--black title--w-bold title--indent">
            Сми о нас
        </h2>
        <div class="news__list">
            <?php while( $smi_list->have_posts() ) : $smi_list->the_post(); ?>
                <article class="news__item news__item--right">
                    <div class="news__pic">
                        <?php
                        $default_attr = [
                            'class'	=> "news__img",
                            'alt'   => get_the_title()
                        ];
                        echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ); ?>
                    </div>
                    <div class="new__info">
                        <a href="<?php the_permalink(); ?>" class="news__link">
                            <h3 class="news__title title title--small title--black title--w-medium">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                        <p class="news__excerpt text text--normal text--black text--w-light">
                            <?php the_excerpt(); ?>
                        </p>
                        <div class="news__date text text--normal text--black text--w-light">
                            <?= get_the_date('d.m.Y') ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
<?php wp_reset_postdata(); ?>
<?php  endif; ?>
