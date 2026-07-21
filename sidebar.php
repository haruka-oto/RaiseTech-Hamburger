<div class="p-sidebar__black-bg js-bgToggle"></div>
            <nav class="l-sidebar js-sidebarToggle l-sidebar__animation">
                <button class="c-button--close js-buttonToggle-close"></button>
                <button class="c-button--menu p-sidebar-button">Menu</button>
                <ul>
                    <li class="c-menu-list p-sidebar-menutitle u-padding-top">バーガー</li> 
                    <?php if ( is_active_sidebar( 'burger_widget' ) ) : ?>
                    <?php dynamic_sidebar( 'burger_widget' ); ?>
                    <?php else : ?>
                    <p>ウィジェットはありません。</p>
                    <h2 class="c-menu-list p-sidebar-menutitle">バーガー</h2>
                    <section class=widget>
                    <ul class="p-sidebar-list">
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">ハンバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">チーズバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">チーズバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">テリヤキバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">アボカドバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">フィッシュバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">チキンバーガー</a></li>
                    </ul>
                    <section>
                    <?php endif; ?>
                    <li class="c-menu-list p-sidebar-menutitle">サイド</li>
                    <?php if ( is_active_sidebar( 'sidemenu_widget' ) ) : ?>
                    <?php dynamic_sidebar( 'sidemenu_widget' ); ?>
                    <?php else : ?>
                    <h2 class="c-menu-list p-sidebar-menutitle">サイド</h2>
                    <section class=widget>
                    <p>ウィジェットはありません。</p>
                    <ul class="p-sidebar-list">
                        <li class="p-sidebar-list__child"><a class="c-menu-list__child" href="###">ポテト</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">サラダ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">ナゲット</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">コーン</a></li>
                    </ul>
                    </section>
                    <?php endif; ?>
                    <li class="c-menu-list p-sidebar-menutitle">ドリンク</li>
                    <?php if ( is_active_sidebar( 'drink_widget' ) ) : ?>
                    <?php dynamic_sidebar( 'drink_widget' ); ?>
                    <?php else : ?>
                    <h2 class="c-menu-list p-sidebar-menutitle">サイド</h2>
                    <section class=widget>
                    <p>ウィジェットはありません。</p>
                    <ul class="p-sidebar-list">
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">コーラ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">ファンタ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">オレンジ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">アップル</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">紅茶（ICE/HOT）</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">コーヒー（ICE/HOT）</a></li>
                    </ul>
                    </section>
                    <?php endif; ?>             
                </ul>
            
            </nav>