<!-- Another -->
<section class="another block-padding-small <?= ( is_page('ЭКОклуб') ) ? 'bg--white' : 'bg--light-blue'; ?>">
    <div class="another__body container">
        <h2 class="another__heading title title--medium title--black title--w-bold title--indent center">
            Другие проекты
        </h2>
        <div class="another__items">
            <?php
                $post_id = $wp_query->get_queried_object_id();
                $project_list = new WP_Query(array(
                    'post__not_in' => [$post_id],
                    'post_type'   => 'page',
                    'post_status' => 'publish',
                    'category_name'    => 'proekty',
                    'posts_per_page' => -1,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'suppress_filters' => true
                ));

            ?>
            <?php if( $project_list->have_posts() ) :
                while( $project_list->have_posts() ) : $project_list->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="another__item">
                        <div class="another__icon">
                            <?php
                                $page_icon = get_field('page_icon');
                                if( !empty( $page_icon ) ): ?>
                                    <img class="another__img-icon" src="<?php echo esc_url($page_icon['url']); ?>" alt="<?php echo esc_attr($page_icon['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <h3 class="another__title text text--large text--black text--w-light">
                            <?php the_field('page_title'); ?>
                        </h3>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php  endif; ?>
        </div>
    </div>
</section>
<!-- /. Another -->