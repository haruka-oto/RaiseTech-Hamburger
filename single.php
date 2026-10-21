    <body>
        <div class="c-grid p-sidebar-container">
            <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->
            <?php get_header(); ?> 
            <main class="l-main">
                <?php if( have_posts() ) : while( have_posts() ) :the_post(); ?>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="p-mainvisual-blog">
                        <?php the_post_thumbnail('p-mainvisual-blog'); ?>
                        <?php the_title('<h1 class="p-mainvisual-blog__text">','</h1>'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="p-post"><?php the_content(); ?>
                    
                </div>
                <?php endwhile; endif; ?>
            </main>
            <?php get_footer(); ?>
        
