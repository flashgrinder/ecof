<?php get_header(); ?>

<?php the_post(); ?>
<!-- Post -->
<section class="post block-padding">
    <article class="post__body container">
        <header class="post__header">
            <div class="post__info">
                <h1 class="post__title title title--large title--black title--w-bold title--indent center">
                    <?php the_title(); ?>
                </h1>
            </div>
        </header>
        <div class="post__content wysiwyg">
            <?php the_content(); ?>
        </div>
    </article>
</section>
<!-- /. Post-->

<?php get_footer(); ?>