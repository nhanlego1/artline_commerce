<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 11/23/16
 * Time: 9:51 AM
 */
?>

<?php if ($terms): ?>
    <div class="category-wrapper">
        <?php foreach ($terms as $tid => $nodes): ?>
            <?php $term = taxonomy_term_load($tid); ?>
            <h3><?php print l($term->name, 'taxonomy/term/' . $term->tid) ?></h3>
            <?php if (isset($term->field_image_banner[LANGUAGE_NONE])): ?>
                <div class="image-banner-cate">
                    <?php print theme('image_style', array('path' => $term->field_image_banner['und'][0]['uri'], 'style_name' => 'banner_cate')); ?>
                </div>
            <?php endif; ?>
            <?php if ($nodes): ?>
                <div class="owl-carousel owl-theme">
                    <?php foreach ($nodes as $node): ?>
                        <div class="views-row grid-7">
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
                                <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                    <div class="field-items">
                                        <div class="field-item">
                                            <?php print _trim_character($node->field_short_desc[LANGUAGE_NONE][0]['value'], 100); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
