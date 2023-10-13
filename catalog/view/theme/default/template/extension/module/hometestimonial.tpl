<div class="hometestimonial-container">
  <?php if($testimonials){ ?>
    <h2 class="hometestimonial-title"><?= $title; ?></h2>
      <div class="slider-container">
        <div id="tesSlide">
          <?php foreach($testimonials as $tes){ ?>
          <div class="tes-wrapper" style="background:url('image/catalog/coolone/Homepage/bg_hp-testi.png');
                                          background-repeat: no-repeat;
                                          background-position-y: bottom;">
            <div class="text-container">
              <h4 class="tes-title"><?= $tes['author']; ?></h4>
              <div class="tes-description"><?= $tes['text']; ?></div>
            </div>
            <img class="quote" src="image/catalog/coolone/Homepage/icon_hp-testi-quote.png" alt="apostrophe"/>
          </div>
          <?php } ?>
        </div>
      </div>
  <?php } ?>
</div>

<script type="text/javascript">
  $("#tesSlide").slick({
    slidesToShow: 3,
    dots: false,
    infinite: true,
    speed: 300,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    prevArrow: "<div class='pointer slick-nav left prev absolute'><div class='absolute position-center-center'><i class='fa fa-chevron-left fa-2em'></i></div></div>",
    nextArrow: "<div class='pointer slick-nav right next absolute'><div class='absolute position-center-center'><i class='fa fa-chevron-right fa-2em'></i></div></div>",
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 3
        }
      },{
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          autoplay: true,
        }
      },{
        breakpoint: 541,
        settings: {
          slidesToShow: 1,
          autoplay: true,
        }
      }
    ]
  });
</script>