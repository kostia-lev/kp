<?php
/**
 * @file
 * Default theme implementation to wrap featured_content blocks.
 *
 * Available variables:
 * - $block_classes: A string containing the CSS classes for the DIV tag.
 * - $block_classes_array: An array containing each of the CSS classes.
 * - $settings: An array of the block's settings. Includes type and block data.
 * -- some example data:
 * -- $block_settings['header']
 * -- $block_settings['footer']
 * -- $block_settings['links']
 * -- $block_settings['full_nodes']
 * -- $block_settings['more-link']
 * -- $block_settings['rss-link']
 * -- $block_settings['style']
 *
 * @see template_preprocess_featured_content_block()
 * @see theme_featured_content_block()
 */
?>

<!--#slideshow-->
<div id="slideshow">

  <!--slides-->
  <div class="slides">
  <?php if (! empty($block_settings['full_nodes'])): ?>
      <?php $node_views = $block_settings['full_nodes']; ?>
      <?php foreach ($node_views as $node_view): ?>
      <!--slider-item-->
      <div class="slider-item">
        <?php print $node_view; ?>
      </div>
      <!--EOF:slider-item-->
      <?php endforeach; ?>
<?php endif; ?>

<!--EOF:slider-item-->
</div>
<!--EOF:slides-->

<!--slide-control-->
<div class="slide-control">
  <div id="prev" href="#"><span class="websymbols"><</span></div>
  <div id="next" href="#"><span class="websymbols">></span></div>
</div>
<!--EOF:slide-control-->

<!--#slide-nav-->
<ul id="slide-nav">
  <?php for($i=0; $i < count($node_views); $i++): ?>
  <li><a href="#"></a></li>
  <?php endfor;?>
</ul>
<!--EOF:#slide-nav-->

</div>
<!--EOF:#slideshow-->