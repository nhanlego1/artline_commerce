<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$node = node_load($fields['nid_1']->raw);
?>


  <a href="<?php print url('node/'.$node->nid); ?>" >
    <?php print $fields['field_product_images']->content ?>
    <span class="js_widget_product_title"><?php print $node->title ?></span>
  </a>
  <div class="star-rating" title="">
   <?php print $fields['field_rate']->content ?>
  </div>
  <span class="js_widget_product_price">
    <del><?php print $fields['php_1']->content ?></del>
    <ins><?php print $fields['php']->content ?></ins>
  </span>


