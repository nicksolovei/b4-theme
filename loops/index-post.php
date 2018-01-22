<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article role="article" id="post_<?php the_ID()?>" <?php post_class(); ?> >
  <header>
    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
    <p>
      <em>
        <span class="text-muted author"><?php _e('By', 'mg24'); echo " "; ?><?php the_author_posts_link(); ?>,</span>
        <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
      </em>
    </p>
  </header>
  <main>
    <?php the_post_thumbnail(); ?>

    <?php if ( has_excerpt( $post->ID ) ) { 
  		the_excerpt(); 
    ?><p><a href="<?php the_permalink(); ?>">
    	<?php _e( '&hellip; ' . __('Continue reading', 'mg24' ) . ' <i class="fas fa-arrow-right"></i>', 'mg24' ) ?>
      </a></p>
  	<?php } else { 
  		the_content( __( '&hellip; ' . __('Continue reading', 'mg24' ) . ' <i class="fas fa-arrow-right"></i>', 'mg24' ) ); 
		} ?>
  </main>
  <footer>
    <p class="text-muted" style="margin-bottom: 20px;">
      <i class="fas fa-folder-open"></i>&nbsp;
      <?php _e('Category', 'mg24'); ?>:
      <?php the_category(', ') ?><br/>
      <i class="fa fa-comment"></i>&nbsp;
      <?php _e('Comments', 'mg24'); ?>:
      <?php comments_popup_link(__('None', 'mg24'), '1', '%'); ?><br/>
      <i class="fas fa-user"></i>&nbsp;
      <?php _e('Other posts by', 'mg24'); ?>
      <?php the_author_posts_link(); ?>
    </p>
  </footer>
</article>
