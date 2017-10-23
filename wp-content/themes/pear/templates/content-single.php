<?php while ( have_posts() ) : the_post(); ?>
  <div class="row flex--justify-center">
    <?php if ( have_rows( 'content' ) ): ?>

      <?php while ( have_rows( 'content' ) ) : the_row(); ?>

        <?php if ( get_row_layout() == 'strong_text' ) : ?>

          <div class="col-xs-12 col-sm-8">
            <p><?php the_sub_field( 'strong' ); ?></p>
          </div>

        <?php elseif ( get_row_layout() == 'paragraph' ) : ?>

          <div class="col-xs-12 col-sm-8">
            <p><?php the_sub_field( 'p' ); ?></p>
          </div>

        <?php elseif ( get_row_layout() == 'image' ) : ?>

          <div class="col-xs-12 col-sm-10">
            <img class="text-center" style="width:100%" src="<?php the_sub_field( 'img' ); ?>"/>
          </div>

        <?php endif;

      endwhile;

    endif; ?>

    <?php if ( function_exists( 'the_champ_sharing_shortcode' ) ) : ?>
      <div class="col-xs-12 col-sm-8">
        <?php echo do_shortcode( '[TheChamp-Sharing]' ); ?>
      </div>
    <?php endif; ?>
    </div>

<?php endwhile; ?>

