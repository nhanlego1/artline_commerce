<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
global $language;
?>
<?php if ($nodes): ?>
  <?php foreach ($nodes as $node):?>
    <div class="span4">
      <div class="banner-wrap top_banner">
        <a href="<?php print url($node->field_link[LANGUAGE_NONE][0]['url']) ?>" class="banner_main_link">
          <figure>
            <?php print theme('image_style', array('path' => $node->field_image[$language->language][0]['uri'], 'style_name' => 'push')) ?>
          </figure>
          <h5><span><?php print $node->title ?></span></h5>
        </a>
      </div><!-- .banner-wrap (end) --></div>
  <?php endforeach; ?>
<?php endif; ?>

