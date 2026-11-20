<div class="c-grid p-sidebar-container">
    <?php get_header(); ?>
    <?php get_sidebar(); ?>
        <main class="l-main">
        <?php if ( have_posts() ) : ?>
            <div class="p-mainvisual-sub">
                <div class="p-mainvisual-sub__inner">
                    <h2 class="p-mainvisual-sub__text">Search:</h2>
                    <?php if ( is_search() ) : ?> 
                        <p class="p-mainvisual-sub__textSmall">
                            <?php echo esc_html( get_search_query(false) ); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="p-heading">
                <h3 class="p-heading__title">小見出しが入ります</h3>
                <p class="p-heading__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
            </div>

            <?php while ( have_posts() ) : the_post(); ?>
                <article class="p-panel">
                    <a href="<?php the_permalink(); ?>" class="p-panel__image">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                    <div class="p-panel__inner">
                        <h4 class="p-panel__title"><?php the_title(); ?></h4>
                        <?php
                        $h2_text = '';

                        foreach ( parse_blocks( get_the_content() ) as $block ) {
                            if (
                                ( $block['blockName'] ?? '' ) === 'core/heading'
                                && (int) ( $block['attrs']['level'] ?? 2 ) === 2
                            ) {
                                $h2_text = wp_strip_all_tags( render_block( $block ) );
                                break;
                            }
                        }
                        ?>
                        <?php if ( $h2_text !== '' ) : ?>
                            <h5 class="p-panel__subtitle"><?php echo esc_html( $h2_text ); ?></h5>
                        <?php endif; ?>
                        <p class="p-panel__text"><?php echo esc_html( get_the_excerpt() ); ?></p>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="p-panel__button">
                               <button class=c-button--panel> 詳しく見る </button>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>

        <div class="p-pagenation-container">
            <?php
            global $wp_query;

            $current_page = max( 1, (int) get_query_var( 'paged' ) );
            $total_pages  = max( 1, (int) $wp_query->max_num_pages );
            ?>

            <p class="p-pagenation__count">
                page<?php echo esc_html( $current_page . '/' . $total_pages ); ?>
            </p>
            <?php the_posts_pagination( array(
                'mid_size'           => 1,
                'prev_text'          => '〈〈 ',
                'next_text'          => '〉〉',
                'screen_reader_text' => 'ページネーション',
                'type'               => 'list',
                'end_size'           => 9,
                'aria_current'       => 'page',
            ) ); ?>

            <ul class="p-pagenation--sp">
                <?php $previous_page_url = get_previous_posts_page_link(); ?>
                <?php if ( $current_page > 1 ) : ?>
                    <li class="p-pagenation--sp__inner">
                        <a href="<?php echo esc_url( $previous_page_url ); ?>" aria-label="前のページ">
                            <span aria-hidden="true">〈〈</span>
                            <span class="u-margin-pagenation">前へ</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php $next_page_url = get_next_posts_page_link(); ?>
                <?php if ( $current_page < $total_pages ) : ?>
                    <li class="p-pagenation--sp__inner u-margin-pagination--lastpage">
                        <a href="<?php echo esc_url( $next_page_url ); ?>" aria-label="次のページ">
                            <span>次へ</span>
                            <span class="u-margin-pagenation" aria-hidden="true">〉〉</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php else : ?>
            <p class="u-margin-errormessage">投稿はありません。</p>
        <?php endif; ?>
    </main>
    <?php get_footer(); ?>
</div>