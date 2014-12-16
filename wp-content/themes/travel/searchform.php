<form class="search-main" action="./" method="get">
          <input class="search-text" type="text" name="s" value="<?php the_search_query() ;?>" />
          <input class="search-button" type="image" src="<?php bloginfo('template_url'); ?>/images/search.jpg"/>
</form>