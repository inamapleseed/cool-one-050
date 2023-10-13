<div class="aboutus-container">
  <h2 class="aboutus-title"><?= $aboutus_title; ?></h2>
	<?php if ($repeater): ?>
		<?php foreach ($repeater as $even => $rep): ?>
			<div data-aos="fade-right" data-aos-delay="300" class="i-con <?php echo $even % 2 ? 'even' : 'odd'; ?>">
				<div class="img-container">
					<img src="image/<?php echo $rep['image']; ?>" alt="<?php echo $rep['title'] ?>" class="img-responsive">	
				</div>
				<div class="text-container">
					<img src="image/<?php echo $rep['icon']; ?>" alt="<?php echo $rep['title']; ?>"/>
					<h5><?php echo $rep['title'] ?></h5>
					<div class="p">
						<?php echo html_entity_decode($rep['text']); ?>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	<?php endif ?>
  <h2 class="specialize-title"><?= $specialize_title; ?></h2>
  <?php if ($repeatertwo): ?>
    <div class="specialize-wrapper">
      <?php foreach ($repeatertwo as $rep): ?>
        <div class="specialize-container">
          <img src="image/<?php echo $rep['image']; ?>" alt="<?php echo $rep['title'] ?>" class="img-responsive">	
          <h5><?php echo $rep['title'] ?></h5>
        </div>
      <?php endforeach ?>
    </div>
	<?php endif ?>
</div>