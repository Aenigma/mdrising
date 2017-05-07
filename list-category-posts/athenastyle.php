<?php
// the below is copied from default.php from plugin

$lcp_display_output = '';

// Show category link:
$lcp_display_output .= $this->get_category_link('strong');
// Show the conditional title:
$lcp_display_output .= $this->get_conditional_title();

ob_start();
while ( have_posts() ): the_post();
  get_template_part('template-parts/content-blog', get_post_format());
endwhile;

// let's put our data in there
$lcp_display_output .= ob_get_clean();

// If there's a "more link", show it:
$lcp_display_output .= $this->get_morelink();
// Get category posts count
$lcp_display_output .= $this->get_category_count();

//Pagination
$lcp_display_output .= $this->get_pagination();

$this->lcp_output = $lcp_display_output;
