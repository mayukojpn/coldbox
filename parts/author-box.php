<div class="author-box">
  <div class="author-thumbnail">
    <?php echo get_avatar( get_the_author_meta( 'ID' ), 74 ); ?>
  </div>
  <div class="author-content">
    <div class="author-infomation"><p class="author-name"><?php the_author_meta( 'display_name' ); ?></p><div class="author-links"><?php if ( cd_is_links_on_author_box() ) { cd_social_links(); } ?></div></div>
    <p class="author-description"><?php the_author_meta( 'description' ); ?></p>
  </div>
</div>
