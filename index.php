
    <body class="resize">
        <div class="c-grid p-sidebar-container">
        <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->
        <?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
        <main class="l-main">
            <div class="p-main-visual">
                <div class="p-main-visual__img">
                    <p class="p-main-visual__title">ダミーサイト</p>
                </div>
            </div>
            <div class="p-card">
                <article class="p-card--takeout">
                    <?php $category = get_category_by_slug( 'take-out' ); ?>
                    <?php if ( $category ) : ?>
                        <h2>
                            <a class="p-card__header-title" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                                Take Out
                            </a>
                        </h2>
                    <?php endif; ?>
                    <div class="p-card__article u-margin-article">
                        <h3 class="p-card__title">Take OUT</h3>
                        <P class="p-card__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</P>
                    </div>
                    <div class="p-card__article">
                        <h3 class="p-card__title">Take OUT</h3>
                        <P class="p-card__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</P>
                    </div>
                </article>
                <article class="p-card--eatin">
                    <?php $category = get_category_by_slug( 'eat-in' ); ?>
                    <?php if ( $category ) : ?>
                        <h2>
                            <a class="p-card__header-title" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                                Eat In
                            </a>
                        </h2>
                    <?php endif; ?>
                    <div class="p-card__article u-margin-article">
                        <h3 class="p-card__title">Eat In</h3>
                        <p class="p-card__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</p>
                    </div>
                    <div class="p-card__article">
                        <h3 class="p-card__title">Eat In</h3>
                        <p class="p-card__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニュ店内でお食事いただけるメニュ店内でお食事いただけるメニュ店内でお食事いただけるメニュ店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニュ店内でお食事いただけるメニューです店内でお食事いただけるメニューですーですーですーですーですーです</p>
                    </div>

                </article>
            </div>
            <div class="p-map">
                <div class="p-map__textarea">
                    <h4 class="p-map__title">見出しが入ります</h4>
                    <p class="p-map__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <div class="p-map-shadow"></div>
                        <img class="p-map-shadow-big" src="<?php echo esc_url( get_template_directory_uri() . '/images/map-black-big.png' ); ?>" alt="地図の影">
                    <div class="p-map-image"></div>
                </div>
            </div>        
        </main>
        <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ-->
        
    <!--jsファイル
        <script src="js/webfonts.js"></script>
        <script src="js/sidebar.js"></script>
    