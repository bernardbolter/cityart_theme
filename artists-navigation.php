<div class="artists-index__navigation">
  <div class="artists-index__artists">
    <a href="#" id="artists-sorting-header" class="artists-index__artists--header">Artists<img src="<?php echo get_template_directory_uri(); ?>/img/chevron-outline.png" /></a>
      <div class="artists-index__artists--link-wrap">
        <a href="#" class="artists-index__links">Thumbnail <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">List <span class="artists-index__square"></span></a>
    </div>
  </div>
  <div href="#" class="artists-index__artwork">
    <a href="#" id="artwork-sorting-header" class="artists-index__artwork--header">Artwork<img src="<?php echo get_template_directory_uri(); ?>/img/chevron-outline.png" /></a>
    <div class="artists-index__artwork--link-wrap">
      <form action="/artists-filter" method="GET">
        <ul>
          <?php
          $argues = array(
            'order_by' => 'name',
            'taxonomy' => 'category'
          );
          $categories = get_categories( $argues );

          foreach ( $categories as $category ){

            echo '<input type="checkbox" name="medium[]" value="' . $category->cat_ID . '">'. $category->name . '<br />';
          }
          ?>


      <h3>Sort By</h3>
      <a href="#" class="artists-index__links">Recently Added <span class="artists-index__square"></span></a>
      <a href="#" class="artists-index__links">Artist A-Z <span class="artists-index__square"></span></a>
      <a href="#" class="artists-index__links">Artist Z-A <span class="artists-index__square"></span></a>
      <a href="#" class="artists-index__links">Random <span class="artists-index__square"></span></a>
      <button type="submit" name="">Search</button>
    </form>

    </div>
  </div>
</div>
