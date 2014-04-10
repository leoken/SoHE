<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url('/'); ?>">
  <div class="form-group">
    <label><?php _e('Search Faculty & Staff', 'sohe'); ?></label>
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field form-control" placeholder="">
    <input type="hidden" name="post_type[]" value="staff" />
    <span class="input-group-btn">
      <button type="submit" class="btn btn-default">
      	<span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-search fa-stack-1x fa-inverse"></i>
		</span>
      </button>
    </span>
  </div>
</form>