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
                <img src="<?php echo bloginfo('template_url'); ?>/assets/image/grid-3.png" alt="microphone" />
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
      <section class="more-info">
        <div class="container-popup">
          <div class="popup" id="popup">
            <div class="content-popup">
             
              <div class="image-section">
                <img class="img-big" src="<?php echo bloginfo('template_url'); ?>/assets/image/popup-big.jpg" alt="room" />
                
                <div class="small">
                  <img class="img-small-one" src="<?php echo bloginfo('template_url'); ?>/assets/image/popup-small-1.png" alt="room" />
                  <img class="img-small" src="<?php echo bloginfo('template_url'); ?>/assets/image/popup-small-2.png" alt="room" />
                  <img class="img-small" src="<?php echo bloginfo('template_url'); ?>/assets/image/popup-small-3.png" alt="room" />
                </div>
              </div>
              <div class="text-section">
                <img class="exit" src="<?php echo bloginfo('template_url'); ?>/assets/image/exit.png" alt="">
                <h1 class="text-title">Комфортное <span class="title-s"> проживание</span></h1>
               <h2 class="title-pop">Уютно и удобно</h2>
              
               <ul>
                <li class="list-pop">Четырехместные <span class="list-span">комфортабельные номера</span>  с видом на морское побережье</li>
                <li class="list-pop">Четырехместные <span class="list-span">комфортабельные номера</span>  с видом на морское побережье</li>
                <li class="list-pop">Четырехместные <span class="list-span">комфортабельные номера</span>  с видом на морское побережье</li>
                <li class="list-pop">Четырехместные <span class="list-span">комфортабельные номера</span>  с видом на морское побережье</li>
                <li class="list-pop">Четырехместные <span class="list-span">комфортабельные номера</span>  с видом на морское побережье</li>
               </ul>
              </div>
            </div>
           
            
          </div>
        </div>
      </section>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>