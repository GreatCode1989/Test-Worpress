<?php
/*
Template Name: home

*/

?>

<?php get_header(); ?>

  <body>
    <main class="main">
      <section class="info">
        <div class="container">
         

          <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
  'category'    => 'card'
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
	
  <div class="grid-item">
          
            <?php the_post_thumbnail(
              array(346, 192),
              array(
                'class' => 'img-grid'
              )
            ); ?>
            <div class="text">
              <h2 class="title"><?php the_title(); ?></h2>
              <p class="text-p">
                <?php the_content(); ?>
              </p>
              <button class="btn-grid">
              <?php
$image = get_field('img'); 
if ($image) {
    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" class="btn-grid" />';
}
?>
              </button>
            </div>
          </div>

		<?php 
	}
}

wp_reset_postdata(); 
?>
           
         
        
        </div>
      </section>

      <?php get_footer(); ?>
     
    </main>

    <?php wp_footer(); ?>
  </body>
</html>