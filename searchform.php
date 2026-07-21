<!--検索ボックス-->
<div class="p-seach-area">
    <form  class="p-search__container"method="get" action="<?php echo home_url('/'); ?>">
        <button class=p-search__logo type="submit" aria-label="検索"></button>
        <input name=seach-box class="p-seach-area__box" placeholder="キーワード" name="s" id="s">
    </form>
    <button type="submit" type=submit onclick="alert('クリックされました！')"  class="c-button--seach p-seach-area__button">検索</button>
</div>