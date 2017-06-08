<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 11/23/16
 * Time: 9:51 AM
 */
?>

<?php if ($data): ?>
  <div class="category-wrapper">
    <h3><?php print t('Các sản phẩm khác'); ?></h3>
    <?php if ($nodes = $data): ?>
      <div class="owl-carousel owl-theme">
        <?php foreach ($nodes as $node): ?>
          <div class="views-row grid-6">
            <?php if (isset($node->field_is_home[LANGUAGE_NONE]) && $node->field_is_home[LANGUAGE_NONE][0]['value'] == 1): ?>
              <div class="image-hot"></div>
            <?php endif; ?>
            <a href="<?php print url('node/' . $node->nid) ?>">
              <div class="field field-name-field-product-images field-type-image field-label-hidden">
                <div class="field-items">
                  <div class="field-item">
                    <?php print theme('image_style', array('path' => $node->field_product_images[LANGUAGE_NONE][0]['uri'], 'style_name' => 'product_medium')) ?>
                  </div>
                </div>
              </div>
              <div class="views-field views-field-title">
                <span class="field-content"><?php print $node->title ?></span>
              </div>
              <div class="views-field views-field-php-1">
                <span class="field-content"><?php print _get_old_price_node($node->nid) ?></span>
              </div>
              <div class="views-field views-field-php">
                <span class="field-content"><?php print _get_price_node($node->nid) ?></span>
              </div>
              <div class="field field-name-field-short-desc field-type-text field-label-hidden">
                <div class="field-items">
                  <div class="field-item even">
                    <?php print _trim_character($node->field_short_desc[LANGUAGE_NONE][0]['value'], 100); ?>
                  </div>                                   
                </div>                 
              </div>
              <?php
                $form_idp = commerce_cart_add_to_cart_form_id(array($node->field_product[LANGUAGE_NONE][0]['product_id']));
                //in this case product_id of 7 corresponds to a silver level 
                $productp = commerce_product_load($node->field_product[LANGUAGE_NONE][0]['product_id']);
                $line_itemp = commerce_product_line_item_new($productp, 1);  // 1 is quantity
                $line_itemp->data['context']['product_ids'] = array($node->field_product[LANGUAGE_NONE][0]['product_id']);
                $formp = drupal_get_form($form_idp, $line_itemp);
                print drupal_render($formp);   // renders add to cart for product id of 7
                ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>
<?php endif; ?>
