<?php

/*

Template Name: staff template

*/

?>
<?php //get_header(); ?>
<div class="row">
<?php
$args = array( 'post_type' => 'Staff','cat' => 7 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
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