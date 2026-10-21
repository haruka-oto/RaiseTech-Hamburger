<div class="c-grid p-sidebar-container">
    <?php get_header(); ?>
    <?php get_sidebar(); ?>

    <main class="l-main">
        <div class="p-mainvisual-sub">
            <div class="p-mainvisual-sub__inner">
                <h1 class="p-mainvisual-sub__text">404 Not Found</h1>
            </div>
        </div>

        <div class="p-heading">
            <h2 class="p-heading__title">ページが見つかりません</h2>
            <p class="p-heading__text">
                お探しのページは、削除されたかURLが変更された可能性があります。
            </p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ戻る</a>
        </div>
    </main>

    <?php get_footer(); ?>
</div>