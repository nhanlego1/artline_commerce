<?php
/**
 * Product detail
 */
$term = taxonomy_term_load($node->field_category[LANGUAGE_NONE][0]['tid']);
drupal_add_library('system', 'ui.tabs');
?>
<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
    <header>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>"
                                              title="<?php print $title ?>"><?php print $title ?></a></h2>
    </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
    <footer class="submitted">
      <?php print $submitted; ?>
    </footer>
  <?php endif; ?>

  <div class="grid-9 product-image-detail">
    <?php if ($node->field_sale[LANGUAGE_NONE][0]['value'] == 1): ?>
      <span class="onsale">Sale!</span>
    <?php endif; ?>
    <div class="images">
      <?php foreach ($node->field_product_images[LANGUAGE_NONE] as $key => $image): ?>
        <?php if ($key == 0): ?>
          <a class="group1 cboxElement" href="<?php print image_style_url('original', $image['uri']) ?>"><?php print theme('image_style', array('path' => $image['uri'], 'style_name' => 'detail_top')) ?></a>
        <?php else: ?>
          <a class="group1 thumb cboxElement" href="<?php print image_style_url('original', $image['uri']) ?>"><?php print theme('image_style', array('path' => $image['uri'], 'style_name' => 'thum_top')) ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <?php unset($content['field_product_images']); ?>
  </div>
  <div class="grid-11 product-info-detail">

    <div<?php print $content_attributes; ?>>
      <div class="clearfix"></div>
      <?php print render($content['product:field_old_price']) ?>
      <?php print render($content['product:commerce_price']) ?>
      <div class="clearfix"></div>
      <p><?php print $node->field_short_desc[LANGUAGE_NONE][0]['value'] ?></p>
      <div class="commerce-product-extra-field commerce-product-extra-field-sku node-38-product-sku">
        <div class="commerce-product-sku">
          <div class="commerce-product-sku-label">
            Mã sản phẩm: <span><?php print $node->field_product_code[LANGUAGE_NONE][0]['value'] ?></span>
          </div>
        </div>
      </div>


      <div class="add-to-cart-detail">
        <span class="title-buy"><?php print t('Vui lòng chọn màu và số lượng.') ?></span>
        <div class="clearfix"></div>
        <?php
        $form_state['build_info']['args'] = array($node);
        $form = drupal_build_form('artline_form_add_to_cart', $form_state);
        print drupal_render($form);
        ?>
      </div>
      <div class="product_meta"> 
        <div class="posted_in"><?php print t('Posted in') ?> <?php print l($term->name, 'taxonomy/term/' . $term->tid) ?> </div>
      </div>
      <?php print render($content['service_links']); ?>
      <!-- AddToAny BEGIN -->
      <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
        <a class="a2a_button_facebook"></a>
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_google_plus"></a>
        <a class="a2a_button_pinterest"></a>
        <a class="a2a_button_tumblr"></a>
      </div>
      <script async src="https://static.addtoany.com/menu/page.js"></script>
      <!-- AddToAny END -->

      <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['product:sku']);
      hide($content['comments']);
      hide($content['links']);
      unset($content['field_product']);
      unset($content['body']);
      // dsm($content);
      ?>
    </div>

  </div>

  <div class="grid-18 body-wrapper">

    <div id="tabs" class="tabs">
      <ul>
        <li><a href="#tabs-1"><?php print t('Description') ?></a></li>
        <li><a href="#tabs-2"><?php print t('Đánh giá') ?></a></li>
      </ul>
      <div id="tabs-1" class="panel">
        <?php print $node->body[LANGUAGE_NONE][0]['value']; ?>
      </div>
      <div id="tabs-2" class="panel">
        <div class="clearfix">
          <?php print render($content['field_rate']); ?>
          <?php if (!empty($content['links'])): ?>
            <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
          <?php endif; ?>

          <?php print render($content['comments']); ?>
        </div>
      </div>

    </div>

  </div>
  <div class="clearfix"></div>  
  <div class="related products">
    <h2><?php print t('Related Products') ?></h2>
    <?php print views_embed_view('product_list', 'page_2', $node->field_category[LANGUAGE_NONE][0]['tid']); ?>
    <div class="clear"></div>      
  </div>

</article>

