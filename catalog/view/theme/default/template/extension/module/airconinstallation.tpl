<div class="airconinstallation-container">
  
  <?php if ($repeater): ?>
    <div class="upper-content-wrapper">
    <?php foreach ($repeater as $even => $rep): ?>
      <div data-aos="fade-right" data-aos-delay="300" class="i-con <?php echo $even % 2 ? 'even' : 'odd'; ?>">
        <div class="img-container">
          <img src="image/<?php echo $rep['image']; ?>" alt="<?= $rep['title'] ?>" class="img-responsive">	
        </div>
        <div class="text-container">
          <h2><?php echo $rep['title'] ?></h2>
          <div class="p">
            <?php echo html_entity_decode($rep['text']); ?>
          </div>
        </div>
      </div>
    <?php endforeach ?>
      </div>
  <?php endif ?>
 
  <?php if ($repeatertwo): ?>
    <div class="middle-content-wrapper">
    <?php $midRepCount = 1; ?>
    <?php foreach ($repeatertwo as $rep): ?>
      <div data-aos="fade-right" data-aos-delay="300" class="middle-box">
        <div class="img-container">
          <img src="image/<?php echo $rep['icon']; ?>" alt="<?= $rep['title'] ?>" class="img-responsive">	
        </div>
        <div class="text-container">
          <h3><span class="middle-rep-count"><?php echo $midRepCount; ?></span> <?php echo $rep['title'] ?></h3>
          <div class="p">
            <?php echo html_entity_decode($rep['text']); ?>
          </div>
        </div>
      </div>
        <?php $midRepCount++; ?>
    <?php endforeach ?>
    </div>
  <?php endif ?>

  <?php if ($repeaterthree): ?>
    <h2 class="pricing-title"><?= $pricing_title; ?></h2>
    <div class="pricing-content-wrapper">
        <?php foreach ($repeaterthree as $rep): ?>
          <div class="pricing-box">
            <h5 class="pricing-box-title"><?php echo $rep['title'] ?></h5>
            <div class="pricing-box-text">
              <?php echo html_entity_decode($rep['text']); ?>
            </div>
          </div>
        <?php endforeach ?>
    </div>
  <?php endif ?>
  
  <?php if($repeaterfour){ ?>
    <h2 class="brands-title"><?= $brands_title; ?></h2>
    <div class="brands-content-wrapper">
      <div class="manufacturer manufacturer">
        <div class="slider-container">
          <div id="manuSlide">
            <?php foreach($repeaterfour as $manufacturer){ ?>
              <img class="img-responsive" src="<?= 'image/' . $manufacturer['image']; ?>" alt="<?= $manufacturer['title']; ?>" />
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  
  <!-- <?php if ($repeaterfive): ?>
    <div class="lower-content-wrapper">
    <?php foreach ($repeaterfive as $rep): ?>
      <div data-aos="fade-right" data-aos-delay="300" class="lower-box">
        <div class="img-container">
          <img src="image/<?php echo $rep['icon']; ?>" alt="<?= $rep['title'] ?>" class="img-responsive">	
          <h3><?php echo $rep['title'] ?></h3>
        </div>
        <div class="text-container">
          <div class="p">
            <?php echo html_entity_decode($rep['text']); ?>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    </div>
  <?php endif ?> -->
  
</div>
<script type="text/javascript">
  $("#manuSlide").slick({
    slidesToShow: 4,
    dots: false,
    infinite: true,
    speed: 300,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    prevArrow: "<div class='pointer slick-nav left prev absolute'><div class='absolute position-center-center'><i class='fa fa-chevron-left fa-2em'></i></div></div>",
    nextArrow: "<div class='pointer slick-nav right next absolute'><div class='absolute position-center-center'><i class='fa fa-chevron-right fa-2em'></i></div></div>",
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      },{
        breakpoint: 900,
        settings: {
          slidesToShow: 2
        }
      },{
        breakpoint: 540,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
</script>