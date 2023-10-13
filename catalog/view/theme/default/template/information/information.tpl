<?php echo $header; ?>
<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>">
      <?php if($description) { ?>
        <div class="information-container">
          <h2 class="information-title"><?php echo $heading_title; ?></h2>
          <?php echo $description; ?>
        </div>
      <?php } ?>
      <?php echo $content_top; ?>
    </div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $content_bottom; ?>
<?php echo $footer; ?>