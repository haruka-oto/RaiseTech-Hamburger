<div class="p-sidebar__black-bg js-bgToggle"></div>
    <nav class="l-sidebar js-sidebarToggle l-sidebar__animation">
        <button class="c-button--close js-buttonToggle-close"></button>
        <button class="c-button--menu p-sidebar-button js-buttonToggle">Menu</button>
        <ul class="p-sidebar">
            <li>
                <a class="c-menu-list p-sidebar-menutitle u-padding-top" href="<?php echo esc_url( home_url( '/category/burger/' ) ); ?>">バーガー</a>
            </li>
            <?php if ( is_active_sidebar( 'burger_widget' ) ) : ?>
                <?php dynamic_sidebar( 'burger_widget' ); ?>
            <?php else : ?>
                <p>ウィジェットはありません。</p>
            <?php endif; ?>

            <li>
                <a class="c-menu-list p-sidebar-menutitle" href="<?php echo esc_url( home_url( '/category/side/' ) ); ?>">サイド</a>
            </li>
            <?php if ( is_active_sidebar( 'sidemenu_widget' ) ) : ?>
                <?php dynamic_sidebar( 'sidemenu_widget' ); ?>
            <?php else : ?>
                <p>ウィジェットはありません。</p>
            <?php endif; ?>
                    
            <li>
                <a class="c-menu-list p-sidebar-menutitle" href="<?php echo esc_url( home_url( '/category/drink/' ) ); ?>">ドリンク</a>
            </li>
            <?php if ( is_active_sidebar( 'drink_widget' ) ) : ?>
                <?php dynamic_sidebar( 'drink_widget' ); ?>
            <?php else : ?>
                <p>ウィジェットはありません。</p>
            <?php endif; ?>             
        </ul>            
    </nav>