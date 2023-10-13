<div class="homeservices-container">
  <h2 class="homeservices-title"><?= $services_title; ?></h2>
  <?php if ($repeater): ?>
    <div class="homeservices-wrapper">
      <?php foreach ($repeater as $rep): ?>
        <a href="<?= $rep['link']; ?>">
          <div class="homeservices-box">
            <img src="image/<?php echo $rep['image']; ?>" alt="<?php echo $rep['title'] ?>" class="img-responsive">	
            <h5><?php echo $rep['title'] ?></h5>
          </div>
        </a>
      <?php endforeach ?>
    </div>
	<?php endif ?>
</div>