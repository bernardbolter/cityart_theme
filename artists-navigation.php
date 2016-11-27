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
      <h3>Filter By</h3>
      <form action="/artists-filter" method="GET">
          <ul class="artists-index__artwork--categories">
          <?php
          $argues = array(
            'order_by' => 'name',
            'taxonomy' => 'category'
          );
          $categories = get_categories( $argues );

          foreach ( $categories as $category ){

            echo '<li><input type="checkbox" name="medium[]" value="' . $category->cat_ID . '">'. $category->name . '</li>';
          }
          ?>

      </ul>
      <h3>Sort By</h3>
      <ul class="artits-index__artwork--sort">
        <li><input type="radio" name="sort" value="date">Recently Added</li>
        <li><input type="radio" name="sort" value="ASC">Artist A-Z</li>
        <li><input type="radio" name="sort" value="DESC">Artist Z-A</li>
        <li><input type="radio" name="sort" value="rand">Random</li>
      </ul>
      <button type="submit" name="">GO</button>
    </form>

    </div>
  </div>
</div>
