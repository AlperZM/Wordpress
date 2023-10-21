<?php 
/*
*Template Name: Front-Page
*/
get_header()
?>

  <!-- Hero -->
  <section id="main-hero" class="flex-center column">
    <div class="hero-content">
      <h1>Seges</h1>
      <p>Web || App</p>
      <a href="#" role="button" class="btn">İletişim</a>
      <a href="#" role="button" class="btn">Projeler</a>
    </div>
  </section>
  <!-- End Hero -->
  <!-- Features -->
<section id="features" class="flex-center row">
  <div class="feature-item flex-center column">
    <img class="feature-svg" src="img/html-5.svg" alt="html5"/>
    <h2>HTML 5</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed risus e</p>
    <a href="#" role="button" class="btn">Detaylar</a>
  </div>
  <div class="feature-item flex-center column">
    <img class="feature-svg" src="img/css-3.svg" alt="css3"/>
    <h2>CSS 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed</p>
    <a href="#" role="button" class="btn">Detaylar</a>
  </div>

  <div class="feature-item flex-center column">
    <img class="feature-svg" src="img/js.svg" alt="js"/>
    <h2>JavaScript</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed</p>
    <a href="#" role="button" class="btn">Detaylar</a>
  </div>
</section>
  <!-- End Features -->
  <!-- Projects -->
  <section id="projects" class="flex-center row">
  <div class="project-info flex-center column">
    <h2>Projeler</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed risus e</p></div>
    <div class="project-grid flex-center row">
      <a href="#" class="project-card flex-center column">
        <img src="img/project-1.jpg" alt="project-1" class="project-img">
        <div class="project-content">
          <h3 class="project-title">Proje 1</h3>
          <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed risus e</p>
        </div>
      </a>
      <a href="#" class="project-card flex-center column">
        <img src="img/project-2.jpg" alt="project-2" class="project-img">
        <div class="project-content">
          <h3 class="project-title">Proje 2</h3>
          <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed risus e</p>
        </div>
      </a>
      <a href="#" class="project-card flex-center column">
        <img src="img/project-3.jpg" alt="project-3" class="project-img">
        <div class="project-content">
          <h3 class="project-title">Proje 3</h3>
          <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed risus e</p>
        </div>
      </a>
    </div>
  </section>
  <!-- End projects -->
  <!-- Contact -->
  <section id="contact" class="flex-center row">
    <div class="contact-info">
      <h2>İletişim</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed risus e</p>
    </div>
    <div class="contact-form flex-center column">
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Adınız" required>
        <input type="email" name="email" placeholder="E-posta" required>
        <textarea name="message" placeholder="Mesajınız" required></textarea>
        <button type="submit" class="btn">Gönder</button>
      </form>
    </div>
    <div class="contact-social flex-center column">
      
      <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
      <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
      <a href="#" class="social-link"><i class="fab fa-instagram"></i></a></div>
  </section>
  <!-- End Contact -->
<?php get_footer() ?>
