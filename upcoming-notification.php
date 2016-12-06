<?php
$upcoming_exhibition = get_posts("post_type=exhibition&numberposts=1");
$the_link = get_permalink( $upcoming_exhibition[0]->ID);

 ?>

<div class="upcoming" id="upcoming">
  <p class="upcoming__info"><span class="upcoming__hide">New! </span> Upcoming show info can be found <a href="<?php echo $the_link; ?>">here</a></p>
  <a class="upcoming__close" id="upcoming-close" href="#">x</a>
</div>
