<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$node = node_load($fields['nid']->raw);
?>

<article id="post<?php print $node->nid ?>" class="post post__holder">
  <header class="post-header">
    <h2 class="post-title">
      <a href="<?php print url('node/'.$node->nid) ?>" title="<?php print $node->title ?>"><?php print $node->title ?></a>
    </h2>
  </header>
  <figure class="featured-thumbnail thumbnail ">
    <a href="<?php print url('node/'.$node->nid) ?>" title="Donec tempor libero">
      <?php print $fields['field_image']->content ?>
    </a>
  </figure>	
  <!-- Post Content -->
  <div class="post_content">
    <div class="excerpt">
      <?php print $fields['body']->content ?> 
    </div>
    <a href="<?php print url('node/'.$node->nid) ?>" class="btn btn-primary">Xem thêm</a>
    <div class="clearfix"></div>
  </div>

</article>

