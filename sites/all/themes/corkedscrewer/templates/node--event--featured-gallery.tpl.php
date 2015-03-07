  <?php
  $options = array('absolute' => TRUE);
  $nid = 1; // Node ID
  $url = url('node/' . $content["field_field_carousel_image"]['#object']->nid, $options);
  ?>
<div class="slider-item-image"><a href="<?php echo $url ?>"><?php echo render($content['field_field_carousel_image'])?></a></div>
  <div class="slider-item-title"><?php echo render($content['field_field_carousel_title'])?></div>
  <div class="slider-item-body"><?php echo render($content['field_field_carousel_text'])?></div>
