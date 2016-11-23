<?php
/**
 * @file
 * Default template for Commerce packing slip.
 *
 * Available variables:
 * - $commerce_order: The loaded order entity.
 * - $order_views_view: The rendered order view.
 * - $logo: The logo image html.
 *
 * @see commerce_packing_slip_view().
 */
?>

<div class="packing-slip">

  <?php print $logo; ?>

  <?php print $order_views_view; ?>

</div>
<?php if(arg(4)=='view' && arg(5)=='print'): ?>
<script type="text/javascript">
  jQuery(document).ready(function () { window.print(); });
</script>
<?php endif; ?>
