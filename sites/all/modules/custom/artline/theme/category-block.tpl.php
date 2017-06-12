<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if($terms):  ?>
<div id="jigoshop_product_categories-2" class="visible-all-devices widget">
  <h3><?php print t('Danh mục sản phẩm')?></h3>
  <ul>
    <?php foreach($terms as $term): ?>
    <li class="cat-item cat-item-44">
      <?php print l($term->name,'taxonomy/term/'.$term->tid); ?>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>

