<!DOCTYPE html>
<html lang="ja">
     <head>
        <meta charset="UTF-8">
        <title>ハンバーガーサイト</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ハンバーガーサイトの商品紹介ページ">
        <!-- reset.css ress -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
        <link rel="stylesheet" href="/scss/common.css">
        <!--webfonts Roboto-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="c-grid p-sidebar-container">
            <div class="p-sidebar__black-bg js-bgToggle"></div>
            <nav class="l-sidebar js-sidebarToggle">
                <button class="c-button--close js-buttonToggle-close"></button>
                <button class="c-button--menu p-sidebar-button">Menu</button>
                <ul>
                    <li class="c-menu-list p-sidebar-menutitle u-padding-top">バーガー</li>
                    <ul class="p-sidebar-list">
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">ベーコンバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">ハンバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">チーズバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">チーズバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">テリヤキバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">アボカドバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">フィッシュバーガー</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">チキンバーガー</a></li>
                    </ul>
                    <li class="c-menu-list p-sidebar-menutitle">サイド</li>
                    <ul class="p-sidebar-list">
                        <li class="p-sidebar-list__child"><a class="c-menu-list__child" href="###">ポテト</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">サラダ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">ナゲット</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">コーン</a></li>
                    </ul>
                    <li class="c-menu-list p-sidebar-menutitle">ドリンク</li> 
                    <ul class="p-sidebar-list">
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">コーラ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">ファンタ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">オレンジ</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">アップル</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">紅茶（ICE/HOT）</a></li>
                        <li><a class="c-menu-list__child p-sidebar-list__child" href="###">コーヒー（ICE/HOT）</a></li>
                    </ul>               
                </ul>
            </nav>
            <header class="l-header">
                <div class="p-header-inner">
                <h1><img class="p-logo" src="./img/pc_logo.png"></h1>
              <!--検索ボックス-->
                <div class="p-seach-area">
                        <form  class="p-search__container">
                            <button class=p-search__logo type="submit" aria-label="検索"></button>
                            <input name=seach-box class="p-seach-area__box">
                        </form>
                        <button type="submit" type=submit onclick="alert('クリックされました！')"  class="c-button--seach p-seach-area__button">検索</button>
                </div>
                </div>
            <button class="c-button--menu u-tab-only js-buttonToggle">Menu</button>
            </header>
            <main class="l-main">
                <div class="p-mainvisual-sub">
                    <div class="p-mainvisual-sub__inner">
                        <h2 class="p-mainvisual-sub__text">Menu:</h2>
                        <p class="p-mainvisual-sub__textSmall">チーズバーガー</p>
                    </div>
                </div>
                <div class="p-heading">
                    <h3 class="p-heading__title">小見出しが入ります</h3>
                    <p class="p-heading__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="p-panel-container">
                    <article class="p-panel">
                        <img src="./img/arcchive.png" alt="チーズバーガー" class="p-panel__image">
                        <div class="p-panel__inner">
                            <h4 class="p-panel__title">チーズバーガー</h4>
                            <h5 class="p-panel__subtitle">小見出しが入ります</h5>
                            <p class="p-panel__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <div>
                                <button class="c-button--panel p-panel__button" type="button">詳しく見る</button>
                            </div> 
                        </div>
                    </article>
                    <article class="p-panel">
                        <img src="./img/arcchive.png" alt="チーズバーガー" class="p-panel__image">
                        <div class="p-panel__inner">
                            <h4 class="p-panel__title">ダブルチーズバーガー</h4>
                            <h5 class="p-panel__subtitle">小見出しが入ります</h5>
                            <p class="p-panel__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-button--panel p-panel__button" type="button">詳しく見る</button>
                        </div>
                    </article>
                    <article class="p-panel">
                        <img src="./img/arcchive.png" alt="チーズバーガー" class="p-panel__image">
                        <div class="p-panel__inner">
                            <h4 class="p-panel__title">スペシャルチーズバーガー</h4>
                            <h5 class="p-panel__subtitle">小見出しが入ります</h5>
                            <p class="p-panel__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-button--panel p-panel__button" type="button">詳しく見る</button>
                        </div>
                    </article>

                </div>
                <!--pagenation-->
                <div class="p-pagenation-container">
                    <ul class="p-pagenation">
                        <li class="p-pagenation__text">page1/10</li>
                        <li class="p-pagenation__prev">〈〈</li>
                        <li class="p-pagenation__number u-color--click"><a href="###"></a>1</li>
                        <li class="p-pagenation__number"><a href="###"></a>2</li>
                        <li class="p-pagenation__number"><a href="###"></a>3</li>
                        <li class="p-pagenation__number"><a href="###"></a>4</li>
                        <li class="p-pagenation__number"><a href="###"></a>5</li>
                        <li class="p-pagenation__number"><a href="###"></a>6</li>
                        <li class="p-pagenation__number"><a href="###"></a>7</li>
                        <li class="p-pagenation__number"><a href="###"></a>8</li>
                        <li class="p-pagenation__number"><a href="###"></a>9</li>
                        <li class="p-pagenation__next">〉〉</li>
                    </ul>
                    <ul class="p-pagenation--sp">
                        <div class="p-pagenation--sp__inner">
                            <li>〈〈</li>
                            <li class=u-margin-pagenation>前へ</li>
                        </div>
                        <div class="p-pagenation--sp__inner">
                            <li>次へ</li>
                            <li class="u-margin-pagenation">〉〉</li>
                        </div>
                    </ul>
                </div>
            </main>
            <footer class="l-footer">
                <p class="p-footer__title u-margin-pc">ショップ情報 | ヒストリー</p>
                <small class="c-copyright u-color--white">Copyright: RaiseTech</small>
            </footer>

        </div>
        <script src="js/webfonts.js"></script>
        <script src="js/sidebar.js"></script>
    </body>
</html>