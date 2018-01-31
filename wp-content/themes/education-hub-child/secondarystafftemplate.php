<?php

/*

Template Name:secondary staff template

*/

?>
<?php //get_header(); ?>
<div class="row">
<?php
$args2 = array( 'post_type' => 'Staff','cat' => 8, 'posts_per_page' => 22 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
?>
<div class="col-md-3 containerimage">
<center>
  <?php the_post_thumbnail('thumbnail', ['class' => 'image', 'title' => 'Feature image']);?>
</center>
  <div class="middle">
    <div class="text"><?php
  the_title();
    the_content();
	?></div>
  
  
  </div>
</div>

<?php

endwhile;
wp_reset_postdata();
?>
</div>
<?php //get_footer(); ?>