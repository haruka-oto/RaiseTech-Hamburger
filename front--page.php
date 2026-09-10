<?php
get_sidebar();
get_header();
?>

<main class="l-main">
    <div class="p-main-visual">
        <div class="p-main-visual__img">
            <p class="p-main-visual__title">ダミーサイト</p>
        </div>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'p-post' ); ?>>
            <h2 class="p-post__title"><?php the_title(); ?></h2>
            <div class="p-post__content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p>表示する投稿がありません。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
