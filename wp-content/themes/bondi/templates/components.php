<?php
$object = get_queried_object();

$object = !empty($object) ? $object : false;

if( have_rows('component', $object) ):
     // loop through the rows of data
  while ( have_rows('component', $object) ) : the_row();
    // ten component duoi php
    get_template_part('templates/components/name-cpn');
    
  endwhile;
endif;
?>
