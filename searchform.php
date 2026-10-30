<!--検索ボックス-->
<form class="p-seach-area" method="get" action="<?php echo home_url('/'); ?>">
    <div class="p-search__container">
        <button class=p-search__logo type="submit" aria-label="検索"></button>
        <input class="p-seach-area__box" name="s" id="s" value="<?php echo get_search_query(); ?>">
    </div>
    <button type="submit" type=submit class="c-button--seach p-seach-area__button">検索</button>
</form>
   
    