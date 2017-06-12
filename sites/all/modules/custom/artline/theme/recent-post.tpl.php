<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if($nodes): ?>
<div id="recent-posts-2" class="visible-all-devices ">
  <h4>Bài viết mới nhất</h4>
  <ul>
    <?php foreach($nodes as $node): ?>
    <li>
      <?php print l($node->title,'node/'.$node->nid) ?>
    </li>
    
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>

