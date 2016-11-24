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

    <div class="grid-12 product-image-detail">
        <?php print render($content['field_product_images']); ?>
    </div>
    <div class="grid-14 product-info-detail">

        <div<?php print $content_attributes; ?>>
            <?php print render($content['title_field']) ?>
            <div class="commerce-product-extra-field commerce-product-extra-field-sku node-38-product-sku">
                <div class="commerce-product-sku">
                    <div class="commerce-product-sku-label">
                        Mã sản phẩm: <span><?php print $content['product:sku']['#sku'] ?></span>
                    </div>
                </div>
            </div>
            <?php print render($content['product:commerce_price']) ?>
            <div class="body-wrapper">
                <div class="less-body">
                    <h3>Thông tin sản phẩm</h3>
                    <?php print render($content['body']); ?>
                </div>
                <div class="more-less">
                    <a class="show" href="#">+ Xem thêm</a>
                    <a class="less" style="display: none;" href="#">-- Thu gọn</a>
                </div>
            </div>
            <div class="add-to-cart-detail">
                <h2>Đặt mua sản phẩm</h2>
                <span class="title-buy"><?php print t('Vui lòng chọn màu và số lượng.') ?></span>
                <div class="clearfix"></div>
                <?php $form_state['build_info']['args'] = array($node);
                $form = drupal_build_form('artline_form_add_to_cart', $form_state);
                print drupal_render($form); ?>
            </div>
            <?php print render($content['service_links']); ?>

            <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['product:sku']);
            hide($content['comments']);
            hide($content['links']);
            unset($content['field_product']);
            // print render($content);

            ?>
        </div>

    </div>


    <div class="clearfix">
        <?php if (!empty($content['links'])): ?>
            <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
        <?php endif; ?>

        <?php print render($content['comments']); ?>
    </div>
</article>
