<form role="search" method="get" 
action="<?php echo home_url( '/') ?>" > <!-- dynamically adds the homepage of current site -->

	<input type="search" class="form-control" placeholder="Search"	

	value="<?php echo get_search_query(); //this keepz data entered by the user visible in the search field after it is submitted?>" 

	name="s" title="Search" />

</form>

<!-- class="form-control" is a boostrap class -->