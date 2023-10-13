<div class="homeachievement-container">
  <?php if ($repeater): ?>
    <div class="homeachievement-wrapper">
      <?php foreach ($repeater as $rep): ?>
        <div class="homeachievement-box">
          <img src="image/<?php echo $rep['image']; ?>" alt="<?php echo $rep['title'] ?>" class="img-responsive">	
          <h5><?php echo $rep['title'] ?></h5>
        </div>
      <?php endforeach ?>
    </div>
	<?php endif ?>
</div>