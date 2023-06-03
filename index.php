<?php get_header(); ?>

<!-- News -->
<section class="news">
    <div class="news__body container">
        <div class="news__inner">
            <div class="news__left-col">
                <h2 class="news__heading title title--medium title--black title--w-bold title--indent">
                    Новости
                </h2>
                <div class="news__list">
                    <?php

                        $post_list = new WP_Query(array(
                            'post_type'   => 'post',
                            'post_status' => 'publish',
                            'category_name'    => 'news',
                            'posts_per_page' => 3,
                            'paged'       => get_query_var('paged') ?: 1,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'suppress_filters' => true
                        ));

                    ?>
                    <?php if( $post_list->have_posts() ) :
                        while( $post_list->have_posts() ) : $post_list->the_post(); ?>
                            <article class="news__item news__item--left">
                                <a href="<?php the_permalink(); ?>" class="news__link">
                                    <div class="news__pic">
                                    <?php
                                        $default_attr = [
                                            'class'	=> "news__img",
                                            'alt'   => get_the_title()
                                        ];
                                        echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ); ?>
                                    </div>
                                    <h3 class="news__title title title--small title--white title--w-medium">
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php  endif; ?>
                </div>
                <!-- Pagination -->
                <nav class="pagination">
                    <div class="pagination__inner">
                        <?php
                            $big = 999999999;
                            echo paginate_links(
                                $args = array(
                                    'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total'   => $post_list->max_num_pages,
                                    'prev_text'    => '<svg viewBox="0 0 25 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 25L25 0V50L0 25Z" fill="#8ABC36" fill-opacity="0.5"/>
                                                        </svg>',
                                    'next_text'    => '<svg viewBox="0 0 25 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M25 25L0 50L-4.37114e-06 2.18557e-06L25 25Z" fill="#8ABC36" fill-opacity="0.5"/>
                                                        </svg>',
                                ));
                        ?>
                    </div>
                </nav>
                <!-- /. Pagination -->
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!-- /. News -->

<?php get_footer(); ?>