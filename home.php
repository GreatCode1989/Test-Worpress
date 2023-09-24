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
          <div class="grid-item">
            <img class="img-grid" src="<?php echo bloginfo('template_url'); ?>/assets/image/program.png" alt="program" />
            <div class="text">
              <h2 class="title">Программа</h2>
              <p class="text-p">
                Мастер-классы от
                <span class="text-s">звeзд украинского шоу-бизнеса</span>
              </p>
              <button class="btn-grid">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/image/grid-1.png" alt="microphone" />
              </button>
            </div>
          </div>
          <div class="grid-item">
            <img class="img-grid" src="<?php echo bloginfo('template_url'); ?>/assets/image/fire.png" alt="fire" />
            <div class="text">
              <h2 class="title">Развлечения</h2>
              <p class="text-p">
                Бассейн с подогревом, собственный
                <span class="text-s">
                  надувной аквапарк, пляжный кинотеатр</span
                >
              </p>
              <button class="btn-grid">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/image/grid-2.png" alt="microphone" />
              </button>
            </div>
          </div>
          <div class="grid-item">
            <img class="img-grid" src="<?php echo bloginfo('template_url'); ?>/assets/image/boat.png" alt="boat" />
            <div class="text">
              <h2 class="title">Расположение</h2>
              <p class="text-p">
                1-я линия,
                <span class="text-s">собственный песчаный пляж </span> на берегу
                Черного моря
              </p>
              <button class="btn-grid">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/image/grid-3.png" alt="microphone" />
              </button>
            </div>
          </div>
          <div class="grid-item">
            <img
              class="img-grid"
              src="<?php echo bloginfo('template_url'); ?>/assets/image/vegetables.png"
              alt="vegetables.png"
            />
            <div class="text">
              <h2 class="title">Питание</h2>
              <p class="text-p">
                <span class="text-s">Шведская линия</span> с пятиразовым
                питанием от шеф-повара
              </p>
              <button class="btn-grid">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/image/grid-4.png" alt="microphone" />
              </button>
            </div>
          </div>
          <div class="grid-item">
            <img class="img-grid" src="<?php echo bloginfo('template_url'); ?>/assets/image/residence.png" alt="residence" />
            <div class="text">
              <h2 class="title">Проживание</h2>
              <p class="text-p">
                Современные кондиционированные
                <span class="text-s"><br />4-х местные</span> номера
              </p>
              <button class="btn-grid">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/image/grid-5.png" alt="microphone" />
              </button>
            </div>
          </div>
          <div class="grid-item">
            <img class="img-grid" src="<?php echo bloginfo('template_url'); ?>/assets/image/safety.png" alt="safety" />
            <div class="text">
              <h2 class="title">Безопасность</h2>
              <p class="text-p">
                Охраняемая территория 24/7
                <span class="text-s">(157 камер видеонаблюдения)</span>
              </p>
              <button class="btn-grid">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/image/grid-6.png" alt="microphone" />
              </button>
            </div>
          </div>
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