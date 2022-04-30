<?php
get_header();
?>

<section class="list-news">
  <div class="container">
    <div class="list-news__wrapper">
      <div class="list-news__list">
        <?php
          $current_term_id = get_queried_object()->term_id;
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'blog',
            'paged' => $paged,
            'tax_query' => array(
              array(
                  'taxonomy' => 'blog-category',
                  'field'    => 'term_id',        
                  'terms'    => $current_term_id,        
              ),
            ),
          );

          $listNews = new WP_Query($args);
          if($listNews->have_posts()):
            while($listNews->have_posts()):
              $listNews->the_post();
        ?>
        <a href="<?php echo get_the_permalink(); ?>" class="list-news__item">
          <div class="list-news__item__img-wrapper">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="News Title" title="News Title" class="list-news__item__img">
          </div>
          <p class="list-news__item__title"><?php the_title(); ?></p>
        </a>
        <?php
            endwhile;     
          
          else:
            echo "Product not found !!!";
          endif;
        ?>
      </div>
      <div class="list-news__pagination">
        <?php
        if(function_exists('wp_pagenavi')) {
          wp_pagenavi(array( 'query' => $listNews));
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>