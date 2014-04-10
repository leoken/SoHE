<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url('/'); ?>">
  <div class="input-group">
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
    <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
    <span class="input-group-btn">
      <button type="submit" class="btn btn-search-icon">
      	<span class="fa-stack fa-lg">
  		    <i class="fa fa-circle fa-stack-2x"></i>
  		    <i class="fa fa-search fa-stack-1x fa-inverse"></i>
		    </span>
      </button>
    </span>
  </div>
</form>
