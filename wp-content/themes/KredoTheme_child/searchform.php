<form role="search" id="searchform" class="form_search" method="GET" action="<?php echo home_url( '/' ) ?>">
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" required />
    <input type="hidden" value="post" name="post_type" />
    <input class="search" id="searchsubmit" type="submit" value="" style="padding: 0" />
</form>


<!-- <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<label class="screen-reader-text" for="s">Поиск: </label>
	<input type="text" value="<?php 
    // echo get_search_query() 
    ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="найти" />
</form> -->





<?php
//  get_search_form(); 
 ?>