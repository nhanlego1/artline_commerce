<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 11/30/16
 * Time: 10:07 PM
 */
$cate = taxonomy_term_load(arg(2));
?>
<h3><?php print l($cate->name, 'taxonomy/term/' . $cate->tid) ?></h3>
<?php if (isset($cate->field_image_banner[LANGUAGE_NONE])): ?>
   <div class="image-banner-cate">
      <?php print theme('image_style', array('path' => $cate->field_image_banner['und'][0]['uri'], 'style_name' => 'banner_cate')); ?>
   </div>
<?php endif; ?>
<?php foreach ($terms as $term): ?>
   <?php print $term; ?>
<?php endforeach; ?>
