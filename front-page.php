<?php 
/*Front page template */
get_header();
?>

<div class="masthead">
<div class="covervid-wrapper">
<video class="covervid-video" autoplay loop>
<source src="<?php bloginfo('template_url')?>/video/meapu.webm" type="video/webm">
<source src="<?php bloginfo('template_url')?>/video/meapu.mp4" type="video/mp4">
</video>
</div>

<div class="row">
<div class="large-12 columns">
<div class="pitch-line">
<h1>
<span>Rakkaudesta puhtauteen<br></span>
<!--<span>Uusimaa siivouspalvelut</span>-->
</h1>

<a href="services" class="button large button--services">Palvelut täältä</a>
</div>
</div>
</div>
</div>

<div class="section-wrapper">
  <div class="row intro-content">
    <div class="small-12 large-9 large-centered column text-center">
      <h1 class="title">Uusimaa siivouspalvelut</h1><p>”Oma koti kullan kallis.” Erityisesti silloin, kun se loistaa puhtauttaan. 
Kuvittele kauniisti sijattu peti, puhtautta hohtavat peilit ja keittiö, lattiat, jotka eivät ole pölyä nähneetkään. Tämä on mitä me rakastamme tehdä ja olemme valmiita siivoamaan sinun tilasi samalla ammattitaidolla ja rakkaudella, jolla hoidamme jokaisen asiakkaamme kodin, työympäristön ja tulonlähteen. 
</p>
    </div>
  </div>
</div>

<div id="cleaning-services" class="section-wrapper section-wrapper--services">
  <div class="row">
    <div class="small-12 large-8 large-centered column text-center">
      <h1 class="title invert--color">Palvelumme sinulle </h1>
      <p class="invert--color section-intro">Jokainen palveluistamme toimimetaan suurella sydämellä ja rautaisella ammattitaidolla. Kun me pääsemme käsiksi likaan, ei siitä jää kenellekkään mitään nähtävää.</p>
    </div>
  </div>

  <div class="row">
    <div class="small-12 large-8 large-centered column text-center">
      <div class="row small-up-1 medium-up-2 large-up-3 home-services">
        <div class="column">
          <div class="home-service">
            <a href="services/#house-cleaning-service">
              <div class="icon house-icon"></div>
              <p><strong>Kotisiivous</strong></p>
              <div class="icon link-icon"></div>
            </a>
          </div>
        </div>

        <div class="column">
          <div class="home-service">
            <a href="services/#condo-cleaning-service">
              <div class="icon condo-icon"></div>
              <p><strong>Airbnb siivous</strong></p>
              <div class="icon link-icon"></div>
            </a>
          </div>
        </div>

        <div class="column">
          <div class="home-service">
            <a href="services/#office-cleaning-service">
              <div class="icon office-icon"></div>
              <p><strong>Toimistosiivous</strong></p>
              <div class="icon link-icon"></div>
            </a>
          </div>
        </div>
        
        <div class="column">
          <div class="home-service">
            <a href="services/#moving-cleaning-service">
              <div class="icon spray-icon"></div>
              <p><strong>Muuttosiivous</strong></p>
              <div class="icon link-icon"></div>
            </a>
          </div>
        </div>
        
        
        <div class="column">
          <div class="home-service">
            <a href="get-an-estimate/index.html">
              <div class="icon moving-icon"></div>
              <p><strong>Lahjakortti <br></strong></p>
              <div class="icon link-icon"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-wrapper section-wrapper--media">
  <div class="row">
    <div class="small-12 large-8 large-centered column text-center">
      <h1 class="title">Meidän siivotessa <br>ei mitään lakaista maton alle.</h1>
      <p class="section-intro">Haluamme olla luottamuksesi arvoinen yritys. Tämän takia jokaiseen siivoukseemme sisältyy tyytyväisyys takuu. Jos et ole tyytyväinen lopputulokseen me tulemme tekemään uuden siivouksen ilmaiseksi. </p>
    </div>
  </div>


    </div>
  </div>
</div>
<div class="section-wrapper section-wrapper--testimonials testimonials">
  <div class="row">
    <div class="small-12 medium-8 large-5 medium-centered column text-center testimonials__title">
      <h1 class="invert--color">Asiakkaaltamme kuultua</h1>
    </div>
  </div>

  <div class="row">
    <div class="large-4 columns">
      <p>
        <strong>Tuula Helsingistä sanoi:</strong><br>
        <i class="icon quote-icon"></i> I have been using Clean My Space occasionally when I need some extra help. They’ve always done a great job - the staff show up on time, ask the right questions and have done the work to my specifications.       </p>
    </div>

    <div class="large-4 columns">
      <p>
        <strong>Aune Helsingistä sanoi:</strong><br>
        <i class="icon quote-icon"></i> They are amazing: always on time, very professional, efficient and I always come back to an Immaculate apartment. The communication has always been very good and the customer service is very responsive.       </p>
    </div>

    <div class="large-4 columns">
      <p>
        <strong>Jarmela Helsingistä sanoi:</strong><br>
        <i class="icon quote-icon"></i> The standard of cleaning is higher by far than any other service we have used. The difference is noticeable - everything sparkles. Staff are very friendly, polite, and accommodating.       </p>
    </div>
  </div>
</div>



<?php get_footer(); 
?>