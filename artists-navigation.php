<div class="artists-index__navigation">
  <div class="artists-index__artists">
    <a href="#" id="artists-sorting-header" class="artists-index__artists--header">Artists<img src="<?php echo get_template_directory_uri(); ?>/img/chevron-outline.png" /></a>
      <!-- <div class="artists-index__artists--link-wrap">
        <a href="<?php echo home_url(); ?>/artists-index" class="artists-index__links <?php if(is_page(58) || is_page(113)) echo 'artists-index__links--active'; ?>">Thumbnail <span class="artists-index__square"></span></a>
        <a href="<?php echo home_url(); ?>/artists-list" class="artists-index__links">List <span class="artists-index__square"></span></a>
    </div> -->
  </div>
  <div href="#" class="artists-index__artwork">
    <!-- <a href="#" id="artwork-sorting-header" class="artists-index__artwork--header">Artwork<img src="<?php echo get_template_directory_uri(); ?>/img/chevron-outline.png" /></a> -->
    <div class="artists-index__artwork--link-wrap">
      <h3>Filter By</h3>
      <form action="/artists-filter" method="GET">
          <ul class="artists-index__artwork--checkboxes">
          <?php
          $argues = array(
            'order_by' => 'name',
            'taxonomy' => 'category'
          );
          $categories = get_categories( $argues );

          foreach ( $categories as $category ){

            echo '<li><label><input type="checkbox" name="medium[]" value="' . $category->cat_ID . '">'. $category->name . '</label></li>';
          }
          ?>

      </ul>
      <h3>Sort By</h3>
      <ul class="artists-index__artwork--checkboxes">
        <li><label><input type="radio" name="sort" value="date">Recently Added</label></li>
        <li><label><input type="radio" name="sort" value="ASC">Artist A-Z</label></li>
        <li><label><input type="radio" name="sort" value="DESC">Artist Z-A</label></li>
        <li><label><input type="radio" name="sort" value="rand">Random</label></li>
      </ul>
      <input type="text" name="search_text" class="artists-index__artwork--search">
      <button class="artists-index__artwork--button" type="submit" name="">Apply</button>
    </form>

    </div>
  </div>
</div>
