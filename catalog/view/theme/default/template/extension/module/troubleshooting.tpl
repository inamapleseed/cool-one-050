<div class="services-container">
  <?php if ($repeater): ?>
    <div class="services-wrapper">
          <?php foreach ($repeater as $even => $rep): ?>
            <div data-aos="fade-right" data-aos-delay="300" class="i-con <?php echo $even % 2 ? 'even' : 'odd'; ?>">
              <div class="img-container">
                <img src="image/<?php echo $rep['image']; ?>" alt="image" class="img-responsive">	
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
    <h2 class="pricing-title"><?= $pricing_title; ?></h2>
    <div class="pricing-text"><?= html_entity_decode($pricing_text_upper); ?></div>
    <div class="pricing-box-wrapper">
        <?php foreach ($repeatertwo as $rep): ?>
          <div class="pricing-box">
            <h5 class="pricing-box-title"><?php echo $rep['title'] ?></h5>
            <hr>
            <div class="pricing-box-text">
              <?php echo html_entity_decode($rep['text']); ?>
            </div>
          </div>
        <?php endforeach ?>
    </div>
    <div class="pricing-text"><?= html_entity_decode($pricing_text_bottom); ?></div>
  <?php endif ?>

  <?php if ($repeaterthree): ?>
    <div class="lower-content-wrapper">
    <?php foreach ($repeaterthree as $rep): ?>
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
  <?php endif ?>
</div>