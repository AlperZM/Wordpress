<?php 
/*
*Template Name: Front-Page
*/
get_header()
?>
  <!-- Hero -->
<section id="main-hero" class="flex-center column hero-img"
style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('<?php echo get_theme_mod( 'hero_image' );?>');"  		 >


  <h1>
    <?php
      echo esc_html( get_theme_mod( 'hero_title'),"Seges" );
    ?> 
  </h1>

  <p>
    <?php
      echo esc_html( get_theme_mod( 'hero_description'),"Web" );
    ?>
  </p>

  <?php if( get_theme_mod( 'button_display', 'show' ) == 'show' ) : ?>
    <a role="button" href="<?php
      $button_url = get_theme_mod( 'hero_button_url');
      echo esc_html( $button_url,"Seges" );?>"
      class='btn'>
        <?php
          $button_text = get_theme_mod( 'hero_button_text');
          echo esc_html( $button_text,"Seges" );
        ?>
    </a>
  <?php endif ?>

  </section>
 <?php //the_custom_header_markup(); ?>
  <!-- End Hero -->

  <!-- Features -->
<section id="main" class="flex-center row">
  <div class="feature-item flex-center column">
    <img class="feature-img" src="<?php echo get_theme_mod( 'feature1_image' );?>" alt="html5"/>
      <h2><?php echo get_theme_mod( 'feature1_title' );?></h2>
      <p><?php //echo get_theme_mod( 'feature1_description' );?>
        <strong>HTML</strong> dijital dünyanın vazgeçilmez bir parçasıdır. Çoğu mobil uygulama bile HTML baz alınarak geliştirilir. Her ne kadar 30 yıllık bir geçmişi olsa da belki de dünyanın en hızlı büyüyen ve benimsenen teknolojisi internet olsa gerek. Üstelik bugün kullanılan birçok platform, mobil uygulama, oyunlar gibi pekçok farklı sektör yine gücünü bu teknolojiden alır. Ancak bu teknoloji tek başına tüm gücü almaz. Kendisiyle aynı derecede öneme sahip diğer iki teknolojiyle paylaşır. Farklı uygulama çatıları(framework) ile etkili ve hızlı tasarımlar yapabilirsiniz.
    </p>
      <a href="<?php echo get_theme_mod( 'feature1_button_url' );?>" role="button" class="btn">
  <?php echo get_theme_mod( 'feature1_button_text' );?></a>
  </div>
  <div class="feature-item flex-center column">
    <img class="feature-img" src="<?php echo get_theme_mod( 'feature2_image' );?>" alt="css3"/>
      <h2><?php echo get_theme_mod( 'feature2_title' );?></h2>
      <p><?php //echo get_theme_mod( 'feature2_description' );?>
    <strong>CSS</strong> HTML tek bir şeye odaklanmaıştır o da veriyi sunmak. Onu daha güzel ve gösterişli hale getirmek için CSS ile desteklemeniz gerekir. Öyle ki bu teknolojiyi ustaca kullandığınız zaman hayal gücünüzün sınırlarında harike tasarımlar yapabilirsiniz. Basit renk ve sayfa düzenlerinden harike görsel sunumlara hatta basit oyunlara kadar aklınıza gelebilecek pekçok şeyi CSS ile yapabilirsiniz. Üstelik ön işlemciler ya da uygulama çatıları(framework) ile hem daha kolay ve hızlı hem de etkili kodlar yazabilirsiniz.
    </p>
      <a href="<?php echo get_theme_mod( 'feature2_button_url' );?>" role="button" class="btn">
     <?php echo get_theme_mod( 'feature2_button_text' );?> 
      </a>
  </div>

  <div class="feature-item flex-center column">
    <img class="feature-img" src="<?php echo get_theme_mod( 'feature3_image' );?>" alt="js"/>
    <h2><?php echo get_theme_mod( 'feature3_title' );?></h2>
   <p> <?php //echo get_theme_mod( 'feature3_description' );?>
     <strong>JavaScript</strong> ile web teknolojisi etkileşimi yakaladı. Hatta artık Web 3.0 konuşulurken bile bunun temelinde yine javaScript yatar. Fron-end yani web sunum yüzünden back-end yani web arka planına kadar her alanda javaScript teknolojisi ile harika işler çıkarabilirsiniz. Çok güçlü olan bu dile ile yapay zeka, veri analizi dahil çok geniş bir yelpazede çok güzel çalışmalar yapmak mümkün. Üstelik web sitesi, web uygulamaları ya da mobil uygulamalar için çok geniş bir topluluğa sahiptir.</p>
    <a href="<?php echo get_theme_mod( 'feature3_button_url' );?>" role="button" class="btn">
    <?php echo get_theme_mod( 'feature3_button_text' );?>
    </a>
  </div>
</section>
  <!-- End Features -->
  <!-- Projects -->
  <section id="projects" class="flex-center row">
    <div class="project-info flex-center column">
    <h2><?php echo get_theme_mod( 'projects_title' );?></h2>
    <p><?php echo get_theme_mod( 'projects_description' );?></p>
    </div>
    <div class="project-grid flex-center row">
      <a href="<?php echo get_theme_mod( 'project1_url' );?>" class="project-card flex-center column">
        <img src="<?php echo get_theme_mod( 'project1_image') ?>" width="5rem" height="5rem" alt="project-1" class="project-img">
        <div class="project-content">
        <h3 class="project-title"><?php echo get_theme_mod( 'project1_title' );?></h3>
        <p class="project-description"><?php echo get_theme_mod( 'project1_description' );?></p>
        </div>
      </a>
      <a href="<?php echo get_theme_mod( 'project2_url' );?>" class="project-card flex-center column">
        <img src="<?php echo get_theme_mod( 'project2_image' );?>" alt="project-2" class="project-img">
        <div class="project-content">
          <h3 class="project-title"><?php echo get_theme_mod( 'project2_title' );?></h3>
          <p class="project-description"><?php echo get_theme_mod( 'project2_description' );?></p>
        </div>
      </a>
      <a href="<?php echo get_theme_mod( 'project3_url' );?>" class="project-card flex-center column">
        <img src="<?php echo get_theme_mod( 'project3_image' );?>" alt="project-3" class="project-img">
        <div class="project-content">
          <h3 class="project-title"><?php echo get_theme_mod( 'project3_title' );?></h3>
          <p class="project-description"><?php echo get_theme_mod( 'project3_description' );?></p>
        </div>
      </a>
    </div>
  </section>
  <!-- End projects -->
  <!-- News -->
  <section id="news" class="flex-center row">
    <div class="news-info">
      <h2><?php echo get_theme_mod( 'news_title' );?></h2>
      <p><?php echo get_theme_mod( 'news_details' );?>
    </div>
    <div class="contact-form flex-center column">
<?php dynamic_sidebar( 'news' ); ?>
    </div>
    <div class="contact-social flex-center column">
         <?php dynamic_sidebar( 'posts' ); ?>
    </div>
  </section>
  <!-- End Contact -->
<?php get_footer() ?>
