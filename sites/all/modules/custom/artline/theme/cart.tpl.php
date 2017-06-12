<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="jigoshop_cart-2" class="visible-all-devices cart-holder">
  <h3>Cart</h3>
  <div class="widget_shopping_cart_content">
    <?php
    $block = module_invoke('commerce_cart', 'block_view', 'cart');
    print render($block['content']);
    ?>
  </div>
</div>
</div>
