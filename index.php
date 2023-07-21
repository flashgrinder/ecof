<?php get_header(); ?>

<section class="news">
    <div class="news__body container">
        <h2 class="news__heading title title--medium title--black title--w-bold center title--indent-large">
            Новости
        </h2>
        <div class="news__inner">
            <div class="news__list">
            <?php
                global $wp_query;
                $post_list = new WP_Query(array(
                    'post_type'   => 'post',
                    'category__not_in' => [-7],
                    'posts_per_page' => 3,
                ));
            ?>
            <?php if( $post_list->have_posts() ) :
                while( $post_list->have_posts() ) : $post_list->the_post(); ?>
                    <?php if( is_sticky() ): ?>
                        <article <?= post_class(['news__item', 'news__item--general']); ?>>
                            <div class="news__wrap">
                                <div class="news__item-info">
                                    <div class="news__cat">
                                        Главная новость
                                    </div>
                                    <h3 class="news__title title title--small title--black title--w-medium">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="news__excerpt text text--black text--w-light">
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <div class="news__footer">
                                        <div class="news__date text text--normal text--black text--w-light">
                                            <?= get_the_date('F j, Y'); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="news__link text text--black text--w-light">
                                            Подробнее
                                            <svg class="news__arrow" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 0.4375C8.91094 0.4375 6.86879 1.05698 5.13179 2.2176C3.3948 3.37822 2.04098 5.02786 1.24153 6.95791C0.442077 8.88795 0.232904 11.0117 0.64046 13.0606C1.04802 15.1096 2.054 16.9916 3.53119 18.4688C5.00838 19.946 6.89044 20.952 8.93936 21.3595C10.9883 21.7671 13.1121 21.5579 15.0421 20.7585C16.9721 19.959 18.6218 18.6052 19.7824 16.8682C20.943 15.1312 21.5625 13.0891 21.5625 11C21.5571 8.2003 20.4426 5.5168 18.4629 3.53711C16.4832 1.55742 13.7997 0.442869 11 0.4375ZM15.8141 11.3148C15.7698 11.4133 15.7078 11.5028 15.6313 11.5789L12.1883 15.0219C12.1145 15.0977 12.026 15.1576 11.9282 15.1977C11.8303 15.2379 11.7253 15.2576 11.6195 15.2555C11.5123 15.2578 11.4056 15.2383 11.3061 15.1981C11.2066 15.1579 11.1163 15.098 11.0406 15.0219C10.8887 14.8696 10.8033 14.6632 10.8033 14.448C10.8033 14.2329 10.8887 14.0265 11.0406 13.8742L13.1023 11.8125H6.9375C6.72202 11.8125 6.51535 11.7269 6.36298 11.5745C6.21061 11.4222 6.125 11.2155 6.125 11C6.125 10.7845 6.21061 10.5778 6.36298 10.4255C6.51535 10.2731 6.72202 10.1875 6.9375 10.1875H13.1023L11.0406 8.12578C10.9006 7.97122 10.8253 7.76873 10.8305 7.56023C10.8356 7.35172 10.9207 7.15318 11.0682 7.0057C11.2157 6.85822 11.4142 6.77311 11.6227 6.76797C11.8312 6.76284 12.0337 6.83808 12.1883 6.97812L15.6313 10.4211C15.7078 10.4972 15.7698 10.5867 15.8141 10.6852C15.8954 10.8872 15.8954 11.1128 15.8141 11.3148Z" fill="#00A0E3"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="news__pic">
                                    <?php
                                        $default_attr = [
                                            'class'	=> "news__img",
                                            'alt'   => get_the_title()
                                        ];
                                        echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ); ?>
                                </div>
                            </div>
                        </article>
                    <?php endif; ?>
                    <article class="news__item news__item--post">
                        <a href="#" class="news__cat">
                            <?php
                                $category = get_the_category();
                                echo $category[0]->cat_name;
                            ?>
                        </a>
                        <h3 class="news__title title title--tiny title--black title--w-medium">
                            <?php the_title(); ?>
                        </h3>
                        <p class="news__excerpt text text--black text--normal text--w-light">
                            <?php the_excerpt(); ?>
                        </p>
                        <div class="news__footer">
                            <div class="news__date text text--normal text--black text--w-light">
                                <?= get_the_date('F j, Y'); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="news__link">
                                <svg class="news__arrow" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0.4375C8.91094 0.4375 6.86879 1.05698 5.13179 2.2176C3.3948 3.37822 2.04098 5.02786 1.24153 6.95791C0.442077 8.88795 0.232904 11.0117 0.64046 13.0606C1.04802 15.1096 2.054 16.9916 3.53119 18.4688C5.00838 19.946 6.89044 20.952 8.93936 21.3595C10.9883 21.7671 13.1121 21.5579 15.0421 20.7585C16.9721 19.959 18.6218 18.6052 19.7824 16.8682C20.943 15.1312 21.5625 13.0891 21.5625 11C21.5571 8.2003 20.4426 5.5168 18.4629 3.53711C16.4832 1.55742 13.7997 0.442869 11 0.4375ZM15.8141 11.3148C15.7698 11.4133 15.7078 11.5028 15.6313 11.5789L12.1883 15.0219C12.1145 15.0977 12.026 15.1576 11.9282 15.1977C11.8303 15.2379 11.7253 15.2576 11.6195 15.2555C11.5123 15.2578 11.4056 15.2383 11.3061 15.1981C11.2066 15.1579 11.1163 15.098 11.0406 15.0219C10.8887 14.8696 10.8033 14.6632 10.8033 14.448C10.8033 14.2329 10.8887 14.0265 11.0406 13.8742L13.1023 11.8125H6.9375C6.72202 11.8125 6.51535 11.7269 6.36298 11.5745C6.21061 11.4222 6.125 11.2155 6.125 11C6.125 10.7845 6.21061 10.5778 6.36298 10.4255C6.51535 10.2731 6.72202 10.1875 6.9375 10.1875H13.1023L11.0406 8.12578C10.9006 7.97122 10.8253 7.76873 10.8305 7.56023C10.8356 7.35172 10.9207 7.15318 11.0682 7.0057C11.2157 6.85822 11.4142 6.77311 11.6227 6.76797C11.8312 6.76284 12.0337 6.83808 12.1883 6.97812L15.6313 10.4211C15.7078 10.4972 15.7698 10.5867 15.8141 10.6852C15.8954 10.8872 15.8954 11.1128 15.8141 11.3148Z" fill="#00A0E3"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>

                <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                    <script id="true_loadmore">
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                    </script>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            <?php  endif; ?>
            </div>

            <div class="news__sidebar">
                <h2 class="news__heading text text--small text--blue text--w-medium">
                    Мы в сми
                </h2>
                <?php
                $post_smi = new WP_Query(array(
                    'post_type'   => 'post',
                    'category_name' => 'smi-o-nas',
                    'posts_per_page' => 24,
                ));
                ?>
                <?php if( $post_smi->have_posts() ) :
                    while( $post_smi->have_posts() ) : $post_smi->the_post(); ?>
                        <article class="news__item news__item--smi">
                            <div class="new__info">
                                <div class="news__date text text--normal text--black text--w-light">
                                    <?= get_the_date('F j, Y'); ?>
                                </div>
                                <h3 class="news__title title title--tiny title--black title--w-medium">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="news__footer">
                                    <a href="<?php the_permalink(); ?>" class="news__link text text--black text--w-light">
                                        Подробнее
                                        <svg class="news__arrow" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 0.4375C8.91094 0.4375 6.86879 1.05698 5.13179 2.2176C3.3948 3.37822 2.04098 5.02786 1.24153 6.95791C0.442077 8.88795 0.232904 11.0117 0.64046 13.0606C1.04802 15.1096 2.054 16.9916 3.53119 18.4688C5.00838 19.946 6.89044 20.952 8.93936 21.3595C10.9883 21.7671 13.1121 21.5579 15.0421 20.7585C16.9721 19.959 18.6218 18.6052 19.7824 16.8682C20.943 15.1312 21.5625 13.0891 21.5625 11C21.5571 8.2003 20.4426 5.5168 18.4629 3.53711C16.4832 1.55742 13.7997 0.442869 11 0.4375ZM15.8141 11.3148C15.7698 11.4133 15.7078 11.5028 15.6313 11.5789L12.1883 15.0219C12.1145 15.0977 12.026 15.1576 11.9282 15.1977C11.8303 15.2379 11.7253 15.2576 11.6195 15.2555C11.5123 15.2578 11.4056 15.2383 11.3061 15.1981C11.2066 15.1579 11.1163 15.098 11.0406 15.0219C10.8887 14.8696 10.8033 14.6632 10.8033 14.448C10.8033 14.2329 10.8887 14.0265 11.0406 13.8742L13.1023 11.8125H6.9375C6.72202 11.8125 6.51535 11.7269 6.36298 11.5745C6.21061 11.4222 6.125 11.2155 6.125 11C6.125 10.7845 6.21061 10.5778 6.36298 10.4255C6.51535 10.2731 6.72202 10.1875 6.9375 10.1875H13.1023L11.0406 8.12578C10.9006 7.97122 10.8253 7.76873 10.8305 7.56023C10.8356 7.35172 10.9207 7.15318 11.0682 7.0057C11.2157 6.85822 11.4142 6.77311 11.6227 6.76797C11.8312 6.76284 12.0337 6.83808 12.1883 6.97812L15.6313 10.4211C15.7078 10.4972 15.7698 10.5867 15.8141 10.6852C15.8954 10.8872 15.8954 11.1128 15.8141 11.3148Z" fill="#00A0E3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php  endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>