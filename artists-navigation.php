<div class="artists-index__navigation">
  <div class="artists-index__artists">
    <a href="#" id="artists-sorting-header" class="artists-index__artists--header">Artists<img src="<?php echo get_template_directory_uri(); ?>/img/chevron-outline.png" /></a>
  </div>
  <div class="artists-index__artwork">
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
            $cat_name = $category->name; ?>

            <li><label><input <?php if(in_array( $category->cat_ID , $medium_args )): echo 'checked'; endif; ?> type="checkbox" name="medium[]" value="<?php echo $category->cat_ID; ?> " /><?php echo $cat_name; ?></label></li>
          <?php
          }
          ?>

      </ul>
      <h3>Sort By</h3>
      <ul class="artists-index__artwork--checkboxes">
        <li><label><input type="radio" name="sort" value="date" <?php if($sort == 'date') echo 'checked'; ?>>Recently Added</label></li>
        <li><label><input type="radio" name="sort" value="ASC" <?php if($sort == 'ASC') echo 'checked'; ?>>Artist A-Z</label></li>
        <li><label><input type="radio" name="sort" value="DESC" <?php if($sort == 'DESC') echo 'checked'; ?>>Artist Z-A</label></li>
        <li><label><input type="radio" name="sort" value="rand" <?php if($sort == 'rand' || is_page(58))  echo 'checked'; ?>>Random</label></li>
      </ul>
      <input type="text" name="search_text" class="artists-index__artwork--search">
      <button class="artists-index__artwork--button" type="submit" name="">Apply</button>
    </form>

    </div>
  </div>
</div>
